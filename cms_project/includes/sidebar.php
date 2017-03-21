<?php 

$query = "SELECT * FROM category";

$result = mysqli_query($connection, $query);

 ?>
            <div class="col-md-4">
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="search.php" method="post">
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
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php 

                                while ($row = mysqli_fetch_assoc($result)) {
                                    $category_name = $row["cat_name"];

                                    $html = "<li><a href='#'>{$category_name}</a></li>";

                                    echo $html;
                                }

                             ?>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                
                <?php 

                    include "widget.php";

                 ?>

            </div>