<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <title>Módulo Administrativo de Dosye</title>
    <?php use_stylesheet('admin.css') ?>
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <h1>
          <a href="<?php echo url_for('@homepage') ?>">
            <img src="/images/logo.gif" alt="Dosye" />
          </a>
        </h1>
      </div>

      <?php if ($sf_user->isAuthenticated()): ?>
      <div class="you">
        <ul class="logged_in">
            <li><?php echo $sf_user->getName() ?></li>
            <li><?php echo link_to('salir &raquo;', '@sf_guard_signout') ?></li>
        </ul>
      </div><!-- close .you -->
               
      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Usuarios', 'guard/users') ?>
          </li>
          <li>
            <?php echo link_to('Grupos', 'guard/groups') ?>
          </li>
            <li>
            <?php echo link_to('Anotaciones', '@commentAdmin') ?>
          </li>
            <li>
            <?php echo link_to('Reportes sobre Anotaciones', '@commentReportAdmin') ?>
          </li>
        </ul>
      </div>
      <?php endif; ?>

      <div id="content">
        <?php echo $sf_content ?>
      </div>

      <div id="footer">
          Dosye &copy; 2010
      </div>
    </div>
  </body>
</html>
