<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony/lib/autoload/sfCoreAutoload.class.php';
sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enablePlugins('sfDoctrinePlugin');
    $this->enablePlugins('vjCommentPlugin');
    $this->enablePlugins('sfDoctrineGuardPlugin');
    $this->enablePlugins('sfDoctrineGuardLoginHistoryPlugin');
    $this->enablePlugins('fzBlameablePlugin');
    $this->enablePlugins('sfAdminThemejRollerPlugin');
    $this->enablePlugins('sfFormExtraPlugin');
    $this->enablePlugins('sfThumbnailPlugin');
    $this->enablePlugins('laiguAdminThemePlugin');
  }
}
