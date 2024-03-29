<?php

/**
 * BaseImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $Person
 * 
 * @method Doctrine_Collection getPerson() Returns the current record's "Person" collection
 * @method Image               setPerson() Sets the current record's "Person" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseImage extends File
{
    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Person', array(
             'local' => 'id',
             'foreign' => 'photo_image_id'));
    }
}