<?php use_helper('I18N') ?>

<h2><?php echo __('La página que pides está asegurada y no tienes los suficientes privilegios para accederla.', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Ingrese al sistema para obtener acceso.', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>
