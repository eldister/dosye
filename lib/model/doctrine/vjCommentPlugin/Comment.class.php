<?php

/**
 * Comment
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    dosye
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Comment extends PluginComment
{
  public function setUp()
  {
	  $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));
             
      BaseComment::setUp();
  }
}
