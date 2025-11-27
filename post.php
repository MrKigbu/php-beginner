<?php 
session_start();
require "inc/header.php";
require "inc/process.php";
if(isset($_GET["post_id"]) && !empty($_GET["post_id"])){
    $id = $_GET["post_id"];
    //SQL
    $sql = "SELECT * FROM posts WHERE id = '$id'";
    //Query
    $query = mysqli_query($connection, $sql);
    //result
    $result = mysqli_fetch_assoc($query); 
}else{
    header("location: index.php");
  }
  $_SESSION["url"] = $_GET["post_id"];
?>
<div class="container">
   <?php require './pages/header-home.php';?>
<div class="container-fluid mx-3 my-3">
<div class="row">
    <div class="col-8">
      <?php if(isset($error)) { ?>
                <div class="alert alert-danger"><strong><?= $error ?></strong></div>
            <?php } elseif(isset($success)) { ?>
                <div class="alert alert-success"><strong><?= $success ?></strong></div>
            <?php } ?>
        <div 
        style="background: url('<?php echo $result["thumbnail"]?>');background-position: center;background-size:cover;background-repeat: no-repeat;">
        <div style="background-color: #0000006e; padding: 20px; text-align:center;"><h2 class="text-white"><?php echo $result["title"]  ?></h2>
        </div>
        </div>
        <hr style="height: 4px; background: #333; border: none;">
        <div class="row bg-primary mb-2  p-2">
          <div class="col-6 text-start text-white" >Date Published: <?php echo date("F j,Y", strtotime($result["timestamp"])) ?></div>
          <div class="col-6 text-end text-white">Category: <?php 
         $cid = $result["category_id"]; 
         $sql2 = "SELECT * FROM category WHERE id = '$cid'";
         $query2 = mysqli_query($connection, $sql2);
          $result2 = mysqli_fetch_assoc($query2);
          echo $result2["name"];        

         ?></div>
        </div>
        
        <div class="text-start "><img style="width: 200px; height: 200px;" src="<?php echo $result["thumbnail"]?>" alt=""></div>
        <div class="content">
          <p>
            <?php echo nl2br($result["content"]) ?>
          </p>
        </div>
        <hr style="height: 4px; background: #333; border: none;">
        <div>
          <h4>
            Comments
          </h4>
          <hr style="height: 4px; background: #333; border: none;">
          <?php
          $sql = "SELECT * FROM comments WHERE post_id = '$id' AND status = 1 ORDER BY id DESC";
$query = mysqli_query($connection, $sql);

if(mysqli_num_rows($query) > 0){
    while($comment = mysqli_fetch_assoc($query)){
        ?>
        <div class="row mb-3">
            <div class="col-6">
                <?php 
                $user_id = $comment["user_id"];
                $sql2 = "SELECT * FROM users WHERE id = '$user_id'";
                $query2 = mysqli_query($connection, $sql2);
                $user = mysqli_fetch_assoc($query2);
                ?>
                <p>
                    <?php echo $user["name"]; ?><br>
                    <small><?php echo date("F j, Y", strtotime($comment["timestamp"])) ?></small>
                </p>
            </div>

            <div class="col-6">
                <?php echo $comment["message"]; ?>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No comments Yet!.<br>Be the first to comment!</p>";
}          ?>
<hr>
      <?php
      if(isset($_SESSION["user"])){
        ?>
         <form action="" class="" method="POST">            
            <div class="form-group">
              <label for="comment_new">New Comment</label>
              <textarea name="comment_new" id="" class="form-control" cols="30" rows="5" placeholder="Enter Comment here"></textarea>
            </div>
            <div class="mt-2">
              <button type="submit" class="btn btn-primary" name="add_comment">Add Comment</button>
            </div>
          </form>

        <?php

      }else{
        ?>
        <a href="login.php">Login to comment</a>

        <?php

      }

      ?>
         
        </div>
    </div>

    <div class="col-4">

        <!-- sidebar -->
        <div class="border p-3">
           <form action="search.php" method="POST">
                <div class="form-group">
                    <h4>Search post<h4>
                    <input type="text" name="search" class="form-control" placeholder="Enter search term" id="">
                </div>
                <button type="submit" class="btn btn-primary mt-2"> search</button>
            </form>
        </div>

        <div class="border p-3 mt-2">
            <h4>Categories</h4>
            <ul>
                <?php
                $sql_c = "SELECT * FROM category ORDER BY id DESC";
                $query_c = mysqli_query($connection, $sql_c);
                while ($result_c = mysqli_fetch_assoc($query_c)) { 
                    ?>

                    <li>
                        <a href="post_category.php?post_category_id=<?php echo $result_c["id"]; ?>"> <?php echo $result_c["name"]; ?></a>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
</div>

</div>
<?php require './pages/footer-home.php';?>
</div>
<?php
require "inc/footer.php";

?>
