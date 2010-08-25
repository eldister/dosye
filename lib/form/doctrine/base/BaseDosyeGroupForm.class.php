<?php

/**
 * DosyeGroup form base class.
 *
 * @method DosyeGroup getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDosyeGroupForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'name'              => new sfWidgetFormInputText(),
      'photo_image_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'add_empty' => true)),
      'avatar_image_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AvatarImage'), 'add_empty' => true)),
      'description'       => new sfWidgetFormInputText(),
      'due_date'          => new sfWidgetFormDate(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'sub_groups_list'   => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup')),
      'super_groups_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup')),
      'persons_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson')),
      'files_list'        => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile')),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'              => new sfValidatorString(array('max_length' => 100)),
      'photo_image_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'required' => false)),
      'avatar_image_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AvatarImage'), 'required' => false)),
      'description'       => new sfValidatorString(array('max_length' => 255)),
      'due_date'          => new sfValidatorDate(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
      'created_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'sub_groups_list'   => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup', 'required' => false)),
      'super_groups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup', 'required' => false)),
      'persons_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson', 'required' => false)),
      'files_list'        => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dosye_group[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DosyeGroup';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['sub_groups_list']))
    {
      $this->setDefault('sub_groups_list', $this->object->SubGroups->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['super_groups_list']))
    {
      $this->setDefault('super_groups_list', $this->object->SuperGroups->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['persons_list']))
    {
      $this->setDefault('persons_list', $this->object->Persons->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['files_list']))
    {
      $this->setDefault('files_list', $this->object->Files->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveSubGroupsList($con);
    $this->saveSuperGroupsList($con);
    $this->savePersonsList($con);
    $this->saveFilesList($con);

    parent::doSave($con);
  }

  public function saveSubGroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['sub_groups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SubGroups->getPrimaryKeys();
    $values = $this->getValue('sub_groups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SubGroups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SubGroups', array_values($link));
    }
  }

  public function saveSuperGroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['super_groups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->SuperGroups->getPrimaryKeys();
    $values = $this->getValue('super_groups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('SuperGroups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('SuperGroups', array_values($link));
    }
  }

  public function savePersonsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['persons_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Persons->getPrimaryKeys();
    $values = $this->getValue('persons_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Persons', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Persons', array_values($link));
    }
  }

  public function saveFilesList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['files_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Files->getPrimaryKeys();
    $values = $this->getValue('files_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Files', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Files', array_values($link));
    }
  }

}
