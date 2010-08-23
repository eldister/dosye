<?php

/**
 * Member form base class.
 *
 * @method Member getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMemberForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'name'                 => new sfWidgetFormInputText(),
      'image_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'type'                 => new sfWidgetFormInputText(),
      'last_name'            => new sfWidgetFormInputText(),
      'date_of_birth'        => new sfWidgetFormDate(),
      'cell_phone'           => new sfWidgetFormInputText(),
      'home_phone'           => new sfWidgetFormInputText(),
      'job_phone'            => new sfWidgetFormInputText(),
      'other_phone'          => new sfWidgetFormInputText(),
      'email'                => new sfWidgetFormInputText(),
      'nationality'          => new sfWidgetFormInputText(),
      'identification'       => new sfWidgetFormInputText(),
      'gender'               => new sfWidgetFormChoice(array('choices' => array('M' => 'M', 'F' => 'F'))),
      'marital_status'       => new sfWidgetFormInputText(),
      'has_a_job'            => new sfWidgetFormInputCheckbox(),
      'employment'           => new sfWidgetFormInputText(),
      'paid_job'             => new sfWidgetFormInputCheckbox(),
      'temporal_job'         => new sfWidgetFormInputCheckbox(),
      'address_area1'        => new sfWidgetFormInputText(),
      'address_area2'        => new sfWidgetFormInputText(),
      'address_area3'        => new sfWidgetFormInputText(),
      'address_neighborhood' => new sfWidgetFormInputText(),
      'address_directions'   => new sfWidgetFormInputText(),
      'church'               => new sfWidgetFormInputText(),
      'educational_level'    => new sfWidgetFormInputText(),
      'description'          => new sfWidgetFormInputText(),
      'due_date'             => new sfWidgetFormDate(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name'                 => new sfValidatorString(array('max_length' => 100)),
      'image_id'             => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'required' => false)),
      'type'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'last_name'            => new sfValidatorString(array('max_length' => 100)),
      'date_of_birth'        => new sfValidatorDate(array('required' => false)),
      'cell_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'home_phone'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'job_phone'            => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'other_phone'          => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'email'                => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nationality'          => new sfValidatorInteger(array('required' => false)),
      'identification'       => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'gender'               => new sfValidatorChoice(array('choices' => array(0 => 'M', 1 => 'F'), 'required' => false)),
      'marital_status'       => new sfValidatorInteger(array('required' => false)),
      'has_a_job'            => new sfValidatorBoolean(array('required' => false)),
      'employment'           => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'paid_job'             => new sfValidatorBoolean(array('required' => false)),
      'temporal_job'         => new sfValidatorBoolean(array('required' => false)),
      'address_area1'        => new sfValidatorPass(array('required' => false)),
      'address_area2'        => new sfValidatorPass(array('required' => false)),
      'address_area3'        => new sfValidatorPass(array('required' => false)),
      'address_neighborhood' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'address_directions'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'church'               => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'educational_level'    => new sfValidatorPass(array('required' => false)),
      'description'          => new sfValidatorString(array('max_length' => 255)),
      'due_date'             => new sfValidatorDate(),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
      'created_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'required' => false)),
      'updated_by'           => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('member[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Member';
  }

}
