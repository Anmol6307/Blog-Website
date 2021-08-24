<?php
   session_start();
   include('header.php');
   include('../connection.php');
   // print_r($_SESSION);
   //$email=$_SESSION['id'];
   if(isset($_POST['submit']))
   {
      $title=$_POST['title'];
      $description=$_POST['description'];
      // $location="./upload/";
      //  $file_name = $_FILES['file']['name'];   
      //  $tmp_name = $_FILES['file']['tmp_name'];
      move_uploaded_file($tmp_name, $location.$file_name);
      $query=mysqli_query($conn,"INSERT INTO blog (title,description) VALUES ('$title','$description')");
       // echo $query;
       // exit();
       if ($query) {
         
       echo "<script>alert('You have successfully inserted the data');</script>";
       echo "<script > document.location ='blog.php'; </script>";
     }
     else
       {
         echo "<script>alert('Something Went Wrong. Please try again');</script>";
       }
   
      }
   
   ?>
<div class="content pb-0">
   <div class="animated fadeIn">
      <div class="row">
         <div class="col-lg-12">
            <form method="post" enctype="multipart/form-data">
               <div class="card">
                  <div class="card-header"><strong>Add Category</strong></div>
                  <div class="card-body card-block">
                     <div class="form-group"><label for="company" class=" form-control-label">Title</label><input type="text" id="company" placeholder="Enter title" name="title" class="form-control"></div>
                     <div class="form-group"><label for="company" class=" form-control-label">Description</label><input type="text" id="company" placeholder="Enter blog description" name="description" class="form-control"></div>
                     <div class="form-group"><label for="company" class=" form-control-label">Image</label><input type="file" name="file"></div>
                     <button id="payment-button" type="submit" name="submit" class="btn btn-primary">
                     <span id="payment-button-amount">Submit</span>
                     </button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php');?>