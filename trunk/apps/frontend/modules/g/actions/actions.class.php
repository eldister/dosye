<?php

/**
 * g actions.
 *
 * @package    dosye
 * @subpackage g
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class gActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->groupings = Doctrine::getTable('Grouping')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->grouping = Doctrine::getTable('Grouping')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->grouping);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GroupingForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GroupingForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($grouping = Doctrine::getTable('Grouping')->find(array($request->getParameter('id'))), sprintf('Object grouping does not exist (%s).', $request->getParameter('id')));
    $this->form = new GroupingForm($grouping);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($grouping = Doctrine::getTable('Grouping')->find(array($request->getParameter('id'))), sprintf('Object grouping does not exist (%s).', $request->getParameter('id')));
    $this->form = new GroupingForm($grouping);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($grouping = Doctrine::getTable('Grouping')->find(array($request->getParameter('id'))), sprintf('Object grouping does not exist (%s).', $request->getParameter('id')));
    $grouping->delete();

    $this->redirect('g/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $grouping = $form->save();

      $this->redirect('g/edit?id='.$grouping->getId());
    }
  }
}
