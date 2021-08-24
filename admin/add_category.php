<?php
   session_start();
   include('header.php');
   include('../connection.php');
   // print_r($_SESSION);
   //$email=$_SESSION['id'];
   if(isset($_POST['submit']))
   {
      $category=$_POST['category'];
   
      $query=mysqli_query($conn,"INSERT INTO tbl_category (category) VALUES ('$category')");
       // echo $query;
       // exit();
       if ($query) {
         
       echo "<script>alert('You have successfully inserted the data');</script>";
       echo "<script > document.location ='category.php'; </script>";
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
            <form method="post">
               <div class="card">
                  <div class="card-header"><strong>Add Category</strong></div>
                  <div class="card-body card-block">
                     <div class="form-group"><label for="company" class=" form-control-label">Category</label><input type="text" id="company" placeholder="Enter category name" name="category" class="form-control"></div>
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