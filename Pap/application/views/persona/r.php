<div class="container">
	<h1>Lista de personas</h1>
	
	<form action="<?=base_url()?>persona/c">
		<input type="submit" value="Nueva Persona" autofocus="autofocus"/>
	</form>
	
	<table class="table table-striped">
		<tr>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Login</th>
			<th>Acciones</th>
		</tr>
		
		<?php foreach ($personas as $persona):?>
			<tr>
			
				<td>
					<?=$persona->nombre?>
				</td>
				<td>
					<?=$persona->apellido?>
				</td>
				<td>
					<?=$persona->login?>
				</td>
				
				<td class="row">
    				<form id="idFormU" action="<?=base_url().'persona/u'?>" >
    					<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
    					<button onclick="document.getElementById('idFormU').submit()"> 
    						<img height=15 width="15" src="<?=base_url().'assets/img/lapiz.png'?>">
    					</button>
    				</form>
    				
    				<form id="idFormD" action="<?=base_url().'persona/d'?>" >
    					<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
    					<button onclick="document.getElementById('idFormD').submit()"> 
    						<img height=15 width="15" src="<?=base_url().'assets/img/basura.png'?>">
    					</button>
    				</form>
				</td>
			</tr>
		<?php endforeach;?>
	</table>

</div>