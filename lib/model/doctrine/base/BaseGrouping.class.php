<?php

/**
 * BaseGrouping
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property integer $photo_image_id
 * @property string $description
 * @property date $due_date
 * @property Doctrine_Collection $SubGrouping
 * @property Doctrine_Collection $SuperGrouping
 * @property Doctrine_Collection $Person
 * @property Doctrine_Collection $File
 * @property Image $Image
 * @property Doctrine_Collection $PersonGrouping
 * @property Doctrine_Collection $GroupingFile
 * 
 * @method string              getName()           Returns the current record's "name" value
 * @method integer             getPhotoImageId()   Returns the current record's "photo_image_id" value
 * @method string              getDescription()    Returns the current record's "description" value
 * @method date                getDueDate()        Returns the current record's "due_date" value
 * @method Doctrine_Collection getSubGrouping()    Returns the current record's "SubGrouping" collection
 * @method Doctrine_Collection getSuperGrouping()  Returns the current record's "SuperGrouping" collection
 * @method Doctrine_Collection getPerson()         Returns the current record's "Person" collection
 * @method Doctrine_Collection getFile()           Returns the current record's "File" collection
 * @method Image               getImage()          Returns the current record's "Image" value
 * @method Doctrine_Collection getPersonGrouping() Returns the current record's "PersonGrouping" collection
 * @method Doctrine_Collection getGroupingFile()   Returns the current record's "GroupingFile" collection
 * @method Grouping            setName()           Sets the current record's "name" value
 * @method Grouping            setPhotoImageId()   Sets the current record's "photo_image_id" value
 * @method Grouping            setDescription()    Sets the current record's "description" value
 * @method Grouping            setDueDate()        Sets the current record's "due_date" value
 * @method Grouping            setSubGrouping()    Sets the current record's "SubGrouping" collection
 * @method Grouping            setSuperGrouping()  Sets the current record's "SuperGrouping" collection
 * @method Grouping            setPerson()         Sets the current record's "Person" collection
 * @method Grouping            setFile()           Sets the current record's "File" collection
 * @method Grouping            setImage()          Sets the current record's "Image" value
 * @method Grouping            setPersonGrouping() Sets the current record's "PersonGrouping" collection
 * @method Grouping            setGroupingFile()   Sets the current record's "GroupingFile" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrouping extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grouping');
        $this->hasColumn('name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('photo_image_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 255,
             ));
        $this->hasColumn('due_date', 'date', null, array(
             'type' => 'date',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Grouping as SubGrouping', array(
             'refClass' => 'SubGrouping',
             'local' => 'id',
             'foreign' => 'supergrouping_id'));

        $this->hasMany('Grouping as SuperGrouping', array(
             'refClass' => 'SubGrouping',
             'local' => 'id',
             'foreign' => 'subgrouping_id'));

        $this->hasMany('Person', array(
             'refClass' => 'PersonGrouping',
             'local' => 'id',
             'foreign' => 'grouping_id'));

        $this->hasMany('File', array(
             'refClass' => 'GroupingFile',
             'local' => 'id',
             'foreign' => 'grouping_id'));

        $this->hasOne('Image', array(
             'local' => 'photo_image_id',
             'foreign' => 'id'));

        $this->hasMany('PersonGrouping', array(
             'local' => 'id',
             'foreign' => 'grouping_id'));

        $this->hasMany('GroupingFile', array(
             'local' => 'id',
             'foreign' => 'grouping_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $fzblameable0 = new Doctrine_Template_fzBlameable();
        $commentable0 = new Doctrine_Template_Commentable();
        $this->actAs($timestampable0);
        $this->actAs($fzblameable0);
        $this->actAs($commentable0);
    }
}