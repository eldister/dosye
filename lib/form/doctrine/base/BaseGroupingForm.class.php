<?php

/**
 * Grouping form base class.
 *
 * @method Grouping getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGroupingForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'name'                => new sfWidgetFormInputText(),
      'photo_image_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'description'         => new sfWidgetFormInputText(),
      'due_date'            => new sfWidgetFormDate(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
      'created_by'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'sub_grouping_list'   => new sfWidgetFormChoiceAutocomplete(array('multiple' => true, 'model' => 'Grouping')),
      'super_grouping_list' => new sfWidgetFormChoiceAutocomplete(array('multiple' => true, 'model' => 'Grouping')),
      'person_list'         => new sfWidgetFormChoiceAutocomplete(array('multiple' => true, 'model' => 'Person')),
      'file_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'File')),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                => new sfValidatorString(array('max_length' => 100)),
      'photo_image_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
      'description'         => new sfValidatorString(array('max_length' => 255)),
      'due_date'            => new sfValidatorDate(array('required' => false)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
      'created_by'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'sub_grouping_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Grouping', 'required' => false)),
      'super_grouping_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Grouping', 'required' => false)),
      'person_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Person', 'required' => false)),
      'file_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'File', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grouping[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Grouping';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['sub_grouping_list']))
    {
      $this->setDefault('sub_grouping_list', $this->object->SubGrouping->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['super_grouping_list']))
    {
      $this->setDefault('super_grouping_list', $this->object->SuperGrouping->getPrimaryKeys());
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
    $this->saveSubGroupingList($con);
    $this->saveSuperGroupingList($con);
    $this->savePersonList($con);
    $this->saveFileList($con);

    parent::doSave($con);
  }

  public function saveSubGroupingList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sub_grouping_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SubGrouping->getPrimaryKeys();
    $values = $this->getValue('sub_grouping_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SubGrouping', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SubGrouping', array_values($link));
    }
  }

  public function saveSuperGroupingList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['super_grouping_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SuperGrouping->getPrimaryKeys();
    $values = $this->getValue('super_grouping_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SuperGrouping', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SuperGrouping', array_values($link));
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
