<?php

/**
 * p actions.
 *
 * @package    dosye
 * @subpackage p
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pActions extends sfActions {

    public function executeSearch(sfWebRequest $request) {
        $terms = explode(' ', $request->GetParameter('search_terms', ''));
        if (array_count_values($terms) > 0) {
            $query = Doctrine::getTable('Person')->createQuery('a');
            foreach ($terms as $term) {
                if ($term != '') {
                    $query = $query->orWhere("internal_id LIKE ?", '%' . $term . '%');
                    $query = $query->orWhere("identification LIKE ?", '%' . $term . '%');
                    $query = $query->orWhere("first_name LIKE ?", '%' . $term . '%');
                    $query = $query->orWhere("last_name LIKE ?", '%' . $term . '%');
                }
            }

            $this->searchTerms = implode(' ', $terms);
            $this->persons = $query->execute();
        }
    }

    public function executeShow(sfWebRequest $request) {
        $this->person = Doctrine::getTable('Person')->find(array($request->getParameter('id')));
        $this->forward404Unless($this->person);
        $this->files = $this->person->getFiles();

        $this->fileForm = new FileForm();
    }

    public function executeUploadFile(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $fileFormValues = $request->getParameter('file');
        $fileFormFiles = $request->getFiles('file');

        $this->fileForm = new FileForm();
        $this->fileForm->bind($fileFormValues, $fileFormFiles);
        $this->fileForm->getObject()->set('original_filename', $fileFormFiles['internal_filename']['name']);
        $this->fileForm->getObject()->set('person_id', $request->getParameter('person_id'));
        $this->fileForm->getObject()->set('content_type', $fileFormFiles['internal_filename']['type']);
        $this->fileForm->getObject()->set('size', $fileFormFiles['internal_filename']['size']);

        if ($this->fileForm->isValid()) {

            $this->fileForm->save();
            $this->redirect('p/show?id=' . $request->getParameter('person_id') . '#files');
        } else {
            $this->person = Doctrine::getTable('Person')->find(array( $request->getParameter('person_id') ));
            $this->files = $this->person->getFiles();
            $this->setTemplate('show');
        }
    }

    public function executeDownloadFile(sfWebRequest $request) {
        // being sure no other content wil be output
        $this->setLayout(false);
        sfConfig::set('sf_web_debug', false);

        // TODO: validar acceso al archivo por parte del usuario
        $file = Doctrine::getTable('File')->find(array($request->getParameter('id')));

        $filePath = $this->getUserUploadDirectory() . $file->getInternalFilename();

        // check if the file exists
        $this->forward404Unless(file_exists($filePath));

        $this->prepareDownload($file->getOriginalFilename(), $filePath, $file->getSize());

        return sfView::NONE;
    }

    public function prepareDownload($outFilename, $internalFilePath, $fileSize) {
        $this->getResponse()->clearHttpHeaders();
        $this->getResponse()->addCacheControlHttpHeader('Cache-control', 'must-revalidate, post-check=0, pre-check=0');
        $this->getResponse()->setContentType('application/octet-stream', TRUE);
        $this->getResponse()->setHttpHeader('Content-Transfer-Encoding', 'binary', TRUE);
        $this->getResponse()->setHttpHeader('Content-Disposition', 'attachment; filename=' . $outFilename, TRUE);
        $this->getResponse()->setHttpHeader('Content-Length', $fileSize, TRUE);
        $this->getResponse()->sendHttpHeaders();

        $this->getResponse()->setContent(readfile($internalFilePath));
    }

    public function getUserUploadDirectory() {
        return sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR;
    }

    public function executeNew(sfWebRequest $request) {
        $this->form = new PersonForm();
    }

    public function executeCreate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new PersonForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request) {
        $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
        $this->form = new PersonForm($person);
    }

    public function executeUpdate(sfWebRequest $request) {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
        $this->form = new PersonForm($person);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request) {
        $request->checkCSRFProtection();

        $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
        $person->delete();

        $this->redirect('p/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form) {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $person = $form->save();

            $this->redirect('p/edit?id=' . $person->getId());
        }
    }

}
