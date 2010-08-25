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
      'type'              => new sfWidgetFormInputText(),
      'image_width'       => new sfWidgetFormInputText(),
      'image_height'      => new sfWidgetFormInputText(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'team_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
      'person_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Person')),
      'file_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
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
      'team_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
      'person_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Person', 'required' => false)),
      'file_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
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

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['team_list']))
    {
      $this->setDefault('team_list', $this->object->Team->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['person_list']))
    {
      $this->setDefault('person_list', $this->object->Person->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['file_list']))
    {
      $this->setDefault('file_list', $this->object->File->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveTeamList($con);
    $this->savePersonList($con);
    $this->saveFileList($con);

    parent::doSave($con);
  }

  public function saveTeamList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['team_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Team->getPrimaryKeys();
    $values = $this->getValue('team_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Team', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Team', array_values($link));
    }
  }

  public function savePersonList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['person_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Person->getPrimaryKeys();
    $values = $this->getValue('person_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Person', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Person', array_values($link));
    }
  }

  public function saveFileList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['file_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->File->getPrimaryKeys();
    $values = $this->getValue('file_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('File', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('File', array_values($link));
    }
  }

}
