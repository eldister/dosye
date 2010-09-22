<?php echo '<?xml version="1.0" encoding="Windows-1250"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Expediente Electr&oacute;nico del PEA</title>
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="all" />
	<?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div id="header">
	    <div class="wrap">
                <h1 class="logo"><?php echo link_to('PEA', 'home/view') ?></h1>

	    </div><!-- close .wrap -->
            
	</div><!-- close #header -->

        <div id="login">
            <?php echo $sf_content ?>
        </div>

        <div id="footer">
	    <div class="wrap">

		&copy; 2010 bajo <a href="http://www.opensource.org/licenses/mit-license.php" target="_blank">licencia MIT</a><br/>
		para el Programa de Educaci&oacute;n Abierta Vida Abundante

	    </div><!-- close .wrap -->
	</div><!-- close #content -->

      </body>
</html>
