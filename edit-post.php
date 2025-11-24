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
    if (isset($_GET["edit_post_id"]) && !empty($_GET["edit_post_id"])) {
    $edit_post_id = $_GET["edit_post_id"];

    // get Data from database
    $sql   = "SELECT * FROM posts WHERE id = '$edit_post_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($query);

} else {
    header("location: posts.php");
}

    ?>
    <div class="container p-3">
        <div class="row">

            <!-- Greeting + Logout -->
            <div class="col-12">
                <div class="row">
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
                    <li><a href="new-post.php" class="text-danger">Add New Posts</a></li>
                    <li><a href="category.php" >Categories</a></li>
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Add New User</a></li>
                </ul>
            </div>

            <!-- Category Table -->
            <div class="col-9">
                <div class="container">
                    <h6>Edit post</h6>                    

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
                        <img height="50px" src="<?php echo $result["thumbnail"];  ?>" alt="">
                        <div class="form-group">
                        <label for="">Select Thumbnail</label>
                        <input type="file"  name="thumbnail" id="" class="form-control">

                        </div>
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text"  name="title" id="" placeholder="Enter post title" value="<?php echo $result["title"]; ?>" class="form-control">
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" id="" class="form-control">
                                    <option value="1" <?php echo $result["status"] == 1 ? "selected" : "" ?>>Active</option>
                                    <option value="0" <?php echo $result["status"] == 0 ? "selected" : "" ?>>Not Active</option>
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
                                    while ($result2 = mysqli_fetch_assoc($query)) {
                                        ?>
                                        <option value="<?php echo $result2["id"] ?>" <?php echo $result["category_id"] == $result2["id"] ? "selected" : "" ?>><?php echo $result2["name"] ?></option>
                                        <?php
                                    }
                                    ?>

                                </select>                                    
                              
                              </div>
                                
                        </div>
                      <div class="form-group">
                        <label for="">Content</label>
                        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter post content" class="form-control"><?php echo $result["content"];  ?></textarea>
                        </div>

                      <div class="form-group">
                        <span class="form-group-btn">
                          <button type="submit" class="btn btn-primary mt-3" aria-label="" name="update_post">Update</button>
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
