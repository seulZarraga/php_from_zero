<?php 

    include "includes/header.php";

 ?>
    <div id="wrapper">

        <!-- Navigation -->

        <?php 

        include "includes/navigation.php";

         ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>
                        <div class="col-xs-6">

                        <?php 

                            if(isset($_POST["submit"])){

                                $cat_name = $_POST["cat_name"];

                                if($cat_name == "" || empty($cat_name)){

                                    $not_empty = "<div class='alert alert-danger alert-dismissible' role='alert'> ";
                                    $not_empty .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'> ";
                                    $not_empty .= "<span aria-hidden='true'>&times;</span></button> ";
                                    $not_empty .= "<strong>Category name should not be empty!</strong>";
                                    $not_empty .= "</div>";

                                    echo $not_empty;
                                }else{

                                    $insert = "INSERT INTO category(cat_name) ";
                                    $insert .= "VALUES ('$cat_name') ";

                                    $result = mysqli_query($connection, $insert);

                                    if(!$result){

                                        die("somenthing went wrong while insert a new category") . mysql_error($connection);
                                    }else{

                                        $new_category = "<div class='alert alert-success alert-dismissible' role='alert'> ";
                                        $new_category .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'> ";
                                        $new_category .= "<span aria-hidden='true'>&times;</span></button> ";
                                        $new_category .= "<strong>Category added successfully!</strong>";
                                        $new_category .= "</div>";

                                        echo $new_category;

                                    }
                                }
                            }

                         ?>
                            <form action="categories.php" method="post">
                                <div class="form-group">
                                    <label for="cat_name">Add Category</label>
                                    <input class="form-control" type="text" name="cat_name" placeholder="Category name">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-6">
                            <?php 

                                $query = "SELECT * FROM category";
                                $result = mysqli_query($connection, $query);

                                if(!$result){

                                    die("somenthing went wrong with your query" . mysqli_error());
                                }

                             ?>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php 

                                            while ($row = mysqli_fetch_assoc($result)) {
                                                
                                                $id = $row['cat_id'];
                                                $cat_name = $row['cat_name'];

                                                echo "<tr>";

                                                echo "<td>{$id}</td>";
                                                echo "<td>{$cat_name}</td>";
                                                echo "</tr>";
                                                
                                            }

                                         ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php 

    include "includes/footer.php";

 ?>