<?php

/**
 * Person form base class.
 *
 * @method Person getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePersonForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'internal_id'          => new sfWidgetFormInputText(),
      'first_name'           => new sfWidgetFormInputText(),
      'last_name'            => new sfWidgetFormInputText(),
      'user_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'photo_image_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'add_empty' => true)),
      'active'               => new sfWidgetFormInputCheckbox(),
      'date_of_birth'        => new sfWidgetFormDate(),
      'cell_phone'           => new sfWidgetFormInputText(),
      'home_phone'           => new sfWidgetFormInputText(),
      'job_phone'            => new sfWidgetFormInputText(),
      'other_phone'          => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'preferred_mean_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreferredContactMean'), 'add_empty' => true)),
      'nationality_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Nationality'), 'add_empty' => true)),
      'identification'       => new sfWidgetFormInputText(),
      'gender'               => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MaritalStatus'), 'add_empty' => true)),
      'has_a_job'            => new sfWidgetFormInputCheckbox(),
      'employment'           => new sfWidgetFormInputText(),
      'temporal_job'         => new sfWidgetFormInputCheckbox(),
      'address_area1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel1'), 'add_empty' => true)),
      'address_area2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'add_empty' => true)),
      'address_area3'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel3'), 'add_empty' => true)),
      'address_neighborhood' => new sfWidgetFormInputText(),
      'address_directions'   => new sfWidgetFormInputText(),
      'church'               => new sfWidgetFormInputText(),
      'church_begin_year'    => new sfWidgetFormInputText(),
      'conversion_year'      => new sfWidgetFormInputText(),
      'pea_begin_date'       => new sfWidgetFormDate(),
      'pea_finish_date'      => new sfWidgetFormDate(),
      'educational_level'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalLevel'), 'add_empty' => true)),
      'formation'            => new sfWidgetFormInputText(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'internal_id'          => new sfValidatorString(array('max_length' => 20)),
      'first_name'           => new sfValidatorString(array('max_length' => 100)),
      'last_name'            => new sfValidatorString(array('max_length' => 100)),
      'user_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'photo_image_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'required' => false)),
      'active'               => new sfValidatorBoolean(array('required' => false)),
      'date_of_birth'        => new sfValidatorDate(array('required' => false)),
      'cell_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'home_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'job_phone'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'other_phone'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'preferred_mean_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('PreferredContactMean'), 'required' => false)),
      'nationality_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Nationality'), 'required' => false)),
      'identification'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'gender'               => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'), 'required' => false)),
      'marital_status_id'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MaritalStatus'), 'required' => false)),
      'has_a_job'            => new sfValidatorBoolean(array('required' => false)),
      'employment'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'temporal_job'         => new sfValidatorBoolean(array('required' => false)),
      'address_area1'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel1'), 'required' => false)),
      'address_area2'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'required' => false)),
      'address_area3'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel3'), 'required' => false)),
      'address_neighborhood' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address_directions'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'church'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'church_begin_year'    => new sfValidatorInteger(array('required' => false)),
      'conversion_year'      => new sfValidatorInteger(array('required' => false)),
      'pea_begin_date'       => new sfValidatorDate(array('required' => false)),
      'pea_finish_date'      => new sfValidatorDate(array('required' => false)),
      'educational_level'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalLevel'), 'required' => false)),
      'formation'            => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Person', 'column' => array('internal_id')))
    );

    $this->widgetSchema->setNameFormat('person[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

}
