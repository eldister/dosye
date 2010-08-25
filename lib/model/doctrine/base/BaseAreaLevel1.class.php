<?php

/**
 * BaseAreaLevel1
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $description
 * @property Doctrine_Collection $Person
 * @property Doctrine_Collection $AreaLevel2
 * 
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getPerson()      Returns the current record's "Person" collection
 * @method Doctrine_Collection getAreaLevel2()  Returns the current record's "AreaLevel2" collection
 * @method AreaLevel1          setDescription() Sets the current record's "description" value
 * @method AreaLevel1          setPerson()      Sets the current record's "Person" collection
 * @method AreaLevel1          setAreaLevel2()  Sets the current record's "AreaLevel2" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAreaLevel1 extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('area_level1');
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Person', array(
             'local' => 'id',
             'foreign' => 'address_area1'));

        $this->hasMany('AreaLevel2', array(
             'local' => 'id',
             'foreign' => 'area1_id'));
    }
}