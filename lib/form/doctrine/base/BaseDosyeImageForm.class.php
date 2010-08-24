<?php

/**
 * DosyeImage form base class.
 *
 * @method DosyeImage getObject() Returns the current form's model object
 *
 * @package    dosye
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedInheritanceTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseDosyeImageForm extends DosyeFileForm
{
  protected function setupInheritance()
  {
    parent::setupInheritance();

    $this->widgetSchema->setNameFormat('dosye_image[%s]');
  }

  public function getModelName()
  {
    return 'DosyeImage';
  }

}
