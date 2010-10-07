<?php

/**
 * Person form.
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonForm extends BasePersonForm
{
  public function configure()
  {
	  // configura las fechas
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
  
	// configura los campos ocultos
	$this->widgetSchema['created_at'] = new sfWidgetFormInputHidden();
	$this->widgetSchema['updated_at'] = new sfWidgetFormInputHidden();
	$this->setValidator('created_at', new sfValidatorDateTime(array('required' => false)));
	$this->setValidator('updated_at', new sfValidatorDateTime(array('required' => false)));
	
  }
}
