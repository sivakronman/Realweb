<?php include 'includes/admin_header.php' ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include 'includes/admin_navigation.php' ?>

        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>admin site</small>
                        </h1>

                        <div class="col-xs-6">
                            <?php 
                            if(isset($_POST['submit']))
                            {
                                $cat_title = $_POST['cat_title'];
                                if($cat_title == "" || empty($cat_title))
                                {
                                    echo "<h1>Don't make it blank...</h1>";
                                }
                                else
                                {
                                    //FIND ALL CATEGORIES
                                    $query = "INSERT INTO categories(cat_title) ";
                                    $query .= "VALUE('{$cat_title}') ";

                                    $creat_category_query = mysqli_query($connection,$query);

                                    if(!$creat_category_query)
                                    {
                                        die('QUERY ERROR'. mysqli_error($connection));
                                    }
                                }

                            }
                            ?>
                                                <form action="" method="post">
                        <div class="form-group">
                        <label>Add Category</label>
                        <input type="text" class="form-control" name="cat_title" >
                        </div>
                        <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                        </div>
                        </form>  
                        <form action="" method="post">
                        <div class="form-group">
                        <label>Edit Category</label>  
                            <?php
                            // EDIT CATEGORIES
                            if(isset($_GET['edit']))
                            {
                            $edit_categories = $_GET['edit'];
                            $query_edit = "SELECT * FROM categories WHERE cat_id = {$edit_categories} ";
                            $edit_categories_query = mysqli_query($connection,$query_edit);

                            while ($row = mysqli_fetch_assoc($edit_categories_query))
                            {
                            $cat_title = $row['cat_title'];
                            $cat_id = $row['cat_id'];
                            ?>
                            <input type="text" class="form-control" name="cat_title" value=<?php if(isset($_GET['edit'])){ echo $cat_title; } ?> >
                            <?php
                            //header("Location: categories.php");
                            }
                        } 
                            ?> 

                        </div>
                        <div class="form-group">
                        <input class="btn btn-warning" type="submit" name="submit" value="Update">
                        </div>
                        </form>



                        </div>
                        <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Category Title</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php 

                    global $connection;
                    $query = "SELECT * FROM categories";
                    $select_categories = mysqli_query($connection,$query);
                        ?>
                    <?php
                    while ($row = mysqli_fetch_assoc($select_categories))
                    {
                    $cat_title = $row['cat_title'];
                    $cat_id = $row['cat_id'];
                    ?>
                            <tr>
                                <td><?php echo $cat_id ?></td>
                                <td><?php echo $cat_title ?></td>
                                <td><input type="submit" class="btn btn-danger" value="Delete" onclick="window.location.href='categories.php?delete=<?php echo $cat_id?>'">
                                <input type="submit" class="btn btn-warning" value="Edit" onclick="window.location.href='categories.php?edit=<?php echo $cat_id?>'"></td> 
                            </tr>

                    <?php } 
                                //DELETE CATEGORIES
                                if(isset($_GET['delete']))
                                {
                                    $delete_categories = $_GET['delete'];
                                    $query = "DELETE FROM categories WHERE cat_id = {$delete_categories} ";
                                    $delete_categories_query = mysqli_query($connection,$query);
                                    header("Location: categories.php");
                                }
                    
                    ?>

                            </tbody>
                        </table>


                        </div>





                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include 'includes/admin_footer.php' ?>
