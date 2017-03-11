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
        }

    }

?>            

            <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <?php if(isset($no_result)){echo $no_result;} ?>
                    <h4>Blog Search</h4>
                    <form action="" method="post">
                        <div class="input-group">
                            <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" class="btn btn-default" type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    </form><!-- /search form -->
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>