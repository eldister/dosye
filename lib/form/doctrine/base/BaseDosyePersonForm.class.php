<?php

/**
 * DosyePerson form base class.
 *
 * @method DosyePerson getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDosyePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'internal_id'          => new sfWidgetFormInputText(),
      'first_name'           => new sfWidgetFormInputText(),
      'last_name'            => new sfWidgetFormInputText(),
      'photo_image_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'add_empty' => true)),
      'avatar_image_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AvatarImage'), 'add_empty' => true)),
      'date_of_birth'        => new sfWidgetFormDate(),
      'cell_phone'           => new sfWidgetFormInputText(),
      'home_phone'           => new sfWidgetFormInputText(),
      'job_phone'            => new sfWidgetFormInputText(),
      'other_phone'          => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'nationality_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Nationality'), 'add_empty' => true)),
      'identification'       => new sfWidgetFormInputText(),
      'gender'               => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MaritalStatus'), 'add_empty' => true)),
      'has_a_job'            => new sfWidgetFormInputCheckbox(),
      'employment'           => new sfWidgetFormInputText(),
      'paid_job'             => new sfWidgetFormInputCheckbox(),
      'temporal_job'         => new sfWidgetFormInputCheckbox(),
      'address_area1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel1'), 'add_empty' => true)),
      'address_area2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'add_empty' => true)),
      'address_area3'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel3'), 'add_empty' => true)),
      'address_neighborhood' => new sfWidgetFormInputText(),
      'address_directions'   => new sfWidgetFormInputText(),
      'church'               => new sfWidgetFormInputText(),
      'educational_level'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalLevel'), 'add_empty' => true)),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'files_list'           => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile')),
      'groups_list'          => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup')),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internal_id'          => new sfValidatorString(array('max_length' => 20)),
      'first_name'           => new sfValidatorString(array('max_length' => 100)),
      'last_name'            => new sfValidatorString(array('max_length' => 100)),
      'photo_image_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'required' => false)),
      'avatar_image_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AvatarImage'), 'required' => false)),
      'date_of_birth'        => new sfValidatorDate(array('required' => false)),
      'cell_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'home_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'job_phone'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'other_phone'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nationality_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Nationality'), 'required' => false)),
      'identification'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'gender'               => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'), 'required' => false)),
      'marital_status_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MaritalStatus'), 'required' => false)),
      'has_a_job'            => new sfValidatorBoolean(array('required' => false)),
      'employment'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'paid_job'             => new sfValidatorBoolean(array('required' => false)),
      'temporal_job'         => new sfValidatorBoolean(array('required' => false)),
      'address_area1'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel1'), 'required' => false)),
      'address_area2'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'required' => false)),
      'address_area3'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel3'), 'required' => false)),
      'address_neighborhood' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address_directions'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'church'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'educational_level'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalLevel'), 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
      'files_list'           => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile', 'required' => false)),
      'groups_list'          => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup', 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'DosyePerson', 'column' => array('internal_id')))
    );

    $this->widgetSchema->setNameFormat('dosye_person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'DosyePerson';
  }

  public function updateDefaultsFromObject()
  {
    parent::updateDefaultsFromObject();

    if (isset($this->widgetSchema['files_list']))
    {
      $this->setDefault('files_list', $this->object->Files->getPrimaryKeys());
    }

    if (isset($this->widgetSchema['groups_list']))
    {
      $this->setDefault('groups_list', $this->object->Groups->getPrimaryKeys());
    }

  }

  protected function doSave($con = null)
  {
    $this->saveFilesList($con);
    $this->saveGroupsList($con);

    parent::doSave($con);
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

  public function saveGroupsList($con = null)
  {
    if (!$this->isValid())
    {
      throw $this->getErrorSchema();
    }

    if (!isset($this->widgetSchema['groups_list']))
    {
      // somebody has unset this widget
      return;
    }

    if (null === $con)
    {
      $con = $this->getConnection();
    }

    $existing = $this->object->Groups->getPrimaryKeys();
    $values = $this->getValue('groups_list');
    if (!is_array($values))
    {
      $values = array();
    }

    $unlink = array_diff($existing, $values);
    if (count($unlink))
    {
      $this->object->unlink('Groups', array_values($unlink));
    }

    $link = array_diff($values, $existing);
    if (count($link))
    {
      $this->object->link('Groups', array_values($link));
    }
  }

}