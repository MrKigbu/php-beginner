<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("location: login.php");
}
// scripts and links 
require "inc/header.php";
?>
<div class="container">
    <?php
    require './pages/header-home.php';
    include 'inc/process.php';
    if (isset($_GET["edit_id"]) && !empty($_GET["edit_id"])) {
    $edit_id = $_GET["edit_id"];

    // get Data from database
    $sql   = "SELECT * FROM category WHERE id = '$edit_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($query);

} else {
    header("location: category.php");
}
    ?>
  

    <div class="container p-3">
        <div class="row">

            <!-- Greeting + Logout -->
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


            <!-- Sidebar Navigation -->
            <div class="col-3">
                <h6>Navigations</h6>
                <ul>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="comments.php">Comments</a></li>
                    <li><a href="new-post.php">Add New Posts</a></li>
                    <li><a href="category.php" class="text-danger">Categories</a></li>
                    <li><a href="users.php">Users</a></li>
                    <li><a href="new_user.php">Add New User</a></li>
                </ul>
            </div>

            <!-- Category Table -->
            <div class="col-9">
                <div class="container">
                    <h6>Edit Category</h6>                    

                    <?php if (isset($error)) { ?>
                        <div class="alert alert-danger">
                            <strong><?php echo $error; ?></strong>
                        </div>
                    <?php } elseif (isset($success)) { ?>
                        <div class="alert alert-success">
                            <strong><?php echo $success; ?></strong>
                        </div>
                    <?php 
                    } 
                    ?>
                    <form action="" method="POST">
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" value="<?php echo $result["name"] ?>" name="name" id="" placeholder="Enter new category" class="form-control">
                      </div>
                      <div class="form-group">
                        <span class="form-group-btn">
                          <button class="btn btn-primary mt-3" type="submit" aria-label="" name="edit_category">Update</button>
                        </span>                        
                      </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
require './pages/footer-home.php';
?>

<?php require "inc/footer.php"; ?>
