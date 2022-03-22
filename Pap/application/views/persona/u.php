<div class="container">
	<form action="<?=base_url()?>persona/uPost" method="post">
		<h1>Editar persona</h1>


		<label for="id-login">Login</label>
		<input id="id-login" type="text" name="login" value="<?=$persona->login?>" />
		<br/>


		<label for="id-nombre">Nombre</label>
		<input id="id-nombre" type="text" name="nombre" value="<?=$persona->nombre?>" />
		<br/>

		<label for="id-apellido">Apellido</label>
		<input id="id-apellido" type="text" name="apellido" value="<?=$persona->apellido?>" />
		<br/>
		
		<input type="hidden" name="idPersona" value="<?=$persona->id?>" />
		
		<input type="submit"/>
		
	</form>
</div>