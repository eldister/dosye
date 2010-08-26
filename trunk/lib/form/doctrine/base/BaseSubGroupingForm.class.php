<?php

/**
 * SubGrouping form base class.
 *
 * @method SubGrouping getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseSubGroupingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'supergrouping_id' => new sfWidgetFormInputHidden(),
      'subgrouping_id'   => new sfWidgetFormInputHidden(),
      'created_at'       => new sfWidgetFormDateTime(),
      'updated_at'       => new sfWidgetFormDateTime(),
      'created_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'supergrouping_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('supergrouping_id')), 'empty_value' => $this->getObject()->get('supergrouping_id'), 'required' => false)),
      'subgrouping_id'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('subgrouping_id')), 'empty_value' => $this->getObject()->get('subgrouping_id'), 'required' => false)),
      'created_at'       => new sfValidatorDateTime(),
      'updated_at'       => new sfValidatorDateTime(),
      'created_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('sub_grouping[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'SubGrouping';
  }

}
