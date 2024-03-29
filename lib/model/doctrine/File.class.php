<?php

/**
 * File
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class File extends BaseFile {

    public static function getUserUploadDirectory() {
        return sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR . 'user' . DIRECTORY_SEPARATOR;
    }

    public static function getUserUploadUrl() {
        return '/uploads/user/';
    }

}