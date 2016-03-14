<div class="container space-top">
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 ">
			<a href="http:\\telebyte.mx"><img src="img/logo_color.png" class="logo-header" title="Telebyte S.A. de C.V."></a>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4 col-xs-offset-4 darker">
			<form method="POST" action="./php/sessions/login.php">
				<div class="form-group">
					<label for="user">Usuario</label>
					<input type="email" class="form-control" id="user" name="usr_mail" placeholder="Nombre de usuario">
					<label for="pass">Contraseña</label>
					<input type="password" class="form-control" id="pass" name="usr_pass" placeholder="Contraseña">
					<input class="hidden" id="control" name="control" value="control">
					<button type="submit" class="btn btn-primary push-right">Ingresar</button>
				</div>
			</form>
		</div>
	</div>
</div>