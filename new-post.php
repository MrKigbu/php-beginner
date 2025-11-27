<div class="page-wrapper">
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
    ?>
    

    <div class="container p-3">
        <div class="row">

            <!-- Greeting + Logout -->
            <div class="col-12">
                <div class="row">
                    <div class="col-6">
                        <h4>Welcome back <?php echo $_SESSION["user"]["name"]; ?></h4>
                    </div>
                    
                </div>
            </div>

            <!-- Sidebar Navigation -->
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
    <li><a href="new-post.php" class="text-danger" >Add New Posts</a></li>
    <li><a href="category.php">Categories</a></li>
</ul>

            </div>

            <!-- Category Table -->
            <div class="col-9">
                <div class="container">
                    <h6>Add new post</h6>                    

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
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                        <label for="">Select Thumbnail</label>
                        <input type="file"  name="thumbnail" id="" class="form-control">

                        </div>
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text"  name="title" id="" placeholder="Enter post title" class="form-control">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>                                    
                              
                              </div>
                                
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Category</label>
                                <select name="category_id" id="" class="form-control">
                                    <?php
                                    $sql = "SELECT * FROM category ORDER BY id DESC";
                                    $query = mysqli_query($connection, $sql);
                                    //print down categories
                                    while ($result = mysqli_fetch_assoc($query)) {
                                        ?>
                                        <option value="<?php echo $result["id"];  ?>"><?php echo $result["name"];  ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>                                    
                              
                              </div>
                                
                        </div>
                      <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter post content" class="form-control"></textarea>
                        </div>

                      <div class="form-group">
                        <span class="form-group-btn">
                          <button class="btn btn-primary mt-3" type="submit" aria-label="" name="new_post">Publish</button>
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

</div>