<?php

/**
 * BaseImage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property Doctrine_Collection $Member
 * 
 * @method Doctrine_Collection getMember() Returns the current record's "Member" collection
 * @method Image               setMember() Sets the current record's "Member" collection
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
        $this->hasMany('Member', array(
             'local' => 'id',
             'foreign' => 'image_id'));
    }
}