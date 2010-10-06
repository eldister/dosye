<?php

/**
 * PersonFile form.
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonFileForm extends BasePersonFileForm
{
  public function configure()
  {
    $format = '%day%/%month%/%year%';
    $today = array(
                'year'  => date('Y'),       
                'month' => date('n'),
                'day'   => date('j')
	);
	$birth_range = range(1900, date('Y'));
    $birth_years = array_combine($birth_range,$birth_range);
    
    $pea_range = range(2000, date('Y'));
    $pea_years = array_combine($pea_range,$pea_range);
	
    $this->widgetSchema['date_of_birth'] = new sfWidgetFormDate(array('format' => $format, 'years' => $birth_years));
    $this->widgetSchema['pea_begin_date'] = new sfWidgetFormDate(array('format' => $format, 'default' => $today, 'years' => $pea_years));
    $this->widgetSchema['pea_finish_date'] = new sfWidgetFormDate(array('format' => $format, 'years' => $pea_years));  
    
    $this->validatorSchema['date_of_birth'] = new sfValidatorDate(array('max' => date('Y-m-d')); 
    $this->validatorSchema['pea_begin_date'] = new sfValidatorDate(array('max' => date('Y-m-d')); 
    $this->validatorSchema['pea_finish_date'] = new sfValidatorDate(array('max' => date('Y-m-d')); 
    
    $this->validatorSchema->setPostValidator(new sfValidatorSchemaCompare('pea_begin_date', '<', 'pea_finish_date'));
  }
}
