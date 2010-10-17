<?php

/**
 * Person form.
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PersonForm extends BasePersonForm {

    public function configure() {
        // configura las fechas
        $format = '%day%/%month%/%year%';
        $today = array(
            'year' => date('Y'),
            'month' => date('n'),
            'day' => date('j')
        );
        $birth_range = range(1900, date('Y'));
        $birth_years = array_combine($birth_range, $birth_range);

        $pea_range = range(2000, date('Y'));
        $pea_years = array_combine($pea_range, $pea_range);

        $this->widgetSchema['date_of_birth'] = new sfWidgetFormDate(array('format' => $format, 'years' => $birth_years));
        $this->widgetSchema['pea_begin_date'] = new sfWidgetFormDate(array('format' => $format, 'default' => $today, 'years' => $pea_years));
        $this->widgetSchema['pea_finish_date'] = new sfWidgetFormDate(array('format' => $format, 'years' => $pea_years));

        unset(
                $this['created_at'], $this['updated_at'],
                $this['created_by'], $this['updated_by']
        );

        // valida el email
        $this->validatorSchema['email'] = new sfValidatorAnd(array(
                    $this->validatorSchema['email'],
                    new sfValidatorEmail(),
                ));

        // configura los sexos
        $this->widgetSchema['gender'] = new sfWidgetFormChoice(array('choices' => array('M' => 'Masculino', 'F' => 'Femenino')));

        // convierte los campos de texto que corresponda, a áreas de texto
        $this->widgetSchema['address_directions'] = new sfWidgetFormTextarea();
    }

}
