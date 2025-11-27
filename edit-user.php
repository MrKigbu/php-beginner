<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("location: login.php");
}
if ($_SESSION["user"]["role"]== "user") {
    header("location: index.php");
}

// scripts and links 
require "inc/header.php";
?>
<div class="container">
    <?php
    require './pages/header-home.php';
    include 'inc/process.php';
    if (isset($_GET["edit_user_id"]) && !empty($_GET["edit_user_id"])) {
    $edit_user_id = $_GET["edit_user_id"];

    // get Data from database
    $sql   = "SELECT * FROM users WHERE id = '$edit_user_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($query);

} else {
    header("location: users.php");
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

        
    </div>
</div>


            <!-- Sidebar Navigation -->
            <div class="col-3">
                <h6>Navigations</h6>
                <ul>
                    <li><a href="posts.php">Posts</a></li>
                    <li><a href="comments.php">Comments</a></li>
                    <li><a href="new-post.php">Add New Posts</a></li>
                    <li><a href="category.php">Categories</a></li>
                    <li><a href="users.php" class="text-danger">Users</a></li>
                    <li><a href="new_user.php">Add New User</a></li>
                </ul>
            </div>

            <!-- Category Table -->
            <div class="col-9">
                <div class="container">
                    <h6>Edit User</h6>                    

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
                        <label for="">Name</label>
                        <input type="text" value="<?php echo $result["name"] ?>" name="name" id="" placeholder="Enter new name" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" value="<?php echo $result["email"] ?>" name="email" id="" placeholder="Enter new email" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="role">Role</label>
                        <select name="role" class="form-control" id="">
                            <option value="admin" <?php echo $result["role"] == "admin" ? 'selected' : '' ?>>Admin</option>
                            <option value="user" <?php echo $result["role"] == "user" ? 'selected' : '' ?>>User</option>
                        </select>
                      </div>
                      <div class="form-group my-2">
                        <label for=""> Change password</label>
                        <input type="checkbox" name="change_password" class="" id="">
                      </div>
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" name="password" value="<?php echo $result["password"] ?>"id="" autocomplete="false" placeholder="Enter new password" class="form-control">
                      </div>
                      <div class="form-group">
                        <span class="form-group-btn">
                          <button class="btn btn-primary mt-3" type="submit" aria-label="" name="edit_user">Update</button>
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
