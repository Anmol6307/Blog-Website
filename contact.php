<?php
   //database connection  file
include('connection.php');
include('header.php');
$message="";
   if(isset($_POST['submit']))
   {
      $name=$_POST['name'];
         $email=$_POST['email'];
      $subject=$_POST['subject'];
      $message=$_POST['message'];

      $query=mysqli_query($conn,"INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subject','$message')");
       // echo $query;
       // exit();
       if ($query) {
         
       echo "<script>alert('Form Submitted Succesfully');</script>";
     }
     else
       {
         echo "<script>alert('Something Went Wrong. Please try again');</script>";
       }
   
      }

  ?>
<header class="masthead mb-2" style="background-image: url('assets/img/contact-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact Me</h1>
                            <p class="subheading text-warning"><strong>Have questions? I have answers.</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-2">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <p class="text-warning mb-2"><strong>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible...!</strong></p>
                        <div class="my-4">
                            <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post">
                                <div class="form-floating">
                                    <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" />
                                    <label for="name">Name</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                                    <label for="email">Email address</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="phone" type="text" name="subject" placeholder="Enter your phone number..." data-sb-validations="required" />
                                    <label for="phone">Subject</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                                    <label for="message">Message</label>
                                    <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                                </div>
                                <br />
                               
                                <!-- <button class="btn btn-primary text-uppercase disabled" name="submit"  type="submit">Send</button> -->
                                <button id="payment-button" type="submit" name="submit" class="btn btn-primary">
                     <span id="payment-button-amount">Send</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
           <?php include('footer.php');?>