<?php

/**
 * Person filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedInheritanceTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends MemberFormFilter
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('person_filters[%s]');
  }

  public function getModelName()
  {
    return 'Person';
  }
}
