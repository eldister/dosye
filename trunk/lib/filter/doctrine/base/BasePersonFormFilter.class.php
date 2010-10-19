<?php

/**
 * Person filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BasePersonFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'internal_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'first_name'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'last_name'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'user_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'photo_image_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'add_empty' => true)),
      'active'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'date_of_birth'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'cell_phone'           => new sfWidgetFormFilterInput(),
      'home_phone'           => new sfWidgetFormFilterInput(),
      'job_phone'            => new sfWidgetFormFilterInput(),
      'other_phone'          => new sfWidgetFormFilterInput(),
      'email'                => new sfWidgetFormFilterInput(),
      'preferred_mean_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PreferredContactMean'), 'add_empty' => true)),
      'nationality_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Nationality'), 'add_empty' => true)),
      'identification'       => new sfWidgetFormFilterInput(),
      'gender'               => new sfWidgetFormChoice(array('choices' => array('' => '', 'M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MaritalStatus'), 'add_empty' => true)),
      'has_a_job'            => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'employment'           => new sfWidgetFormFilterInput(),
      'temporal_job'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'address_area1'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel1'), 'add_empty' => true)),
      'address_area2'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'add_empty' => true)),
      'address_area3'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel3'), 'add_empty' => true)),
      'address_neighborhood' => new sfWidgetFormFilterInput(),
      'address_directions'   => new sfWidgetFormFilterInput(),
      'church'               => new sfWidgetFormFilterInput(),
      'church_begin_year'    => new sfWidgetFormFilterInput(),
      'conversion_year'      => new sfWidgetFormFilterInput(),
      'pea_begin_date'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pea_finish_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'educational_level'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalLevel'), 'add_empty' => true)),
      'formation'            => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'           => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'internal_id'          => new sfValidatorPass(array('required' => false)),
      'first_name'           => new sfValidatorPass(array('required' => false)),
      'last_name'            => new sfValidatorPass(array('required' => false)),
      'user_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'photo_image_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PhotoImage'), 'column' => 'id')),
      'active'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'date_of_birth'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'cell_phone'           => new sfValidatorPass(array('required' => false)),
      'home_phone'           => new sfValidatorPass(array('required' => false)),
      'job_phone'            => new sfValidatorPass(array('required' => false)),
      'other_phone'          => new sfValidatorPass(array('required' => false)),
      'email'                => new sfValidatorPass(array('required' => false)),
      'preferred_mean_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PreferredContactMean'), 'column' => 'id')),
      'nationality_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Nationality'), 'column' => 'id')),
      'identification'       => new sfValidatorPass(array('required' => false)),
      'gender'               => new sfValidatorChoice(array('required' => false, 'choices' => array('M' => 'M', 'F' => 'F'))),
      'marital_status_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MaritalStatus'), 'column' => 'id')),
      'has_a_job'            => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'employment'           => new sfValidatorPass(array('required' => false)),
      'temporal_job'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'address_area1'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AreaLevel1'), 'column' => 'id')),
      'address_area2'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AreaLevel2'), 'column' => 'id')),
      'address_area3'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AreaLevel3'), 'column' => 'id')),
      'address_neighborhood' => new sfValidatorPass(array('required' => false)),
      'address_directions'   => new sfValidatorPass(array('required' => false)),
      'church'               => new sfValidatorPass(array('required' => false)),
      'church_begin_year'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'conversion_year'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'pea_begin_date'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'pea_finish_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'educational_level'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EducationalLevel'), 'column' => 'id')),
      'formation'            => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'           => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('person_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Person';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'internal_id'          => 'Text',
      'first_name'           => 'Text',
      'last_name'            => 'Text',
      'user_id'              => 'ForeignKey',
      'photo_image_id'       => 'ForeignKey',
      'active'               => 'Boolean',
      'date_of_birth'        => 'Date',
      'cell_phone'           => 'Text',
      'home_phone'           => 'Text',
      'job_phone'            => 'Text',
      'other_phone'          => 'Text',
      'email'                => 'Text',
      'preferred_mean_id'    => 'ForeignKey',
      'nationality_id'       => 'ForeignKey',
      'identification'       => 'Text',
      'gender'               => 'Enum',
      'marital_status_id'    => 'ForeignKey',
      'has_a_job'            => 'Boolean',
      'employment'           => 'Text',
      'temporal_job'         => 'Boolean',
      'address_area1'        => 'ForeignKey',
      'address_area2'        => 'ForeignKey',
      'address_area3'        => 'ForeignKey',
      'address_neighborhood' => 'Text',
      'address_directions'   => 'Text',
      'church'               => 'Text',
      'church_begin_year'    => 'Number',
      'conversion_year'      => 'Number',
      'pea_begin_date'       => 'Date',
      'pea_finish_date'      => 'Date',
      'educational_level'    => 'ForeignKey',
      'formation'            => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
      'created_by'           => 'ForeignKey',
      'updated_by'           => 'ForeignKey',
    );
  }
}
