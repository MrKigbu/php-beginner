<div class="container">
   <?php require './pages/header-home.php';?>
<div class="container-fluid mx-3 my-3">
<div class="row">
    <div class="col-8">
        <div class="row">
            <?php
            $sql = "SELECT * FROM posts ORDER BY id DESC";
            $query = mysqli_query($connection, $sql);
            while($result = mysqli_fetch_assoc($query)){
                
             ?>
              <div class="col-4 my-3">
                <div class="card">
        <img src="<?php echo $result["thumbnail"] ?>" style="height: 200px;width:100%;"class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $result["title"] ?></h5>
            <p class="card-text">Date: <?php echo date("F j,Y", strtotime($result["timestamp"])) ?></p>
            <a href="post.php?post_id=<?php echo $result["id"] ?>" class="btn btn-primary">Read Post</a>
        </div>
        </div>
            </div>
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
                for ($i=1; $i <=3 ; $i++) { 
                    ?>

                    <li>
                        <a href="#">Links<?php echo $i; ?></a>
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