<?php 
	include "database.php";

	include "functions.php";

	$title = "Login Read";

	include "includes/header.php";

 ?>

	<div class="container">
		<div class="row">
			<div class="col-xs-6">
				<h1>Data Delete</h1>
				<div class="panel panel-default">
				  <!-- Default panel contents -->
				  <div class="panel-heading">Panel heading</div>

				  <!-- Table -->
				  <table class="table table-bordered table-hovered">
				    <thead>
				    	<tr>
				    		<th>Id</th>
				    		<th>Name</th>
				    		<th>Actions</th>
				    	</tr>
				    </thead>
				    <tbody>
				    	<?php 

				    		showUsersTable();

				    	 ?>
				    </tbody>
				  </table>
				</div>
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>