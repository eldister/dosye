        <div id="topcontent">
	    <div class="wrap">

		<a href="<?php echo url_for('p/search') ?>"><h1 class="module_name">Personas</h1></a>

		<ul>
		    <li><a class="module_operation" href="<?php echo url_for('p/new') ?>"><?php echo image_tag('add.jpg') ?>Agregar nueva persona</a></li>
		</ul>

		<div class="module_search">
                    <form name="search_form" id="search_form" method="get" action="<?php echo url_for('p/search') ?>">
                        <input id="txtSearch" type="text" class="module_search" onchange="updateAction(this)" <?php if(isset($searchTerms)): ?>value="<?php echo $searchTerms ?>"<?php endif; ?> />&nbsp;<input type="submit" value="Buscar" onclick="updateAction(document.getElementById('txtSearch'))" />
                        <script type="text/javascript">
                            function updateAction(textinput){
                                var url = "<?php echo url_for('p/search') ?>" + "/" + textinput.value.replace(/[\W]+/g,"+");
                                document.getElementById('search_form').action = url;
                            }
                        </script>
                    </form>
		</div>

		<div class="clearfloat"></div>
	    </div><!-- close .wrap -->
	</div><!-- close #topcontent -->
