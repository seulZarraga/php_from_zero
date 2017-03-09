<?php
	
	include "database.php";

	include "functions.php";

	updateData();

	$title = "Login Update";

	include "includes/header.php";

 ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<form action="login_update.php" method="post">
					<h1 class="text-center">Data Update</h1>
					<div class="form-group">
						<label for="">Username</label>
						<input type="text" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<select name="select_id" id="select_id">
						<?php 
							showAllData();
						 ?>
					</select>
					<input class="btn btn-primary" type="submit" name="submit" value="Update">
				</form>
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>