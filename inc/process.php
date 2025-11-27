<?php
require "connection.php";

// User Registration
if(isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    //check if user already exist 
    $sql_check = "SELECT * FROM users WHERE email = '$email'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        //give notification 
        $error = "User already exist";
    }else {
        
        //insert data into database using procedural method
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$encrypt_password')";
        $query = mysqli_query($connection, $sql) or die("Can't save data");
        $success = "Registration Completed";
    }
    }

    // User Login
    if(isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);
    //Check if user already exist
    $sql_check2 = "SELECT * FROM users WHERE email = '$email'";
    $query_check2 = mysqli_query($connection, $sql_check2);
    if(mysqli_fetch_assoc($query_check2)){
        //Check if the email and password exist 
        $sql_check = "SELECT * FROM users WHERE email = '$email'AND password = '$encrypt_password'";
        $query_check = mysqli_query($connection, $sql_check);
        if($result=mysqli_fetch_assoc($query_check)){
    
            //login to dashboard
            $_SESSION["user"] = $result;
            if($result["role"] == "user"){
                if(isset($_SESSION["url"])){
                    $post_id= $_SESSION["url"];
                    header("location: post.php?post_id=$post_id");
                }else{

                    header("location: index.php");
                }
            }else{
                header("location: dashboard.php");
            }
            $success = "User Logged in";
    }else {
        
        //User Not found
        $error = "User password error";       
    }

    //check if user email and password already exist 
    
    }else {
        
        //User Not found
        $error = "User email not found";       
    }
    }


    // ADDING NEW CATEGORY
    if(isset($_POST["category"])){
        $name = $_POST["name"];
        //SQL
        $sql = "INSERT INTO category(name) VALUES('$name')";
        $query = mysqli_query($connection, $sql);
        if($query){
            $success = "Category updated successfully";
        }else{
            $error = "Unable to add category";
        }
    }


    // DELETING CATEGORY
    if(isset($_GET["delete_category"]) && !empty($_GET["delete_category"])) {
        //SQL
        $id = $_GET["delete_category"];
        $sql = "DELETE FROM category WHERE id = '$id' ";
        $query = mysqli_query($connection, $sql);
        if($query){
            $success = "Category deleted";
        }else{
            $error = "Unable to delete category";
        }
    }

        // DELETING USER
    if(isset($_GET["delete_user"]) && !empty($_GET["delete_user"])) {
        //SQL
        $id = $_GET["delete_user"];
        $sql = "DELETE FROM users WHERE id = '$id' ";
        $query = mysqli_query($connection, $sql);
        if($query){
            $success = "User deleted Successfully";
        }else{
            $error = "Unable to delete user";
        }
    }
    

    // EDITING CATEGORY
    if(isset($_POST["edit_category"])){
        $name = $_POST["name"];
        $edit_id = $_GET["edit_id"];
        // SQL
        $sql = "UPDATE category SET name = '$name' WHERE id = '$edit_id' ";
        $query = mysqli_query($connection, $sql);
        if($query){
            $success = "Category Updated";
        }else{
            $error = "Unable to update category";
        }
    }
    
    // ADDING NEW POST
    if(isset($_POST["new_post"])){
        //Uploading to upload folder
        $target_dir = "uploads/";
        $basename = basename($_FILES["thumbnail"]["name"]);
        $upload_file = $target_dir . $basename;

        //move uploaded file to upload folder
        $move = move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $upload_file);
        //check if file is moved
        if($move){
            $url = $upload_file;
            $title = $_POST["title"];
            $content = $_POST["content"];
            $status = $_POST["status"];
            $category_id = $_POST["category_id"];
            $thumbnail = $url;

            //sql statement 
            $sql = "INSERT INTO posts(title, content, status, category_id, thumbnail) VALUES('$title', '$content','$status','$category_id', '$thumbnail')";
            //query execution/statement
            $query = mysqli_query($connection, $sql);

            //Check if is stored 
            if($query){
                $success = "Post published successfully";   
        }else {
            $error = "Unable to publish post";
        }

        }else{
            $error = "Unable to upload image";
        }
       
    }

    // UPDATING AN EXISTING POST
    if(isset($_POST["update_post"])) {
        $id = $_GET["edit_post_id"];
        if($_FILES["thumbnail"]["name"] != ""){
            //update image
            $target_dir = "uploads/";
            $url = $target_dir.basename($_FILES["thumbnail"]["name"]);
            //move uploaded file to upload folder
            if(move_uploaded_file($_FILES["thumbnail"]["tmp_name"], $url)){
                //update database

                //parameters
                $title = $_POST["title"];
                $content = $_POST["content"];
                $status = $_POST["status"];
                $category_id = $_POST["category_id"];
                $thumbnail = $url;
                
                //sql statement
                $sql = "UPDATE posts SET title='$title', content='$content', status='$status', category_id='$category_id', thumbnail='$thumbnail' WHERE id = '$id' ";
                //querry execution 
                $query = mysqli_query($connection, $sql);
                //check if updated
                if($query){
                    $success = "Post updated successfully";
            }else {
                $error = "Unable to update post";
           }
           
        }

        }else {
            //do not update image/leave as it is
            $title = $_POST["title"];
                $content = $_POST["content"];
                $status = $_POST["status"];
                $category_id = $_POST["category_id"];
                                
                //sql statement
                $sql = "UPDATE posts SET title='$title', content='$content', status='$status', category_id='$category_id' WHERE id = '$id' ";
                //querry execution 
                $query = mysqli_query($connection, $sql);
                //check if updated
                if($query){
                    $success = "Post updated successfully";
            }else {
                $error = "Unable to update post";
           }
        }
    }
     

    // DELETING A POST
    if(isset($_GET["delete_post"]) && !empty($_GET["delete_post"])) {
        
        $id = $_GET["delete_post"];
        //SQL
        $sql = "DELETE FROM posts WHERE id = '$id' ";
        //querry execution
        $query = mysqli_query($connection, $sql);
        //check if deleted
        if($query){
            $success = "Post deleted successfully";
        }else{
            $error = "Unable to delete post";
        }
    }

    // EDITING USER
    if(isset($_POST["edit_user"]))
        if(isset($_POST["change_password"]) && $_POST["change_password"]== "on"){
        
            //change password
            $id = $_GET["edit_user_id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            $password = md5($_POST["password"]);
            //sql 
            $sql = "UPDATE users SET name = '$name', email = '$email', role = '$role', password = '$password' WHERE id ='$id'"; 
            //query
            $query = mysqli_query($connection, $sql);
            //check if success 
            if($query){
                $success = "User data updated Successfully";
            }else {
                $error = "Unable to update user";
            }
        }else{
            //Just update only the data             
            $id = $_GET["edit_user_id"];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $role = $_POST["role"];
            
            //sql 
            $sql = "UPDATE users SET name = '$name', email = '$email', role = '$role' WHERE id ='$id'"; 
            //query
            $query = mysqli_query($connection, $sql);
            //check if success 
            if($query){
                $success = "User data updated Successfully";
            }else {
                $error = "Unable to update user";
            }
        }

        // Adding new admin user
        if(isset($_POST["new_user_admin"])){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = md5($_POST["password"]);
            $role = $_POST["role"];
    
            //check if user already exist 
            $sql_check = "SELECT * FROM users WHERE email = '$email'";
            $query_check = mysqli_query($connection, $sql_check);
            if(mysqli_fetch_assoc($query_check)){
                //give notification 
                $error = "User already exist";
            }else {
                
                //insert data into database using procedural method
                $sql = "INSERT INTO users(name, email, password, role) VALUES('$name', '$email', '$password', '$role')";
                $query = mysqli_query($connection, $sql) or die("Can't save data");
                //check if success 
                if($query){
                $success = "User added successfully";
            }else {
                $error = "Unable to add user";
            }
            }
            }
            

            // Adding new comment
            if(isset($_POST["comment_new"])){
                $post_id = $_GET["post_id"];
                $user_id = $_SESSION["user"]["id"];
                $comment = $_POST["comment_new"];
        
                //sql statement 
                $sql = "INSERT INTO comments(post_id, user_id, message) VALUES('$post_id', '$user_id', '$comment')";
                //query execution/statement
                $query = mysqli_query($connection, $sql);
        
                //Check if is stored 
                if($query){
                    $success = "Comment added successfully, waiting for approval";
                    

                }else {
                    $error = "Unable to add comment";
                }
            }
            
            // Approving a comment
            if(isset($_GET["approve_comment"]) && !empty($_GET["approve_comment"])){
                $comment_id = $_GET["approve_comment"];
                $sql = "UPDATE comments SET status = 1 WHERE id = '$comment_id'";
                //query 
                $query = mysqli_query($connection, $sql);
                //check if 
                if($query){
                    $success = "Comment approved";                    
                }else {
                    $error = "Unable to approve comment";
                }
            }

            // Deleting a comment
            if(isset($_GET["delete_comment"]) && !empty($_GET["delete_comment"])){
                $comment_id = $_GET["delete_comment"];
                $sql = "DELETE FROM comments WHERE id = '$comment_id'";
                //query 
                $query = mysqli_query($connection, $sql);
                //check if 
                if($query){
                    $success = "Comment Deleted";                    
                }else {
                    $error = "Unable to Delete Comment";
                }
            }
            
            // Adding new product
        if(isset($_POST["new_product"])){

        //Uploading to upload folder
        $target_dir = "Uploads/";
        $basename = basename($_FILES["image"]["name"]);
        $upload_file = $target_dir . $basename;
        //move uploaded file to upload folder
        $move = move_uploaded_file($_FILES["image"]["tmp_name"], $upload_file);
        //check if file is moved
        if($move){

        // Collect form values
        $url = "$upload_file";
        $title = $_POST["title"];
        $content = $_POST["content"];
        $price = $_POST["price"];
        $status = $_POST["status"];
        $category_id = $_POST["category_id"];
        $image = $url;

        // SQL based on your table structure
        $sql = "INSERT INTO products(title, content, price, status, category_id, image) 
                VALUES('$title', '$content', '$price', '$status', '$category_id', '$image')";

        $query = mysqli_query($connection, $sql);

        if($query){
            $success = "Product added successfully";
        } else {
            $error = "Unable to add product: " . mysqli_error($connection);
        }

    } else {
        $error = "Unable to upload image";
    }
}

            
?>  