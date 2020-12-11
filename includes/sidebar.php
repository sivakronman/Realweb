
<div class="col-md-4">

<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">
    <input type="text" class="form-control" name="search">
    <span class="input-group-btn">
        <button class="btn btn-default" type="submit" name="submit">
            <span class="glyphicon glyphicon-search"></span>
        </button>
    </span>
    </div>
    </form>
    <!-- <form action="" method="post">
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control">
        <span class="group-btn">
        <button class="btn btn-default" type="submit" name="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form> -->
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">

                    <?php 

                    global $connection;
                    $query = "SELECT * FROM categories";
                    $select_categories_sidebar = mysqli_query($connection,$query);
                    // while ($row = mysqli_fetch_assoc($select_categories_sidebar))
                    // {
                    //     $title_cat = $row['cat_title'];
                    //     // echo "<li>{$titlea_cat}</li>";
                        ?>
                    <!-- <li>
                        <a href="#"><?php echo $row['cat_title']; ?></a>
                    </li> -->
                        <!-- <?php
                    //}

                    ?> -->


    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
                <?php
                while ($row = mysqli_fetch_assoc($select_categories_sidebar))
                    {
                    $title_cat = $row['cat_title'];
                    // echo "<li>{$titlea_cat}</li>";
                    ?>
                    <li>
                    <a href="#"><?php echo $row['cat_title']; ?></a>
                    </li>
                    <?php
                    }
                ?>
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <!-- <div class="col-lg-6">
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
        </div> -->
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
<?php include 'widget.php'; ?>

</div>