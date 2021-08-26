<?php
//database connection  file
include('connection.php');
include('header.php');

?>
<header class="masthead" style="background-image: url('assets/img/manali.jpg')">
    <div class="container-fluid position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>"My Blogs"</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            $res = mysqli_query($conn, "select * from blog where status=1");
            $row = mysqli_num_rows($res);
            if ($row > 0) {
                while ($row = mysqli_fetch_array($res)) {

            ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <a href="single_blog.php?id=<?php echo $row['id'] ?>"><img src="./admin/upload/<?php echo $row['image'] ?>" style="height:400px;" class="card-img-top" alt="..."></a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text"><?php echo $row['description']; ?></p>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</main>
<header class="masthead mb-2" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>Man must explore, and this is exploration at its greatest</h1>
                    <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
                    <span class="meta">
                        Posted by
                        <a href="#!" class="text-warning"><strong>One Step Forward</strong></a>
                        on August 24, 2021
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-2">
    <div class="container-fluid px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p>Never in all their history have men been able truly to conceive of the world as one: a single sphere, a globe, having the qualities of a globe, a round earth in which all the directions eventually meet, in which there is no center because every point, or none, is center — an equal earth which all men occupy as equals. The airman's earth, if free men make it, will be truly round: a globe in practice, not in theory.</p>
                <p>Science cuts two ways, of course; its products can be used for both good and evil. But there's no turning back from science. The early warnings about technological dangers also come from science.</p>
                <p>What was most significant about the lunar voyage was not that man set foot on the Moon but that they set eye on the earth.</p>
                <p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
                <p>For those who have seen the Earth from space, and for the hundreds and perhaps thousands more who will, the experience most certainly changes your perspective. The things that we share in our world are far more valuable than those which divide us.</p>
                <h2 class="section-heading">The Final Frontier</h2>
                <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                <p>There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally, it is a task to occupy the generations. And no matter how much progress one makes, there is always the thrill of just beginning.</p>
                <blockquote class="blockquote">The dreams of yesterday are the hopes of today and the reality of tomorrow. Science has not yet mastered prophecy. We predict too much for the next year and yet far too little for the next ten.</blockquote>
                <p>Spaceflights cannot be stopped. This is not the work of any one man or even a group of men. It is a historical process which mankind is carrying out in accordance with the natural laws of human development.</p>
                <h2 class="section-heading">Reaching for the Stars</h2>
                <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
                <a href="#!"><img class="img-fluid" src="assets/img/post-sample-image.jpg" alt="..." /></a>
                <span class="caption text-muted">To go places and do things that have never been done before – that’s what living is all about.</span>
                <p>Space, the final frontier. These are the voyages of the Starship Enterprise. Its five-year mission: to explore strange new worlds, to seek out new life and new civilizations, to boldly go where no man has gone before.</p>
                <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>
                <p>
                    Placeholder text by
                    <a href="http://spaceipsum.com/">Space Ipsum</a>
                    &middot; Images by
                    <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                </p>
            </div>
        </div>
    </div>
</article>
<?php include('footer.php'); ?>