<div class="container">
	<h1>Tema 01 - Ej 06</h1>
	<h3>Resultado</h3>
	
	<?php foreach ($datos as $dato)://estrae la sesion de datos y crea una variable $datos?>
		<?=$dato['nombre']?>(<?= $dato['edad']?>),  
	<?php endforeach;?>
	
	
	<form action="<?=base_url()?>t01/ej06/dos/dosPost" method="post">
		<input type="submit" value="Otra vez"/>
	</form>
</div>