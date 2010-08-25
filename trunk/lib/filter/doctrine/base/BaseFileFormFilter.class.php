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
      'type'              => new sfWidgetFormFilterInput(),
      'image_width'       => new sfWidgetFormFilterInput(),
      'image_height'      => new sfWidgetFormFilterInput(),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'team_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
      'person_list'       => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Person')),
      'file_list'         => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'Team')),
    ));

    $this->setValidators(array(
      'original_filename' => new sfValidatorPass(array('required' => false)),
      'internal_filename' => new sfValidatorPass(array('required' => false)),
      'description'       => new sfValidatorPass(array('required' => false)),
      'type'              => new sfValidatorPass(array('required' => false)),
      'image_width'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'image_height'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
      'team_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
      'person_list'       => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Person', 'required' => false)),
      'file_list'         => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'Team', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('file_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addTeamListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.TeamFile TeamFile')
      ->andWhereIn('TeamFile.file_id', $values)
    ;
  }

  public function addPersonListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.PersonFile PersonFile')
      ->andWhereIn('PersonFile.file_id', $values)
    ;
  }

  public function addFileListColumnQuery(Doctrine_Query $query, $field, $values)
  {
    if (!is_array($values))
    {
      $values = array($values);
    }

    if (!count($values))
    {
      return;
    }

    $query
      ->leftJoin($query->getRootAlias().'.TeamFile TeamFile')
      ->andWhereIn('TeamFile.id', $values)
    ;
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
      'type'              => 'Text',
      'image_width'       => 'Number',
      'image_height'      => 'Number',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
      'created_by'        => 'ForeignKey',
      'updated_by'        => 'ForeignKey',
      'team_list'         => 'ManyKey',
      'person_list'       => 'ManyKey',
      'file_list'         => 'ManyKey',
    );
  }
}
