<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

	<div id="content">
	    <div class="wrap">
		<form action="<?php echo url_for('person/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
		<?php if (!$form->getObject()->isNew()): ?>
		<input type="hidden" name="sf_method" value="put" />
		<?php endif; ?>

		<?php echo $form['id']->render() ?>
		<?php echo $form['_csrf_token']->render() ?>

		<div class="left_panel">
		    <?php echo image_tag('person.png', 'class=photo') ?>
		</div>

		<div class="right_panel">
		    <h3 class="content_title"><?php echo ($form->getObject()->isNew() ? 'Nueva persona' : $form->getObject()->getFullName().' ('.$form->getObject()->getInternalId().')') ?></h3>

		    <div id="content_tabs">
			<script type="text/javascript">
			$(function(){
				// Declara los tabs en JQuery
				$('#content_tabs').tabs();
			});
			</script>

			<ul>
				<li><a href="#profile">Perfil</a></li>
				<li><a href="#personalinfo">Datos Personales</a></li>
			</ul>
			<div id="profile">
                            <div class="public_info"><strong>Atenci&oacute;n:</strong> esta informaci&oacute;n es p&uacute;blica.</div>
			    <table>
                                <?php echo $form['first_name']->renderRow(null, 'Nombre:') ?>
                                <?php echo $form['last_name']->renderRow(null, 'Apellidos:') ?>
                                <?php echo $form['gender']->renderRow(null, 'Sexo:') ?>
                                <?php echo $form['identification']->renderRow(null, 'Identificaci&oacute;n:') ?>
                                <?php echo $form['internal_id']->renderRow(null, 'Expediente:') ?>
			    </table>
			</div>

			<div id="personalinfo">
                            <div class="protected_info"><strong>Atenci&oacute;n:</strong> esta informaci&oacute;n es protegida.</div>
                            <table>
								<?php echo $form['date_of_birth']->renderRow(null, 'Fecha de nacimiento:') ?>
                                <?php echo $form['nationality_id']->renderRow(null, 'Nacionalidad:') ?>
								<?php echo $form['marital_status_id']->renderRow(null, 'Estado civil:') ?>
								<?php echo $form['employment']->renderRow(null, 'Ocupaci&oacute;n:') ?>
								<?php echo $form['has_a_job']->renderRow(null, 'Tiene trabajo remunerado:') ?>
								<?php echo $form['temporal_job']->renderRow(null, 'Trabajo temporal:') ?>
								<?php echo $form['educational_level']->renderRow(null, 'Escolaridad:') ?>
								<?php echo $form['formation']->renderRow(null, 'Formaci&oacute;n:') ?>
								<?php echo $form['church']->renderRow(null, 'Iglesia:') ?>
                                <?php echo $form['church_begin_year']->renderRow(null, 'A&ntilde;o de ingreso a la iglesia actual:') ?>
                                <?php echo $form['conversion_year']->renderRow(null, 'A&ntilde;o de conversi&oacute;n:') ?>
                                <?php echo $form['pea_begin_date']->renderRow(null, 'Fecha de ingreso a PEA:') ?>
                                <?php echo $form['pea_finish_date']->renderRow(null, 'Fecha de salida del PEA:') ?>
			    </table>
                            <table>
                                <caption>Direcci&oacute;n:</caption>
                                <tbody>
                                    <?php echo $form['address_area1']->renderRow(null, 'Provincia:') ?>
                                    <?php echo $form['address_area2']->renderRow(null, 'Cant&oacute;n:') ?>
                                    <?php echo $form['address_area3']->renderRow(null, 'Distrito:') ?>
                                    <?php echo $form['address_neighborhood']->renderRow(null, 'Barrio o caser&iacute;o:') ?>
                                    <?php echo $form['address_directions']->renderRow(null, 'Otras se&ntilde;as:') ?>
                                </tbody>
                            </table>

                            <table>
                                <caption>Contacto:</caption>
                                <tbody>
                                    <?php echo $form['home_phone']->renderRow(null, 'Tel&eacute;fono de la casa:') ?>
                                    <?php echo $form['job_phone']->renderRow(null, 'Tel&eacute;fono del trabajo:') ?>
                                    <?php echo $form['cell_phone']->renderRow(null, 'Tel&eacute;fono celular:') ?>
                                    <?php echo $form['other_phone']->renderRow(null, 'Otro tel&eacute;fono:') ?>
                                    <?php echo $form['email']->renderRow(null, 'Correo electr&oacute;nico:') ?>
                                    <?php echo $form['preferred_mean_id']->renderRow(null, 'Medio preferido de contacto:') ?>
                                </tbody>
                            </table>

			</div>


		    </div>
		</div>

		<div class="text-right">
			<input type="submit" value="Guardar"/>
			<a href="<?php if ($form->getObject()->isNew()) echo url_for('person/search'); else echo url_for('person/show?id='.$form->getObject()->getId()) ?>">Cancelar</a>
		</div>
                </form>

	    </div><!-- close .wrap -->
	</div><!-- close #content -->

