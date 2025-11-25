<div class="container">
   <?php require './pages/header-home.php';?>
<div class="container-fluid mx-3 my-3">
<div class="row">
    <div class="col-8">
        <div class="row">
            <?php
            for ($i=1; $i <=6 ; $i++) { 
             ?>
              <div class="col-4 my-3">
                <div class="card">
        <img src="https://media.istockphoto.com/id/1473203340/photo/face-beauty-and-satisfaction-with-a-model-black-woman-in-studio-on-a-gray-background-to.webp?b=1&s=612x612&w=0&k=20&c=03ibmNP5V01ZSgJ68hn2NAjsBJ4ohDdY2-3VdGVUygo=" style="height: 200px;width:100%;"class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
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
            <form action="" method="POST">
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
                        <a href="category.php">Links<?php echo $i; ?></a>
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