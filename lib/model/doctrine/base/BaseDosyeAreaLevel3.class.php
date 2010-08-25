<?php

/**
 * BaseDosyeAreaLevel3
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $area2_id
 * @property string $description
 * @property DosyeAreaLevel2 $AreaLevel2
 * @property Doctrine_Collection $DosyePerson
 * 
 * @method integer             getArea2Id()     Returns the current record's "area2_id" value
 * @method string              getDescription() Returns the current record's "description" value
 * @method DosyeAreaLevel2     getAreaLevel2()  Returns the current record's "AreaLevel2" value
 * @method Doctrine_Collection getDosyePerson() Returns the current record's "DosyePerson" collection
 * @method DosyeAreaLevel3     setArea2Id()     Sets the current record's "area2_id" value
 * @method DosyeAreaLevel3     setDescription() Sets the current record's "description" value
 * @method DosyeAreaLevel3     setAreaLevel2()  Sets the current record's "AreaLevel2" value
 * @method DosyeAreaLevel3     setDosyePerson() Sets the current record's "DosyePerson" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDosyeAreaLevel3 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dosye_area_level3');
        $this->hasColumn('area2_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DosyeAreaLevel2 as AreaLevel2', array(
             'local' => 'area2_id',
             'foreign' => 'id'));

        $this->hasMany('DosyePerson', array(
             'local' => 'id',
             'foreign' => 'address_area3'));
    }
}