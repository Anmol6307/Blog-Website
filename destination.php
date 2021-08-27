<?php

include('connection.php');
include('header.php');

?>

<header class="masthead" style="background-image: url('assets/img/himachal.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>"Destinations"</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            $res = mysqli_query($conn, "select * from tbl_category where status=1");
            $row = mysqli_num_rows($res);
            if ($row > 0) {
                while ($row = mysqli_fetch_array($res)) {
            ?>
                    <div class="col">
                        <a href="blog.php">
                            <div class="card h-100">
                                <img src="./admin//upload/<?php echo $row['image'] ?>" class="card-img-top rounded-circle" style="height:200px;" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row['category']; ?></h5>
                               </div>
                            </div>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>