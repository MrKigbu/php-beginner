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
    if (isset($_GET["edit_product_id"]) && !empty($_GET["edit_product_id"])) {
    $edit_product_id = $_GET["edit_product_id"];

    // get Data from database
    $sql   = "SELECT * FROM products WHERE id = '$edit_product_id'";
    $query = mysqli_query($connection, $sql);
    $result = mysqli_fetch_assoc($query);

} else {
    header("location: products.php");
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
    <li><a href="products.php" class="text-danger" >All Products</a></li>
    <li><a href="new-post.php">Add New Posts</a></li>
    <li><a href="category.php">Categories</a></li>
</ul>
            </div>

            <!-- Category Table -->
            <div class="col-9">
                <div class="container">
                    <h6>Edit Product</h6>                    

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
                    <form action="edit-product.php?edit_product_id=<?php echo $edit_product_id; ?>" method="POST" enctype="multipart/form-data">
                        <img height="50px" src="<?php echo $result["image"];  ?>" alt="">
                        <div class="form-group">
                        <label for="">Select image</label>
                        <input type="file"  name="image" id="" class="form-control">

                        </div>
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text"  name="title" id="" placeholder="Enter Product title" value="<?php echo $result["title"]; ?>" class="form-control">
                      </div>
                      <div class="form-group">                        
                        <label for="">Price</label>
                        <input type="number"  name="price" id="" placeholder="Enter Product price" value="<?php echo $result["price"]; ?>" class="form-control">
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
                        </div>
                        
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="content" id="" cols="30" rows="10" placeholder="Enter post content" class="form-control"><?php echo $result["content"];  ?></textarea>
                        </div>

                      <div class="form-group">
                        <span class="form-group-btn">
                          <button type="submit" class="btn btn-primary mt-3" aria-label="" name="edit_product">Update</button>
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
