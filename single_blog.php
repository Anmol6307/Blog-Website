<?php

//database connection  file
include('connection.php');
include('header.php');
$id = $_GET['id'];
$res = mysqli_query($conn, "select * from blog where id='$id'");
$row = mysqli_num_rows($res);
if ($row > 0) {
    while ($row = mysqli_fetch_array($res)) {

?>
        <?php

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $query = mysqli_query($conn, "INSERT INTO tbl_comment (name,email,message) VALUES ('$name','$email','$message')");
            // echo $query;
            // exit();
            if ($query) {

                echo "<script>alert('Form Submitted Succesfully');</script>";
            } else {
                echo "<script>alert('Something Went Wrong. Please try again');</script>";
            }
        }

        ?>

        <header class="masthead mb-2" style="background-image: url('./admin/upload/<?php echo $row['image'] ?>')">
            <div class="container-fluid position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1><?php echo $row['title']; ?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-2">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?php echo $row['long_description']; ?></p>
                    </div>
                </div>
            </div>
        </main>
<?php }
} ?>

<!-- Main Body -->
<section>
    <div class="container bg-info rounded-circle mb-5">
        <div class="row ">         
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 col-12 mt-5">
                <form id="algin-form" method="post">
                    <div class="form-group">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="message" id="" msg cols="30" rows="5" class="form-control" style="background-color: black;"></textarea>
                    </div>
                    <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control"> </div>
                    <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                    <div class="form-group"> <button type="submit" id="post" name="submit" class="btn btn-primary">Post Comment</button> </div>
                </form>
            </div>
            <div class="col-sm-5 col-md-4 col-12 pb-4 offset-sm-2">
            <h1 class="text-dark text-center bg-warning mb-0 mt-4">Comments</h1>
            
                <?php
                $res = mysqli_query($conn, "select * from tbl_comment");
                $row = mysqli_num_rows($res);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($res)) {

                ?>                       
                        <div class="comment mt-1 text-justify float-left" style="width: 360px; height:auto"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                            <h4><?php echo $row['name'] ?></h4> <span><?php echo $row['date'] ?></span> <br>
                            <p><?php echo $row['message']; ?></p>
                        </div>

                <?php }
                } ?>
            </div>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<style type="text/css">
    /*   .navbar-nav {
    width: 100%
}
*/
    @media(min-width:568px) {
        .end {
            margin-left: auto
        }
    }

    @media(max-width:768px) {
        #post {
            width: 100%
        }
    }

    #clicked {
        padding-top: 1px;
        padding-bottom: 1px;
        text-align: center;
        width: 100%;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px
    }

    #profile {
        background-color: unset
    }

    #post {
        margin: 10px;
        padding: 6px;
        padding-top: 2px;
        padding-bottom: 2px;
        text-align: center;
        background-color: #ecb21f;
        border-color: #a88734 #9c7e31 #846a29;
        color: black;
        border-width: 1px;
        border-style: solid;
        border-radius: 13px;
        width: 50%
    }



    #nav-items li a,
    #profile {
        text-decoration: none;
        color: rgb(224, 219, 219);
        background-color: black
    }

    .comments {
        margin-top: 5%;
        margin-left: 20px
    }

    .darker {
        border: 1px solid #ecb21f;
        background-color: black;
        float: right;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px
    }

    .comment {
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        float: left;
        border-radius: 5px;
        padding-left: 40px;
        padding-right: 30px;
        padding-top: 10px
    }

    .comment h4,
    .comment span,
    .darker h4,
    .darker span {
        display: inline
    }

    .comment p,
    .comment span,
    .darker p,
    .darker span {
        color: rgb(184, 183, 183)
    }

    h1,
    h4 {
        color: white;
        font-weight: bold
    }

    label {
        color: rgb(212, 208, 208)
    }

    #align-form {
        margin-top: 20px
    }

    .form-group p a {
        color: white
    }

    #checkbx {
        background-color: black
    }

    #darker img {
        margin-right: 15px;
        position: static
    }

    .form-group input,
    .form-group textarea {
        background-color: black;
        border: 1px solid rgba(16, 46, 46, 1);
        border-radius: 12px
    }

    form {
        border: 1px solid rgba(16, 46, 46, 1);
        background-color: rgba(16, 46, 46, 0.973);
        border-radius: 5px;
        padding: 20px
    }
</style>