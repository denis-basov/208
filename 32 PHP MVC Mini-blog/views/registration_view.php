<?php require 'components/header.php';?>


<div class="pt-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Регистрация</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mb-5">

				<form class="p-5 bg-white" method="POST" enctype="multipart/form-data">

					<div class="row form-group">
						<div class="col-md-6 mb-3 mb-md-0">
							<label class="text-black">Имя:</label>
							<input type="text" name="first_name" class="form-control">
							<span class="input-error"></span>
						</div>
						<div class="col-md-6">
							<label class="text-black">Фамилия:</label>
							<input type="text" name="last_name" class="form-control">
							<span class="input-error"></span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="text-black">Логин</label>
							<input type="text" name="login" class="form-control">
							<span class="input-error"></span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="text-black">Адрес электронной почты</label>
							<input type="email" name="email" class="form-control">
							<span class="input-error"></span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<label class="text-black">Пароль</label>
							<input type="password" name="password" class="form-control">
							<span class="input-error"></span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-6">
							<label class="text-black">Аватар</label>
							<input type="file" name="avatar" class="form-control">
							<span class="input-error"></span>
						</div>
					</div>

					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" value="Зарегистрироваться" class="btn btn-primary py-2 px-4 text-white">
						</div>
					</div>
				</form>

		</div>
	</div>
</div>

<?php require 'components/footer.php';?>
