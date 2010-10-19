<?php use_helper('Date'); ?>
<?php use_helper('I18N'); ?>
<?php use_stylesheets_for_form($fileForm) ?>
<?php use_javascripts_for_form($fileForm) ?>
<?php include_partial('moduletop') ?>

<div id="content">
    <div class="wrap">

        <div class="left_panel">
           <?php if($person->getPhotoImage() && $person->getPhotoImage()->getInternalFilename() != ''): ?>
             <img src="<?php echo File::getUserUploadUrl().$person->getPhotoImage()->getInternalFilename(); ?> " class="photo" alt="foto"/>
           <?php else: ?>
             <img src="<?php echo image_path('person.png'); ?>" class="photo" alt="foto" />
           <?php endif; ?>
            <ul>
                <li><a class="content_operation" href="<?php echo url_for('person/edit?id=' . $person->getId()) ?>"><?php echo image_tag('edit.png') ?>Modificar</a></li>
            </ul>
        </div>

        <div class="right_panel">
            <h3 class="content_title"><?php echo $person->getFullName() ?> (<?php echo $person->getInternalId() ?>)</h3>

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
                    <li><a href="#files">Archivos</a></li>
                </ul>
                <div id="profile">
                    <table><tbody>

                            <tr>
                                <th>Nombre:</th>
                                <td><?php echo $person->getFirstName() ?></td>
                            </tr>
                            <tr>
                                <th>Apellidos:</th>
                                <td><?php echo $person->getLastName() ?></td>
                            </tr>
                            <tr>
                                <th>Sexo:</th>
                                <td><?php if($person->getGender() == 'M') echo 'Masculino'; else echo 'Femenino'; ?></td>
                            </tr>
                            <tr>
                                <th>Identificaci&oacute;n:</th>
                                <td><?php echo $person->getIdentification() ?></td>
                            </tr>
                            <tr>
                                <th>Expediente:</th>
                                <td><?php echo $person->getInternalId() ?></td>
                            </tr>
                            <tr>
                                <th>Usuario:</th>
                                <td>
                                    <?php if ($person->getUser()): ?>
                                    <?php echo $person->getUser()->getUserName() ?>
                                    <?php endif; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php include_component('comment', 'list', array('object' => $person, 'i' => 0)) ?>
                        <?php include_component('comment', 'formComment', array('object' => $person)) ?>
                    </div><!-- close #profile -->

                    <div id="personalinfo">
                        <table>
                            <tbody>
                                <tr>
                                    <th>Fecha de Nacimiento:</th>
                                    <td><?php echo format_date($person->getDateOfBirth(), 'dd/MM/yyyy') ?></td>
                                </tr>
                                <tr>
                                    <th>Edad:</th>
                                    <td><?php echo $person->getAge() ?></td>
                                </tr>
                                <tr>
                                    <th>Nacionalidad:</th>
                                    <td><?php echo $person->getNationality()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Estado Civil:</th>
                                    <td><?php echo $person->getMaritalStatus()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Ocupaci&oacute;n:</th>
                                    <td><?php echo $person->getEmployment() ?></td>
                                </tr>
                                <tr>
                                    <th>Tiene trabajo remunerado:</th>
                                    <td><?php if ($person->getHasAJob())
                                            echo 'S&iacute;'; else
                                            echo 'No'; ?></td>
                                </tr>
                                <tr>
                                    <th>Trabajo temporal:</th>
                                    <td><?php if ($person->getTemporalJob())
                                            echo 'S&iacute;'; else
                                            echo 'No'; ?></td>
                                </tr>
                                <tr>
                                    <th>Escolaridad:</th>
                                    <td><?php echo $person->getEducationalLevel()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Formaci&oacute;n:</th>
                                    <td><?php echo $person->getFormation() ?></td>
                                </tr>
                                <tr>
                                    <th>Iglesia:</th>
                                    <td><?php echo $person->getChurch() ?></td>
                                </tr>
                                <tr>
                                    <th>A&ntilde;o de ingreso a la iglesia actual:</th>
                                    <td><?php echo $person->getChurchBeginYear() ?></td>
                                </tr>
                                <tr>
                                    <th>A&ntilde;o de conversi&oacute;n</th>
                                    <td><?php echo $person->getConversionYear() ?></td>
                                </tr>
                                <tr>
                                    <th>Fecha de ingreso a PEA:</th>
                                    <td><?php echo format_date($person->getPeaBeginDate(), 'MMMM yyyy') ?></td>
                                </tr>
                                <tr>
                                    <th>Fecha de salida del PEA:</th>
                                    <td><?php echo format_date($person->getPeaFinishDate(), 'MMMM yyyy') ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <table>
                            <caption>Direcci&oacute;n:</caption>
                            <tbody>
                                <tr>
                                    <th>Provincia:</th>
                                    <td><?php echo $person->getAreaLevel1()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Cant&oacute;n:</th>
                                    <td><?php echo $person->getAreaLevel2()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Distrito:</th>
                                    <td><?php echo $person->getAreaLevel3()->getDescription() ?></td>
                                </tr>
                                <tr>
                                    <th>Barrio o caser&iacute;o:</th>
                                    <td><?php echo $person->getAddressNeighborhood() ?></td>
                                </tr>
                                <tr>
                                    <th>Otras se&ntilde;as:</th>
                                    <td><?php echo $person->getAddressDirections() ?></td>
                                </tr>
                            </tbody>
                        </table>


                        <table>
                            <caption>Contacto:</caption>
                            <tbody>
                                <tr>
                                    <th>Tel&eacute;fono de la casa:</th>
                                    <td><?php echo $person->getHomePhone() ?></td>
                                </tr>
                                <tr>
                                    <th>Tel&eacute;fono del trabajo:</th>
                                    <td><?php echo $person->getJobPhone() ?></td>
                                </tr>
                                <tr>
                                    <th >Tel&eacute;fono celular:</th>
                                    <td><?php echo $person->getCellPhone() ?></td>
                                </tr>
                                <tr>
                                    <th>Otro tel&eacute;fono:</th>
                                    <td><?php echo $person->getOtherPhone() ?></td>
                                </tr>
                                <tr>
                                    <th>Correo Electr&oacute;nico:</th>
                                    <td><a href="mailto:<?php echo $person->getEmail() ?>"><?php echo $person->getEmail() ?></a></td>
                                </tr>
                                <tr>
                                    <th>Medio preferido de contacto:</th>
                                    <td><?php echo $person->getPreferredContactMean()->getDescription() ?></td>
                                </tr>


                            </tbody>
                        </table>


                    </div>

                    <div id="files">
                        <div class="filedownload">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Archivo</th><th>Fecha</th><th>Usuario</th><th>Categor&iacute;a</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($files as $file): ?>
                                    <tr>
                                        <td><?php echo $file->getDescription() ?><span class="filename"><?php echo $file->getOriginalFilename() ?></span></td>
                                        <td><?php echo format_date($file->getCreatedAt(), 'dd/MM/yyyy HH:mm') ?></td>
                                        <td><?php echo $file->getCreatedBy() ?></td>
                                        <td><div class="<?php switch($file->getCategory()) {
                                            case 'Internal': echo 'internal_info';break;
                                            case 'Public': echo 'public_info'; break;
                                            case 'Protected': echo 'protected_info'; break;
                                        }?>">
                                        <?php switch($file->getCategory()) {
                                            case 'Internal': echo 'Interno';break;
                                            case 'Public': echo 'P&uacute;blico'; break;
                                            case 'Protected': echo 'Protegido'; break;
                                        }?></div></td>
                                        <td><a class="content_operation" href="<?php echo url_for('person/downloadFile?id='.$file->getId()) ?>"><?php echo image_tag('download.jpg') ?>Descargar</a></td>
                                        <?php if($file->getType() == 'image' && $file->getCategory() == 'Public'): ?>
                                        <td>                                        
                                            <?php if($person->getPhotoImage() && $person->getPhotoImage()->getId() == $file->getId()): ?>
                                            <input type="checkbox" onchange="javascript:window.location='<?php echo url_for("person/setProfileImage?id=".$person->getId()."&image=0")?>'"  checked="checked">Imagen del perfil</input>
                                            <?php else: ?>
                                            <input type="checkbox" onchange="javascript:window.location='<?php echo url_for("person/setProfileImage?id=".$person->getId()."&image=".$file->getId())?>'">Imagen del perfil</input>
                                            <?php endif; ?>
                                        </td>
                                        <?php endif; ?>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div> <!-- close .filedownload -->
                        <div class="fileupload">
                            <h4>Subir un nuevo archivo</h4>
                            <?php echo form_tag_for($fileForm, 'person/uploadFile') ?>
                            <table>
                                <tbody>
                                    <?php echo $fileForm['internal_filename']->renderRow(null, 'Archivo:') ?>
                                    <?php echo $fileForm['description']->renderRow(null, 'Descripci&oacute;n:') ?>
                                    <?php echo $fileForm['category']->renderRow(null, 'Categor&iacute;a:') ?>
                                    

                                    <!--tr>
                                        <th>Archivo:</th><td><input type="file" name="file" id="file" value="" /></td>
                                    </tr>
                                    <tr>
                                        <th>Descripci&oacute;n:</th><td><input type="text" name="description" id="description" value="" /></td>
                                    </tr>
                                    <tr>
                                        <th>Categor&iacute;a:</th>
                                        <td>
                                            <div class="internal_info"><input type="radio" name="file_category" value="internal">Interno: el archivo s&oacute;lo ser&aacute; visible por los usuarios que cuentan con acceso administrativo.</input></div>
                                            <div class="protected_info"><input type="radio" name="file_category" value="protected">Protegido: el archivo s&oacute;lo ser&aacute; visible por el due&ntilde;o del perfil y los usuarios con acceso administrativo o docente.</input></div>
                                            <div class="public_info"><input type="radio" name="file_category" value="public">P&uacute;blico: el archivo ser&aacute; visible para todos los usuarios. Una imagen debe ser p&uacute;blica para establecerla como imagen del perfil.</input></div>
                                        </td>
                                    </tr-->
                                </tbody>
                            </table>
                            <?php echo $fileForm['_csrf_token']->render() ?>
                            <input type="hidden" name="person_id" id="person_id" value="<?php echo$person->getId() ?>" />
                            <div>
                                <input type="submit" name="commit" value="Subir el archivo" />
                            </div>
                            </form>

                        </div> <!-- close .fileupload -->
                    </div> <!-- close #files -->

                </div>

            </div><!-- close .wrap -->
        </div><!-- close #content -->
    
