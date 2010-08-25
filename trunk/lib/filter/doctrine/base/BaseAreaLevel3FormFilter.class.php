<?php

/**
 * AreaLevel3 filter form base class.
 *
 * @package    dosye
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAreaLevel3FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'area2_id'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('AreaLevel2'), 'add_empty' => true)),
      'description' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'area2_id'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('AreaLevel2'), 'column' => 'id')),
      'description' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('area_level3_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'AreaLevel3';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'area2_id'    => 'ForeignKey',
      'description' => 'Text',
    );
  }
}
