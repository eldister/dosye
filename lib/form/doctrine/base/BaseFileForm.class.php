<?php

/**
 * File form base class.
 *
 * @method File getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'original_filename' => new sfWidgetFormInputText(),
      'internal_filename' => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'category'          => new sfWidgetFormChoice(array('choices' => array('Internal' => 'Internal', 'Public' => 'Public', 'Protected' => 'Protected'))),
      'visible'           => new sfWidgetFormInputCheckbox(),
      'person_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'content_type'      => new sfWidgetFormInputText(),
      'size'              => new sfWidgetFormInputText(),
      'type'              => new sfWidgetFormInputText(),
      'image_width'       => new sfWidgetFormInputText(),
      'image_height'      => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'original_filename' => new sfValidatorString(array('max_length' => 255)),
      'internal_filename' => new sfValidatorString(array('max_length' => 255)),
      'description'       => new sfValidatorString(array('max_length' => 255)),
      'category'          => new sfValidatorChoice(array('choices' => array(0 => 'Internal', 1 => 'Public', 2 => 'Protected'), 'required' => false)),
      'visible'           => new sfValidatorBoolean(array('required' => false)),
      'person_id'         => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'required' => false)),
      'content_type'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'size'              => new sfValidatorInteger(array('required' => false)),
      'type'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_width'       => new sfValidatorInteger(array('required' => false)),
      'image_height'      => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'created_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'File';
  }

}
