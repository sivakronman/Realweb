
<div class="col-md-4">
<?php 
    if(isset($_POST['submit']))
    {

    $search = $_POST['search'];
    $query = "SELECT * FROM posts WHERE post_tag LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);
    if(!$search_query)
    {
        die("QUERY FAILED".mysqli_error($connection));
    }
    $count = mysqli_num_rows($search_query);

    if($count == 0)
    {
        echo "<h1> No Result </h1>";

    }else{











        
    }
    }
?>
<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="" method="post">
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