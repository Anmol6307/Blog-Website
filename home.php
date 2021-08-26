<?php
//database connection  file
include('connection.php');
include('header.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $query = mysqli_query($conn, "INSERT INTO tbl_work (name,email,message) VALUES ('$name','$email','$message')");
    // echo $query;
    // exit();
    if ($query) {

        echo "<script>alert('Form Submitted Succesfully');</script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!-- Page Header-->
<header class="masthead mb-2" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h4>Welcome</<h4>
                        <h6>to</h6>
                        <h2>"One Step Forward"</h2>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container-fluid px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <div class="post-preview">
                <?php

                $res = mysqli_query($conn, "select * from blog where status=1 LIMIT 3 ");
                $row = mysqli_num_rows($res);
                if ($row > 0) {
                    while ($row = mysqli_fetch_array($res)) {

                ?>
                        <a href='single_blog.php?id=<?php echo $row['id'] ?>'>
                            <h2 class="post-title"><?php echo $row['title']; ?></h2>
                            <h3 class="post-subtitle"><?php echo $row['description']; ?></h3>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Man must explore, and this is exploration at its greatest</h2>
                    <h3 class="post-subtitle">Problems look mighty small from 150 miles up</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!" class="text-warning"><strong>One Step Forward</strong></a>
                    on August 24, 2021
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.</h2>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!" class="text-warning"><strong>One Step Forward</strong></a>
                    on August 18, 2021
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Science has not yet mastered prophecy</h2>
                    <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next ten.</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!" class="text-warning"><strong>One Step Forward</strong></a>
                    on August 24, 2021
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Post preview-->
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">Failure is not an option</h2>
                    <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!" class="text-warning"><strong>One Step Forward</strong></a>
                    on August 8, 2021
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="blog.php">Older Posts →</a></div>
        </div>
    </div>
</div>
<div class="container mt-3">

    <div class="row">
        <div class="col-md-6">
            <div class="demo-content text-center">
                <h2>About Me</h2>
                <hr/>
                <div class="demo-content" style="font-size: 15px;"><strong>I’m one of the top travel vloggers on YouTube who travels the world and shares my experiences and travel expertise through my videos and on Instagram..
                    My travel credentials include over 51+ countries visited, all photographed and recorded on video over the last 9 years and shared to my over 463,000+ subscribers on my YouTube channel. Whether you’re new to travel or a seasoned globetrotter, be sure to check out my content which is full of advice, hacks, and adventures to help and inspire your next trip.</strong></div>
                <hr/>
                <div class="d-flex justify-content-end mb-5 mt-4"><a class="btn btn-primary text-uppercase" href="about.php">Learn More→</a></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="demo-content bg-alt"><img style="width: 100%; height: 320px" src="assets/img/about.jpg"></div>
        </div>
    </div>
</div>
<header class="masthead mb-2" style="background-image: url('assets/img/work.jpg'); height: 500px;">
    <div class="container position-relative px-4 px-lg-5" style="top:-60px;">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Work with Me</h1>
                    <p class="subheading text-warning"><strong style="color: warning;">I love to share my knowledge, my experience and video expertise in all forms of media..!</strong></p>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h3 class="text-warning mt-4 text-center"><strong>Want to work with us..?<br>Your project is very important for me.</strong></h3>
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
                            <textarea class="form-control" id="message" name="message" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                        </div>
                        <br />

                        <button id="payment-button" type="submit" name="submit" class="btn btn-primary ">
                            <span id="payment-button-amount">Send</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<header class="masthead mb-2" style="background-image: url('assets/img/Img5.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h2>"Our Services"</h2>
                </div>
            </div>
        </div>
    </div>
</header>
<main class="services">
    <div class="row mx-5">
        <div class="col-sm-4 text-center mt-5">
            <i class="fas fa-laptop-code fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Summer Training</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
        <div class="col-sm-4 text-center mt-5">
            <i class="fas fa-laptop-code fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Winter Training</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem, ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
        <div class="col-sm-4 text-center mt-5">
            <i class="fas fa-pencil-alt fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Logo Design</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
        <div class="col-sm-4 text-center mt-5">
            <i class="fas fa-code fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Web Development</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
        <div class="col-sm-4 text-center mt-5">
            <i class="fas fa-palette fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Web Design</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
        <div class="col-sm-4 text-center mt-5">
            <i class="fab fa-android fa-2x icon-color text-warning"></i>
            <h2 class="st-font mt-2">Android Development</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, iusto Lorem ipsum, dolor sit amet consectetur adipisicing elit Lorem, ipsum.</p>
        </div>
    </div>
</main>

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
<main class="mb-4">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h4 class="text-warning mt-4"><strong>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible..!</strong></h4>
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
<?php include('footer.php'); ?>