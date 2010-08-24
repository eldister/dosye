<?php

/**
 * BaseDosyeGroupFile
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $group_id
 * @property integer $file_id
 * @property boolean $visible
 * @property DosyeGroup $Group
 * @property DosyeFile $File
 * 
 * @method integer        getGroupId()  Returns the current record's "group_id" value
 * @method integer        getFileId()   Returns the current record's "file_id" value
 * @method boolean        getVisible()  Returns the current record's "visible" value
 * @method DosyeGroup     getGroup()    Returns the current record's "Group" value
 * @method DosyeFile      getFile()     Returns the current record's "File" value
 * @method DosyeGroupFile setGroupId()  Sets the current record's "group_id" value
 * @method DosyeGroupFile setFileId()   Sets the current record's "file_id" value
 * @method DosyeGroupFile setVisible()  Sets the current record's "visible" value
 * @method DosyeGroupFile setGroup()    Sets the current record's "Group" value
 * @method DosyeGroupFile setFile()     Sets the current record's "File" value
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseDosyeGroupFile extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('dosye_group_file');
        $this->hasColumn('group_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('file_id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             ));
        $this->hasColumn('visible', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('DosyeGroup as Group', array(
             'local' => 'group_id',
             'foreign' => 'id'));

        $this->hasOne('DosyeFile as File', array(
             'local' => 'file_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $fzblameable0 = new Doctrine_Template_fzBlameable();
        $this->actAs($timestampable0);
        $this->actAs($fzblameable0);
    }
}