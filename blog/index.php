<?php include("path.php");
include(ROOT_PATH . "/app/database/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome-->
    <script src="https://kit.fontawesome.com/7d1231b7b0.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quattrocento&display=swap" rel="stylesheet">
    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Blog</title>
</head>
<body>
    
    <!-- TODO: INCLUDE HEADER HERE -->
    <?php include(ROOT_PATH . "/app/includes/header.php")?>
    <?php include(ROOT_PATH . "/app/includes/messages.php")?>


    <!-- page-wrapper -->
    <div class="page-wrapper">

        <!-- Post Slider -->

        


        <div class = "post-slider">
            <h1 class = "slider-title">Trending Posts</h1>
            <i class="fas fac-chevron-left prev"></i>
            <i class="fas fac-chevron-right next"></i>
            
            <div class="post-wrapper">



                <div class="post">
                    <img src="assets/images/image.jpg" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Rajat Prakash</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image.jpg" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Rajat Prakash</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image.jpg" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Rajat Prakash</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image.jpg" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Rajat Prakash</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/image.jpg" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Rajat Prakash</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>
                
            </div>

        </div>
        <!-- // Post Slider -->

        <!-- Content -->
        <div class="content clearfix">

                <!-- Main Content -->
                <div class="main-content">
                    <h1 class="recent-post-title">Recent Posts</h1>
                    
                    <div class="post">
                        <img src="assets/images/image.jpg" alt="" class = "post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                            <i class="far fa-user">Rajat Prakash</i>
                            &nbsp;
                            <i class="far calendar">Mar 11, 2019</i>
                            <p class="preview-text">
                                I am doing great , expecting you to come.
                                And, have some fun together.Let's do it now.
                            </p>
                            <a href="single.html" class = "btn read-more">Read More</a>
                        </div>
            
                    </div>

                    <div class="post">
                        <img src="assets/images/image.jpg" alt="" class = "post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                            <i class="far fa-user">Rajat Prakash</i>
                            &nbsp;
                            <i class="far calendar">Mar 11, 2019</i>
                            <p class="preview-text">
                                I am doing great , expecting you to come.
                                And, have some fun together.Let's do it now.
                            </p>
                            <a href="single.html" class = "btn read-more">Read More</a>
                        </div>
            
                    </div>

                    <div class="post">
                        <img src="assets/images/image.jpg" alt="" class = "post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                            <i class="far fa-user">Rajat Prakash</i>
                            &nbsp;
                            <i class="far calendar">Mar 11, 2019</i>
                            <p class="preview-text">
                                I am doing great , expecting you to come.
                                And, have some fun together.Let's do it now.
                            </p>
                            <a href="single.html" class = "btn read-more">Read More</a>
                        </div>
            
                    </div>

                    <div class="post">
                        <img src="assets/images/image.jpg" alt="" class = "post-image">
                        <div class="post-preview">
                            <h2><a href="single.html">The strongest and sweetest songs yet remain to be sung</a></h2>
                            <i class="far fa-user">Rajat Prakash</i>
                            &nbsp;
                            <i class="far calendar">Mar 11, 2019</i>
                            <p class="preview-text">
                                I am doing great , expecting you to come.
                                And, have some fun together.Let's do it now.
                            </p>
                            <a href="single.html" class = "btn read-more">Read More</a>
                        </div>
            
                    </div>
               
                </div>
                <!--// Main Content -->

                <div class="sidebar">



                    <div class="section search">
                        <h2 class="section-title">Search</h2>
                        <form action="index.html" method="post">
                            <input type="text" name="search-term" class="text-input" placeholder="Search...">
                        </form>
                    </div>

                    <div class="section topics">
                        <h2 class="section-title">Topics</h2>
                        <ul>
                            <li><a href="#">Poems</a></li>
                            <li><a href="#">Quotes</a></li>
                            <li><a href="#">Fiction</a></li>
                            <li><a href="#">Biography</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Inspiring</a></li>
                        </ul>

                    </div>


                </div>
        </div>
        

        <!-- // Content -->


    </div>
    <!-- // Page wrapper -->

    <!-- footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php")?>
    <!-- //footer -->

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    
    <!-- Slick Carousal -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

				

    <!-- Custom Script -->
    <script src="assets/js/script.js"></script>
</body>
</html>