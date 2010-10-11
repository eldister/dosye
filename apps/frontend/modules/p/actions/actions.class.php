<?php

/**
 * p actions.
 *
 * @package    dosye
 * @subpackage p
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pActions extends sfActions
{
  
  public function executeSearch(sfWebRequest $request)
  {
      $terms = explode(' ', $request->GetParameter('search_terms', ''));
      if (array_count_values($terms) > 0)
      {
          $query = Doctrine::getTable('Person')->createQuery('a');
          foreach ($terms as $term)
          {
              if ($term != '')
              {
                $query = $query->orWhere("internal_id LIKE ?", '%'.$term.'%' );
                $query = $query->orWhere("identification LIKE ?", '%'.$term.'%' );
                $query = $query->orWhere("first_name LIKE ?", '%'.$term.'%' );
                $query = $query->orWhere("last_name LIKE ?", '%'.$term.'%' );
              }
          }

          $this->searchTerms = implode(' ', $terms);
          $this->persons = $query->execute();
      }
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->person = Doctrine::getTable('Person')->find(array($request->getParameter('id')));
    $this->files = $this->person->getFiles();
    $this->forward404Unless($this->person);
  }

  public function executeUpload(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    // TODO: agregar código para subir el archivo

    $this->setTemplate('show');
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PersonForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PersonForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonForm($person);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
    $this->form = new PersonForm($person);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($person = Doctrine::getTable('Person')->find(array($request->getParameter('id'))), sprintf('Object person does not exist (%s).', $request->getParameter('id')));
    $person->delete();

    $this->redirect('p/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $person = $form->save();

      $this->redirect('p/edit?id='.$person->getId());
    }
  }
}
