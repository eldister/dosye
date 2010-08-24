<?php

/**
 * DosyeFile form base class.
 *
 * @method DosyeFile getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDosyeFileForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'original_filename' => new sfWidgetFormInputText(),
      'internal_filename' => new sfWidgetFormInputText(),
      'description'       => new sfWidgetFormInputText(),
      'type'              => new sfWidgetFormInputText(),
      'image_width'       => new sfWidgetFormInputText(),
      'image_height'      => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'dosye_files_list'  => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson')),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'original_filename' => new sfValidatorString(array('max_length' => 255)),
      'internal_filename' => new sfValidatorString(array('max_length' => 255)),
      'description'       => new sfValidatorString(array('max_length' => 255)),
      'type'              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image_width'       => new sfValidatorInteger(array('required' => false)),
      'image_height'      => new sfValidatorInteger(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'created_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'dosye_files_list'  => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dosye_file[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DosyeFile';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['dosye_files_list']))
    {
      $this->setDefault('dosye_files_list', $this->object->DosyeFiles->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveDosyeFilesList($con);

    parent::doSave($con);
  }

  public function saveDosyeFilesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['dosye_files_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->DosyeFiles->getPrimaryKeys();
    $values = $this->getValue('dosye_files_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('DosyeFiles', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('DosyeFiles', array_values($link));
    }
  }

}
