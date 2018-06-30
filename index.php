<?php 
	//Encabezado de la pagina
	include ('views/front/templates/head.php');

	//validar errores
	if(isset($_GET['error'])){
		include ('views/errors/errors.php');
	}
?>

<div class="col-12" id="imagen">

	<figure>
		<img id="email" src="http://localhost/correo/public/images/email.png" id="img"><h2 id="register">Registro</h2></img>
	</figure>


	<div class="col-12 registro">
			<h2 class="gris">Formulario de Registro</h2>
				<form name="register" method="post" action="http://localhost/correo/app/Http/Controllers/registroController.php">
					<p>
						<select name="genre" class="inputgenero" required>
							<option value="hombre">Hombre</option>
							<option value="mujer">Mujer</option>
							<option value="genero" selected>Genero</option>
						</select>
					</p>
						<input class="inputform" id="name" type="text" name="nombre" placeholder="Nombre completo.." required>
						<input class="inputform" id="correo" type="email" name="correo" placeholder="Correo electronico.." required>
						
						<input class="inputform" id="pass" type="password" name="password" placeholder="Contraseña.." id="password"
						pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
						onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres: (Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;"
						required>

						<input class="inputform" id="confpass" type="password" name="conf_pass" placeholder="Confirmar contraseña.." id="password" 
						pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
						onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');" 
						required>

					<div id="btn-margin">
						<input type="submit" class="boton" name="btn-register" value="Registrar usuario">
						<input type="reset" class="boton" value="Limpiar datos">
					</div>
				</form>
			<p><a href="http://localhost/correo/views/front/login.php" class="registrado">Ya estoy registrado!</a></p>
	</div>
</div>

<?php include ('views/front/templates/foot.php');