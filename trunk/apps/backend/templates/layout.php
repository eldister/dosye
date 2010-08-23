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

      <div id="menu">
        <ul>
          <li>
            <?php echo link_to('Usuarios', 'guard/users') ?>
          </li>
          <li>
            <?php echo link_to('Grupos', 'guard/groups') ?>
          </li>
            <li>
            <?php echo link_to('Comentarios', '@commentAdmin') ?>
          </li>
            <li>
            <?php echo link_to('Reportes sobre Comentarios', '@commentReportAdmin') ?>
          </li>
        <li>
            <?php echo link_to('Salir', '@sf_guard_signout') ?>
          </li></ul>
      </div>

      <div id="content">
        <?php echo $sf_content ?>
      </div>

      <div id="footer">
          Dosye &copy; 2010
      </div>
    </div>
  </body>
</html>