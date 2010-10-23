<?php use_helper('I18N') ?>

<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  <?php echo $form['_csrf_token']->render() ?>
  <table>
    <tbody>
      <?php echo $form['username']->renderRow(null,'Usuario o correo electrónico') ?>
      <?php echo $form['password']->renderRow(null,'Contraseña') ?>
      <?php echo $form['remember']->renderRow(null,'Recordarme') ?>
    </tbody>
    <tfoot>
      <tr>
        <td colspan="2">
          <input type="submit" value="<?php echo __('Ingresar al Sistema', null, 'sf_guard') ?>" />
          
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
            <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('¿Olvidó su contraseña?', null, 'sf_guard') ?></a>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('¿Quiere registrarse?', null, 'sf_guard') ?></a>
          <?php endif; ?>
        </td>
      </tr>
    </tfoot>
  </table>
</form>
