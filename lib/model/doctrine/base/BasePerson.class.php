<?php

/**
 * BasePerson
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $internal_id
 * @property string $first_name
 * @property string $last_name
 * @property integer $user_id
 * @property integer $photo_image_id
 * @property date $date_of_birth
 * @property string $cell_phone
 * @property string $home_phone
 * @property string $job_phone
 * @property string $other_phone
 * @property string $email
 * @property integer $nationality_id
 * @property string $identification
 * @property enum $gender
 * @property integer $marital_status_id
 * @property boolean $has_a_job
 * @property string $employment
 * @property boolean $paid_job
 * @property boolean $temporal_job
 * @property integer $address_area1
 * @property integer $address_area2
 * @property integer $address_area3
 * @property string $address_neighborhood
 * @property string $address_directions
 * @property string $church
 * @property integer $educational_level
 * @property Nationality $Nationality
 * @property MaritalStatus $MaritalStatus
 * @property AreaLevel1 $AreaLevel1
 * @property AreaLevel2 $AreaLevel2
 * @property AreaLevel3 $AreaLevel3
 * @property EducationalLevel $EducationalLevel
 * @property Image $PhotoImage
 * @property sfGuardUser $User
 * @property Doctrine_Collection $Files
 * @property Doctrine_Collection $PersonFile
 * 
 * @method string              getInternalId()           Returns the current record's "internal_id" value
 * @method string              getFirstName()            Returns the current record's "first_name" value
 * @method string              getLastName()             Returns the current record's "last_name" value
 * @method integer             getUserId()               Returns the current record's "user_id" value
 * @method integer             getPhotoImageId()         Returns the current record's "photo_image_id" value
 * @method date                getDateOfBirth()          Returns the current record's "date_of_birth" value
 * @method string              getCellPhone()            Returns the current record's "cell_phone" value
 * @method string              getHomePhone()            Returns the current record's "home_phone" value
 * @method string              getJobPhone()             Returns the current record's "job_phone" value
 * @method string              getOtherPhone()           Returns the current record's "other_phone" value
 * @method string              getEmail()                Returns the current record's "email" value
 * @method integer             getNationalityId()        Returns the current record's "nationality_id" value
 * @method string              getIdentification()       Returns the current record's "identification" value
 * @method enum                getGender()               Returns the current record's "gender" value
 * @method integer             getMaritalStatusId()      Returns the current record's "marital_status_id" value
 * @method boolean             getHasAJob()              Returns the current record's "has_a_job" value
 * @method string              getEmployment()           Returns the current record's "employment" value
 * @method boolean             getPaidJob()              Returns the current record's "paid_job" value
 * @method boolean             getTemporalJob()          Returns the current record's "temporal_job" value
 * @method integer             getAddressArea1()         Returns the current record's "address_area1" value
 * @method integer             getAddressArea2()         Returns the current record's "address_area2" value
 * @method integer             getAddressArea3()         Returns the current record's "address_area3" value
 * @method string              getAddressNeighborhood()  Returns the current record's "address_neighborhood" value
 * @method string              getAddressDirections()    Returns the current record's "address_directions" value
 * @method string              getChurch()               Returns the current record's "church" value
 * @method integer             getEducationalLevel()     Returns the current record's "educational_level" value
 * @method Nationality         getNationality()          Returns the current record's "Nationality" value
 * @method MaritalStatus       getMaritalStatus()        Returns the current record's "MaritalStatus" value
 * @method AreaLevel1          getAreaLevel1()           Returns the current record's "AreaLevel1" value
 * @method AreaLevel2          getAreaLevel2()           Returns the current record's "AreaLevel2" value
 * @method AreaLevel3          getAreaLevel3()           Returns the current record's "AreaLevel3" value
 * @method EducationalLevel    getEducationalLevel()     Returns the current record's "EducationalLevel" value
 * @method Image               getPhotoImage()           Returns the current record's "PhotoImage" value
 * @method sfGuardUser         getUser()                 Returns the current record's "User" value
 * @method Doctrine_Collection getFiles()                Returns the current record's "Files" collection
 * @method Doctrine_Collection getPersonFile()           Returns the current record's "PersonFile" collection
 * @method Person              setInternalId()           Sets the current record's "internal_id" value
 * @method Person              setFirstName()            Sets the current record's "first_name" value
 * @method Person              setLastName()             Sets the current record's "last_name" value
 * @method Person              setUserId()               Sets the current record's "user_id" value
 * @method Person              setPhotoImageId()         Sets the current record's "photo_image_id" value
 * @method Person              setDateOfBirth()          Sets the current record's "date_of_birth" value
 * @method Person              setCellPhone()            Sets the current record's "cell_phone" value
 * @method Person              setHomePhone()            Sets the current record's "home_phone" value
 * @method Person              setJobPhone()             Sets the current record's "job_phone" value
 * @method Person              setOtherPhone()           Sets the current record's "other_phone" value
 * @method Person              setEmail()                Sets the current record's "email" value
 * @method Person              setNationalityId()        Sets the current record's "nationality_id" value
 * @method Person              setIdentification()       Sets the current record's "identification" value
 * @method Person              setGender()               Sets the current record's "gender" value
 * @method Person              setMaritalStatusId()      Sets the current record's "marital_status_id" value
 * @method Person              setHasAJob()              Sets the current record's "has_a_job" value
 * @method Person              setEmployment()           Sets the current record's "employment" value
 * @method Person              setPaidJob()              Sets the current record's "paid_job" value
 * @method Person              setTemporalJob()          Sets the current record's "temporal_job" value
 * @method Person              setAddressArea1()         Sets the current record's "address_area1" value
 * @method Person              setAddressArea2()         Sets the current record's "address_area2" value
 * @method Person              setAddressArea3()         Sets the current record's "address_area3" value
 * @method Person              setAddressNeighborhood()  Sets the current record's "address_neighborhood" value
 * @method Person              setAddressDirections()    Sets the current record's "address_directions" value
 * @method Person              setChurch()               Sets the current record's "church" value
 * @method Person              setEducationalLevel()     Sets the current record's "educational_level" value
 * @method Person              setNationality()          Sets the current record's "Nationality" value
 * @method Person              setMaritalStatus()        Sets the current record's "MaritalStatus" value
 * @method Person              setAreaLevel1()           Sets the current record's "AreaLevel1" value
 * @method Person              setAreaLevel2()           Sets the current record's "AreaLevel2" value
 * @method Person              setAreaLevel3()           Sets the current record's "AreaLevel3" value
 * @method Person              setEducationalLevel()     Sets the current record's "EducationalLevel" value
 * @method Person              setPhotoImage()           Sets the current record's "PhotoImage" value
 * @method Person              setUser()                 Sets the current record's "User" value
 * @method Person              setFiles()                Sets the current record's "Files" collection
 * @method Person              setPersonFile()           Sets the current record's "PersonFile" collection
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePerson extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('person');
        $this->hasColumn('internal_id', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 20,
             ));
        $this->hasColumn('first_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('last_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('photo_image_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('date_of_birth', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('cell_phone', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('home_phone', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('job_phone', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('other_phone', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('email', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('nationality_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('identification', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('gender', 'enum', 1, array(
             'type' => 'enum',
             'length' => 1,
             'values' => 
             array(
              0 => 'M',
              1 => 'F',
             ),
             ));
        $this->hasColumn('marital_status_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('has_a_job', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('employment', 'string', 50, array(
             'type' => 'string',
             'length' => 50,
             ));
        $this->hasColumn('paid_job', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('temporal_job', 'boolean', null, array(
             'type' => 'boolean',
             ));
        $this->hasColumn('address_area1', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('address_area2', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('address_area3', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('address_neighborhood', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('address_directions', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('church', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('educational_level', 'integer', null, array(
             'type' => 'integer',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Nationality', array(
             'local' => 'nationality_id',
             'foreign' => 'id'));

        $this->hasOne('MaritalStatus', array(
             'local' => 'marital_status_id',
             'foreign' => 'id'));

        $this->hasOne('AreaLevel1', array(
             'local' => 'address_area1',
             'foreign' => 'id'));

        $this->hasOne('AreaLevel2', array(
             'local' => 'address_area2',
             'foreign' => 'id'));

        $this->hasOne('AreaLevel3', array(
             'local' => 'address_area3',
             'foreign' => 'id'));

        $this->hasOne('EducationalLevel', array(
             'local' => 'educational_level',
             'foreign' => 'id'));

        $this->hasOne('Image as PhotoImage', array(
             'local' => 'photo_image_id',
             'foreign' => 'id'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('File as Files', array(
             'refClass' => 'PersonFile',
             'local' => 'file_id',
             'foreign' => 'id'));

        $this->hasMany('PersonFile', array(
             'local' => 'id',
             'foreign' => 'person_id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $fzblameable0 = new Doctrine_Template_fzBlameable();
        $commentable0 = new Doctrine_Template_Commentable();
        $this->actAs($timestampable0);
        $this->actAs($fzblameable0);
        $this->actAs($commentable0);
    }
}