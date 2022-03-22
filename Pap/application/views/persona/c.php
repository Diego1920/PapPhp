<div class="container">
	<h1>Pap</h1>
	<h3>Introduce Nombre y Apellido</h3>

	<form action="<?=base_url()?>Persona/cPost" method="post">

	Login Name:<input type="text" name="login"/><br/>
	Nombre:<input type="text" name="nombre"/><br/>
	Apellido:<input type="text" name="apellido"/><br/>
	

		<input type="submit" />
	</form>
	
	<form action="<?=base_url()?>Persona/r" method="post">
			<input type="submit" value="Lista" /> <br/>
	</form>
	
</div>