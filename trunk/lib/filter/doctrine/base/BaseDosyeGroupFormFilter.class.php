<?php

/**
 * DosyeGroup filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseDosyeGroupFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'group_name'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'photo_image_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('PhotoImage'), 'add_empty' => true)),
      'avatar_image_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AvatarImage'), 'add_empty' => true)),
      'description'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'due_date'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'created_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('CreatedBy'), 'add_empty' => true)),
      'updated_by'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('UpdatedBy'), 'add_empty' => true)),
      'sub_groups_list' => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup')),
      'persons_list'    => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson')),
      'files_list'      => new sfWidgetFormDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile')),
    ));

    $this->setValidators(array(
      'group_name'      => new sfValidatorPass(array('required' => false)),
      'photo_image_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('PhotoImage'), 'column' => 'id')),
      'avatar_image_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AvatarImage'), 'column' => 'id')),
      'description'     => new sfValidatorPass(array('required' => false)),
      'due_date'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'created_by'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('CreatedBy'), 'column' => 'id')),
      'updated_by'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('UpdatedBy'), 'column' => 'id')),
      'sub_groups_list' => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeGroup', 'required' => false)),
      'persons_list'    => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyePerson', 'required' => false)),
      'files_list'      => new sfValidatorDoctrineChoice(array('multiple' => true, 'model' => 'DosyeFile', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('dosye_group_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function addSubGroupsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.DosyeSubGroup DosyeSubGroup')
      ->andWhereIn('DosyeSubGroup.dosye_group_id', $values)
    ;
  }

  public function addPersonsListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.DosyeGroupPerson DosyeGroupPerson')
      ->andWhereIn('DosyeGroupPerson.dosye_person_id', $values)
    ;
  }

  public function addFilesListColumnQuery(Doctrine_Query $query, $field, $values)
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
      ->leftJoin($query->getRootAlias().'.DosyeGroupFile DosyeGroupFile')
      ->andWhereIn('DosyeGroupFile.dosye_file_id', $values)
    ;
  }

  public function getModelName()
  {
    return 'DosyeGroup';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'group_name'      => 'Text',
      'photo_image_id'  => 'ForeignKey',
      'avatar_image_id' => 'ForeignKey',
      'description'     => 'Text',
      'due_date'        => 'Date',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'created_by'      => 'ForeignKey',
      'updated_by'      => 'ForeignKey',
      'sub_groups_list' => 'ManyKey',
      'persons_list'    => 'ManyKey',
      'files_list'      => 'ManyKey',
    );
  }
}
