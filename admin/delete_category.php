<?php
   //database connection  file
   include('../connection.php');
   //Code for deletion
   
   if(isset($_GET['id']))
   {
   $id=$_GET['id'];
   // echo $id;
   // exit;
   $sql=mysqli_query($conn,"DELETE from tbl_category where id=".$id."");
   // echo $sql;
   // exit;
    echo "<script>alert('Data deleted');</script>"; 
   
   echo "<script>window.location.href = 'category.php'</script>";     
   } 
   ?>