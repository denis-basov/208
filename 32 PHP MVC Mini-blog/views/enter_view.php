<?php require 'components/header.php';?>


<div class="pt-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Вход</h3>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 mb-5">

			<form class="p-5 bg-white" method="POST">

				<div class="row form-group">
					<div class="col-md-6">
						<label class="text-black">Логин</label>
						<input type="text" name="login" class="form-control"
									 placeholder="Только латиница и цифры, первая буква, не менее двух символов"
									 value="<?=$input['login'] ?? '' ?>">
						<span class="input-error"><?=$errors['login'] ?? '' ?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-6">
						<label class="text-black">Пароль</label>
						<input type="password" name="password" class="form-control"
									 placeholder="Не менее шести произвольных символов"
									 value="<?=$input['password'] ?? '' ?>">
						<span class="input-error"><?=$errors['password'] ?? '' ?></span>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="submit" value="Войти" class="btn btn-primary py-2 px-4 text-white">
					</div>
				</div>
			</form>

		</div>
	</div>
</div>

<?php require 'components/footer.php';?>

