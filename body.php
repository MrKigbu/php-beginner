<div class="container">
    <nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand text-primary" href="#" >
      <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
      Sammy Love
    </a>
  </div>
</nav>
<div class="container-fluid mx-3 my-3">
<div class="row">
    <div class="col-8">
        <div class="row">
            <?php
            for ($i=1; $i <=9 ; $i++) { 
             ?>
              <div class="col-4 my-3">
                <div class="card">
  <img src="https://scontent.flos5-1.fna.fbcdn.net/v/t39.30808-6/495084013_9764110123683571_1399762290237558906_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHCQpZc0BLveUvBPtJEs5VlmsRxAzLL7nKaxHEDMsvuclQnlzRJZbrprYC3JB8KHUIiLMEBZ4-ikm87-thjf07K&_nc_ohc=wHfU58JcWvsQ7kNvwFet20C&_nc_oc=AdkUaDSK0GGsHLgKNjmDShOoCdw6QUtJD41KfbXvFCXVbr9LRSKhN-CVkgFbo56eWkM&_nc_zt=23&_nc_ht=scontent.flos5-1.fna&_nc_gid=ZDpZAz8A2YooNyYlAxny_w&oh=00_AfgoBS4Y4zb4II_gPyK5_7q-nTCtRcAekq9D5rNFgWfrzA&oe=691E569F" style="height: 200px;width:100%;"class="card-img-top" alt="...">
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
                for ($i=1; $i <=5 ; $i++) { 
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
</div>