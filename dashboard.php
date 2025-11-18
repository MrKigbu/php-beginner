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
        <div class="row">
          <div class="col-6"><h4>Welcome <?php echo  $_SESSION["user"]["name"]; ?></h4></div>
          <div class="col-6">
            <a href="logout.php" class="btn btn-sm btn-danger ">Logout</a>
          </div>
        </div>
      </div>
        <div class="col-3">
            <h6>Navigations</h6>
            <ul>
                <li>
                    <a href="#">Posts</a>
                </li>
                 <li>
                    <a href="#">Comments</a>
                </li>
                 <li>
                    <a href="#">Add New Posts</a>
                </li>
                 <li>
                    <a href="category.php" class="text-danger" >Categories</a>
                </li>
                 <li>
                    <a href="#">Users</a>
                </li>
                 <li>
                    <a href="#">Add New User</a>
                </li>
            </ul>
        </div>
        <div class="col-9">
        <div class="container">
            <h6>All Posts</h6>
     <table class="table table-primary table-hover table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Thumbnail</th>
      <th scope="col">Title</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="https://cdn.pixabay.com/photo/2016/03/26/22/13/man-1281562_1280.jpg" style="height: 30px;width:40px;"class="card-img-top"alt=""></td>
      <td>Otto</td>
      <td>Active</td>
      <td>
        <a href="#">Edit</a>
        |
        <a href="#">Delete</a>
      </td>
      
    </tr>
    
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
