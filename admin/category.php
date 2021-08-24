<?php
   session_start();
   include('header.php');
   include('../connection.php');
   // print_r($_SESSION);
   //$email=$_SESSION['id'];
     if(isset($_GET['type']) && $_GET['type']!='')
      {
      $type=mysqli_real_escape_string($conn,$_GET['type']);
      if($type=='status')
      {
      $operation=mysqli_real_escape_string($conn,$_GET['operation']);
      $id=mysqli_real_escape_string($conn,$_GET['id']);
      if($operation=='active')
      {
        $status='1';
      }else
      {
        $status='0';
      }
      $update_status_sql="update tbl_category set status='$status' where id='$id'";
      mysqli_query($conn,$update_status_sql);
      }
      
      
      }
   
   ?>
<div class="content pb-0">
   <div class="orders">
      <div class="row">
         <div class="col-xl-12">
            <div class="card">
               <div class="card-body">
                  <h2 class="box-title">CATEGORY</h2>
                  <a href="add_category.php"><button class="btn btn-primary">Add Category</button></a> 
               </div>
               <div class="card-body--">
                  <div class="table-stats order-table ov-h">
                     <table class="table ">
                        <thead>
                           <tr>
                              <th >S.NO</th>
                              <th>CATEGORY</th>
                              <th >STATUS</th>
                              <th >ACTION</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <?php
                                 $res=mysqli_query($conn,"select * from tbl_category");
                                 $row=mysqli_num_rows($res);
                                 if($row>0){
                                 while ($row=mysqli_fetch_array($res))
                                  {
                                 
                                 ?>
                           <tr>
                              <td> <?php echo $row['id']; ?></td>
                              <td><?php  echo $row['category'];?></td>
                              <td colspan="1">
                                 <?php 
                                    if($row['status']==1)
                                       {
                                          ?>
                                 <a href='?type=status&operation=deactive&id=<?php echo $row['id']?>' class='btn btn-primary'>Active</a>
                                 <?php
                                    }
                                    else
                                       {?>
                                 <a href='?type=status&operation=active&id=<?php echo $row['id']?>' class="btn btn-danger">Deactive</a>
                                 <?php 
                                    }
                                          ?>
                              </td>
                              <td>
                                 <a href='update_category.php?id=<?php echo $row['id']?>' class="fa fa-pencil"></a>
                                 <a href='delete_category.php?id=<?php echo $row['id']?>' class="fa fa-trash"></a>
                              </td>
                           </tr>
                           <?php 
                              } } else {?>
                           <tr>
                              <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
                           </tr>
                           <?php } ?>
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