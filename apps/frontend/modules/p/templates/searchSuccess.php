<?php include_partial('moduletop', array('searchTerms' => $searchTerms)) ?>

	<div id="content">
	    <div class="wrap">
		<div class="one_panel">
		<h3 class="content_title">Resultados de la b&uacute;squeda</h3>

                <div class="result_panel">
                    <table class="result_table">
                        <tbody>
                            <?php foreach ($persons as $person): ?>
                            <tr>
                                <td rowspan="4" class="result_photo"><?php echo image_tag('person_thumb.png', 'size="50x50"') ?></td>
                                <td class="result_caption">Nombre:</td>
                                <td class="result_data result_main_data"><a class="content_operation" href="<?php echo url_for('p/show?id='.$person->getId()) ?>"><?php echo $person->getFullName() ?></a></td>
                                <td class="result_action"><a class="content_operation" href="<?php echo url_for('p/show?id='.$person->getId()) ?>"><?php echo image_tag('show.png') ?>Ver el expediente</a></td>
                            </tr>
                            <tr>
                                <td class="result_caption">Identificaci&oacute;n:</td>
                                <td class="result_data"><?php echo $person->getIdentification() ?></td>
                                <td class="result_action"></td>
                            </tr>
                            <tr>
                                <td class="result_caption">Expediente:</td>
                                <td class="result_data"><?php echo $person->getInternalId() ?></td>
                                <td class="result_action"></td>
                            </tr>
                            <tr>
                                <td class="result_separator" colspan="3"></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div><!-- close .result_panel -->
                </div><!-- close .one_panel -->


	    </div><!-- close .wrap -->
	</div><!-- close #content -->
