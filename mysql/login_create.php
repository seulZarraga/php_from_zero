<?php
	include "database.php";

	include "functions.php";

	createUser();

	$title = "Login Create";

	include "includes/header.php";

 ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<form action="login_create.php" method="post">
					<h1 class="text-center">Create User</h1>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<input class="btn btn-primary" type="submit" name="submit">
				</form>
			</div>
		</div>
	</div>

<?php include "includes/footer.php" ?>