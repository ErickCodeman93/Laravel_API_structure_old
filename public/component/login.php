<div class="modal fade custom-modal" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-body text-center">
				<br/>
				<!-- <img class="animated pulse slow" src="/img/check.png"> -->
				<br/><br/>

				<p><i class="fa fa-trash" aria-hidden="true"></i> ERROR <br/><strong class=""></strong><br/> Verifica tus datos</p>
				<br/>
				<button type="button" class="btn" data-dismiss="modal">Aceptar</button>
			</div>
		</div>
	</div>
</div>
<section id="wrapper" class="login-register login-sidebar">
	<div class="login-box card" id="login-side">
		<div class="text-center db">
			<!-- <img src="/images/logo-login.png" alt="Home" id="logo" /> -->
			<p>aqui va el logo</p>
		</div>
		<br />
		<div class="card-body">
			<form class="form-horizontal form-material" id="loginform" name="form">
				<div class="form-group m-t-40">
					<div class="col-xs-12">
						<label for="user">Correo electrónico: *</label>
						<input id="user" name="user" class="form-control" type="text" data-ng-model="input.user" required="" placeholder="E-mail">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-12">
						<label for="password">Contraseña: *</label>
						<input class="form-control" type="password" id="password" name="password"  data-ng-model="input.password" required="" placeholder="Contraseña">
					</div>
				</div>
				<div class="form-group text-center m-t-20">
					<div class="col-xs-12">
						<button class="btn btn-info btn-block text-uppercase" data-ng-click="action()" ><b>INGRESAR</b></button>
					</div>
				</div>
			</form>
		</div>
	</div>
</section>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->