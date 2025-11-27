<?php
session_start(); 
if (!isset($_SESSION["user"])) {
    header("location: login.php");
}


//scritps and links 
require "inc/header.php";

?>
<div class="container">
    <?php
    //header content 
    require './pages/header-home.php';
    include 'inc/process.php';
    ?>
    <div class="container p-3">
        <div class="row">
        <div class="col-12">
        <div class="row align-items-center">
            <div class="col-6">
                <h4>Welcome <?php echo $_SESSION["user"]["name"]; ?></h4>
            </div>

            
        </div>
    </div>

        <div class="col-3">
            <h6>Navigations</h6>
            <ul>
    <!-- admin only -->
    <?php if($_SESSION["user"]["role"] === "admin") { ?>
        <li><a href="posts.php">Posts</a></li>
        <li><a href="comments.php">Comments</a></li>
        <li><a href="users.php">Users</a></li>
        <li><a href="new_user.php">Add New User</a></li>
        <li><a href="new-products.php">Add New Product</a></li>
    <?php } ?>

    <!-- accessible to all logged users -->
    <li><a href="products.php">All Products</a></li>
    <li><a href="new-post.php">Add New Posts</a></li>
    <li><a href="category.php" class="text-danger" >Categories</a></li>
      </ul>

        </div>
        <div class="col-9">
        <div class="container">
            <h6>All Categories</h6>
            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal" >New Category</a>
            <?php
        if(isset($error)) {
            ?>
            <div class="alert alert-danger">
            <strong><?php echo $error; ?></strong>
        </div>
        <?php
        }elseif(isset($success)){
            ?>
            <div class="alert alert-success">
            <strong><?php echo $success; ?></strong>
        </div>
            <?php

        }
        ?>
     <table class="table table-primary table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>      
      <th scope="col">Title</th>      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
  $sql = "SELECT * FROM category";
  $query = mysqli_query($connection, $sql);
  while ($result = mysqli_fetch_assoc($query)) {
    ?>
     <tr>
      <th scope="row"><?php echo $sn++; ?></th>     
      <td><?php echo $result["name"];  ?></td>      
      <td>
        <a href="category-edit.php?edit_id=<?php echo $result["id"] ?>">Edit</a>
        |
        <a href="category.php? delete_category=<?php echo $result["id"];  ?>">Delete</a>
      </td>
      
    </tr>

    <?php
  }

  ?>    
  </tbody>
</table>
        </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" required name="name" class="form-control" placeholder="Enter title" id="">
            </div>
            <div class="my-3">
                <button type="submit" name="category" class="btn btn-primary" >Submit</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>

<?php
//footer content
require './pages/footer-home.php';
//footer script links
?>
</div>
<?php
require "inc/footer.php";
?>
