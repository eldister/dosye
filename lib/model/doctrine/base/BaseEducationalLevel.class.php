<?php

/**
 * BaseEducationalLevel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $description
 * @property Doctrine_Collection $Person
 * 
 * @method string              getDescription() Returns the current record's "description" value
 * @method Doctrine_Collection getPerson()      Returns the current record's "Person" collection
 * @method EducationalLevel    setDescription() Sets the current record's "description" value
 * @method EducationalLevel    setPerson()      Sets the current record's "Person" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEducationalLevel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('educational_level');
        $this->hasColumn('description', 'string', null, array(
             'type' => 'string',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Person', array(
             'local' => 'id',
             'foreign' => 'educational_level'));
    }
}