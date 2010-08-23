<?php

/**
 * Member filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMemberFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'name'                 => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'image_id'             => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Image'), 'add_empty' => true)),
      'type'                 => new sfWidgetFormFilterInput(),
      'last_name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'date_of_birth'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cell_phone'           => new sfWidgetFormFilterInput(),
      'home_phone'           => new sfWidgetFormFilterInput(),
      'job_phone'            => new sfWidgetFormFilterInput(),
      'other_phone'          => new sfWidgetFormFilterInput(),
      'email'                => new sfWidgetFormFilterInput(),
      'nationality_id'       => new sfWidgetFormFilterInput(),
      'identification'       => new sfWidgetFormFilterInput(),
      'gender'               => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfWidgetFormFilterInput(),
      'has_a_job'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'employment'           => new sfWidgetFormFilterInput(),
      'paid_job'             => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'temporal_job'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'address_area1'        => new sfWidgetFormFilterInput(),
      'address_area2'        => new sfWidgetFormFilterInput(),
      'address_area3'        => new sfWidgetFormFilterInput(),
      'address_neighborhood' => new sfWidgetFormFilterInput(),
      'address_directions'   => new sfWidgetFormFilterInput(),
      'church'               => new sfWidgetFormFilterInput(),
      'educational_level'    => new sfWidgetFormFilterInput(),
      'description'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'due_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'name'                 => new sfValidatorPass(array('required' => false)),
      'image_id'             => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Image'), 'column' => 'id')),
      'type'                 => new sfValidatorPass(array('required' => false)),
      'last_name'            => new sfValidatorPass(array('required' => false)),
      'date_of_birth'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cell_phone'           => new sfValidatorPass(array('required' => false)),
      'home_phone'           => new sfValidatorPass(array('required' => false)),
      'job_phone'            => new sfValidatorPass(array('required' => false)),
      'other_phone'          => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'nationality_id'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'identification'       => new sfValidatorPass(array('required' => false)),
      'gender'               => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'has_a_job'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'employment'           => new sfValidatorPass(array('required' => false)),
      'paid_job'             => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'temporal_job'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'address_area1'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'address_area2'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'address_area3'        => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'address_neighborhood' => new sfValidatorPass(array('required' => false)),
      'address_directions'   => new sfValidatorPass(array('required' => false)),
      'church'               => new sfValidatorPass(array('required' => false)),
      'educational_level'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'description'          => new sfValidatorPass(array('required' => false)),
      'due_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('member_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Member';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Text',
      'name'                 => 'Text',
      'image_id'             => 'ForeignKey',
      'type'                 => 'Text',
      'last_name'            => 'Text',
      'date_of_birth'        => 'Date',
      'cell_phone'           => 'Text',
      'home_phone'           => 'Text',
      'job_phone'            => 'Text',
      'other_phone'          => 'Text',
      'email'                => 'Text',
      'nationality_id'       => 'Number',
      'identification'       => 'Text',
      'gender'               => 'Enum',
      'marital_status_id'    => 'Number',
      'has_a_job'            => 'Boolean',
      'employment'           => 'Text',
      'paid_job'             => 'Boolean',
      'temporal_job'         => 'Boolean',
      'address_area1'        => 'Number',
      'address_area2'        => 'Number',
      'address_area3'        => 'Number',
      'address_neighborhood' => 'Text',
      'address_directions'   => 'Text',
      'church'               => 'Text',
      'educational_level'    => 'Number',
      'description'          => 'Text',
      'due_date'             => 'Date',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'created_by'           => 'ForeignKey',
      'updated_by'           => 'ForeignKey',
    );
  }
}
