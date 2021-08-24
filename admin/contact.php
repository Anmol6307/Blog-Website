<?php
   session_start();
   include('header.php');
   include('../connection.php');
   // print_r($_SESSION);
   //$email=$_SESSION['id'];
   
   ?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h4 class="box-title">Contact Us </h4>
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              <th>S.NO</th>
                              <th>NAME</th>
                              <th>EMAIL</th>
                              <th>SUBJECT</th>
                              <th>MESSAGE</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                               <?php
                                 $res=mysqli_query($conn,"select * from contact");
                                 $row=mysqli_num_rows($res);
                                 if($row>0){
                                 while ($row=mysqli_fetch_array($res))
                                  {
                                 
                                 ?>
                           <tr>
                              <td> <?php echo $row['id']; ?></td>
                              <td><?php  echo $row['name'];?></td>
                             <td> <?php echo $row['email']; ?></td>
                              <td><?php  echo $row['subject'];?></td>
                           <td> <?php echo $row['message']; ?></td>
                              
                           <?php }} ?>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include('footer.php');?>