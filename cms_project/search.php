<?php 
    
    include "includes/connection.php"; 

    include "includes/header.php"

?>

    <!-- Navigation -->
        <?php  

            include "includes/navigation.php";

        ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <?php

                    if(isset($_POST['search'])){

                        $search = $_POST['search'];

                        $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%' ";

                        $result_query = mysqli_query($connection, $query);

                        if(!$result_query){

                            die("somenthing went wrong with your query!" . mysqli_error($connection));
                        }

                        $count = mysqli_num_rows($result_query);

                        if($count == 0){

                            $no_result = "<div class='alert alert-danger alert-dismissible' role='alert'> ";
                            $no_result .= "<button type='button' class='close' data-dismiss='alert' aria-label='Close'> ";
                            $no_result .= "<span aria-hidden='true'>&times;</span></button> ";
                            $no_result .= "<strong>There are no results that coincide with your search!</strong>";
                            $no_result .= "</div>";

                            echo $no_result;
                        }else {


                            while ($row = mysqli_fetch_assoc($result_query)) {
                                
                                $post_title = $row['post_title'];
                                $post_author = $row['post_author'];
                                $post_date = $row['post_date'];
                                $post_image = $row['post_image'];
                                $post_content = $row['post_content'];

                        ?>
                                <h1 class="page-header">
                                    Page Heading
                                    <small>Secondary Text</small>
                                </h1>

                                <!-- First Blog Post -->
                                <h2>
                                    <a href="#"><?php echo $post_title; ?></a>
                                </h2>
                                <p class="lead">
                                    by <a href="index.php"><?php echo $post_author; ?></a>
                                </p>
                                <p><span class="glyphicon glyphicon-time"></span> <?php $post_date; ?></p>
                                <hr>
                                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                                <hr>
                                <p><?php echo $post_content; ?></p>
                                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                <hr>
                    <?php

                            }

                       


                        }

                    }?>

   
                <!-- Pager -->
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            
            <?php  

                include "includes/sidebar.php"

            ?>

        </div>
        <!-- /.row -->

        <hr>
<?php  

    include "includes/footer.php";

?>