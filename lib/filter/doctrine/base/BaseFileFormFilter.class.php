<?php

/**
 * File filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFileFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'original_filename' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'internal_filename' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'category'          => new sfWidgetFormChoice(array('choices' => array('' => '', 'Internal' => 'Internal', 'Public' => 'Public', 'Protected' => 'Protected'))),
      'visible'           => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'person_id'         => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Person'), 'add_empty' => true)),
      'content_type'      => new sfWidgetFormFilterInput(),
      'size'              => new sfWidgetFormFilterInput(),
      'type'              => new sfWidgetFormFilterInput(),
      'image_width'       => new sfWidgetFormFilterInput(),
      'image_height'      => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'original_filename' => new sfValidatorPass(array('required' => false)),
      'internal_filename' => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'category'          => new sfValidatorChoice(array('required' => false, 'choices' => array('Internal' => 'Internal', 'Public' => 'Public', 'Protected' => 'Protected'))),
      'visible'           => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'person_id'         => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Person'), 'column' => 'id')),
      'content_type'      => new sfValidatorPass(array('required' => false)),
      'size'              => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'type'              => new sfValidatorPass(array('required' => false)),
      'image_width'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_height'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'File';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'original_filename' => 'Text',
      'internal_filename' => 'Text',
      'description'       => 'Text',
      'category'          => 'Enum',
      'visible'           => 'Boolean',
      'person_id'         => 'ForeignKey',
      'content_type'      => 'Text',
      'size'              => 'Number',
      'type'              => 'Text',
      'image_width'       => 'Number',
      'image_height'      => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
      'created_by'        => 'ForeignKey',
      'updated_by'        => 'ForeignKey',
    );
  }
}
