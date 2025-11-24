<?php
session_start(); 
if(!isset($_SESSION["user"])){
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

        <div class="col-6 text-end">
            <a href="logout.php" class="btn btn-sm btn-danger">Logout</a>
        </div>
    </div>
</div>

        <div class="col-3">
            <h6>Navigations</h6>
            <ul>
                <li>
                    <a href="posts.php">Posts</a>
                </li>
                 <li>
                    <a href="comments.php">Comments</a>
                </li>
                 <li>
                    <a href="new-post.php">Add New Posts</a>
                </li>
                 <li>
                    <a href="category.php" class="text-danger" >Categories</a>
                </li>
                 <li>
                    <a href="users.php">Users</a>
                </li>
                 <li>
                    <a href="#">Add New User</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
        <div class="container">
            <h6>All Posts</h6>
            
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
      <th scope="col">Image</th>      
      <th scope="col">Title</th>      
      <th scope="col">Status</th>      
      <th scope="col">Date</th>      
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sn=1;
  $sql = "SELECT * FROM posts";
  $query = mysqli_query($connection, $sql);
  while ($result = mysqli_fetch_assoc($query)) {
    ?>
     <tr>
      <td scope="row"><?php echo $sn++; ?></td>     
      <td scope="row">
        <img height="50px"  src="<?php echo $result["thumbnail"] ?>" alt="User Image">
      </td>     
      <td>
        <?php echo $result["title"] ?>
      </td> 
      <td>
        <?php
        if($result["status"]==1){
            echo "Active";
        }else{
            echo "Not Active";
        }
        
        ?>
      </td> 
      <td>
        <?php echo $result["timestamp"] ?>
      </td> 

      <td>
        <a href="edit-post.php?edit_post_id=<?php echo $result["id"] ?>">Edit</a>
        |
        <a href="? delete_post=<?php echo $result["id"] ?>">Delete</a>
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


<?php
//footer content
require './pages/footer-home.php';
//footer script links
?>
</div>
<?php
require "inc/footer.php";
?>
