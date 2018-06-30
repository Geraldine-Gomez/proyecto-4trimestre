<?php include ('templates/head.php'); ?>
	<div class="row">
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
		
			<input type="text" id="name" class="inputform" type="text" name="nombre" placeholder="Nombre completo.." require>
		
			<input class="inputform" id="correo" type="email" name="correo" placeholder="Correo electronico.." required>

			<input class="inputform" id="pass" type="password" name="password" placeholder="Contraseña.." id="password" pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Debe contener entre 8 y 16 caracteres:(Digitos, minúsculas, mayúsculas y símbolos)' : ''); if(this.checkValidity()) form.confirm_password.pattern = this.value;" required>

			<input class="inputform" id="confpass" type="password" name="conf_pass" placeholder="Confirmar contraseña.." id="password" pattern="^(?=.*\d)(?=.*[\u0021\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$"
			onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Por favor, ingresa la misma contraseña de arriba' : '');"
			required>

		<div id="btn-margin">
			<input type="submit" name="btn-register" class="boton" value="Registrar usuario">
			<input type="reset" class="boton" value="Limpiar datos">
		</div>
		</form>

	</div>
	</div>

<?php include ('templates/foot.php'); ?>