<?php

/**
 * File form.
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FileForm extends BaseFileForm {

    public function configure() {
        // quita los campos que no se utilizan
        unset(
                $this['created_at'], $this['updated_at'],
                $this['created_by'], $this['updated_by']
        );

        // declara como ocultos los campos que no se deben mostrar al usuario
        $this->widgetSchema['original_filename'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['visible'] = new sfWidgetFormInputHidden(array('default' => true));
        $this->widgetSchema['person_id'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['content_type'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['size'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['type'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['image_width'] = new sfWidgetFormInputHidden();
        $this->widgetSchema['image_height'] = new sfWidgetFormInputHidden();

        // declara el control de selección de archivo
        $this->widgetSchema['internal_filename'] = new sfWidgetFormInputFile(array(
                    'label' => 'File'));

        // establece que la categoría se despliegue expandida
        $this->widgetSchema['category'] = new sfWidgetFormChoice(array('expanded' => true, 'choices' => array('Internal' => 'Internal', 'Public' => 'Public', 'Protected' => 'Protected')));


        $this->setValidators(array(
            'description'       => new sfValidatorString(array('max_length' => 255, 'required' => true)),
            'category'          => new sfValidatorChoice(array('choices' => array(0 => 'Internal', 1 => 'Public', 2 => 'Protected'), 'required' => true)),
            'internal_filename' => new sfValidatorFile(array(
                'path'     => sfConfig::get('sf_upload_dir').'/user',
                'required' => true,
                'max_size' => 10485760)) // 10MB
        ));
    }

}
