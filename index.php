<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <title>Delica - San Francisco</title>
        <!-- favicon -->
		<link rel="shortcut icon" href="./images/favicon.ico">
        <!-- google fonts -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,700&display=swap" rel="stylesheet">
        <!-- font awesome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <!-- normalize -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- css -->
		<link rel="stylesheet" type="text/css" href="css/animate.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/home.css?version=1">
        
    </head>
    <body>

        <!-- nav -->
        <nav>
            <?php include('header.php'); ?>
        </nav>

        <!-- title section -->
    	<header>
            <div id='slides'>
                <h1>DELICA</h1>
                <div class='slide showing'></div>
                <div class='slide'></div>
                <div class='slide'></div>

                <a class='prev'>&#10094;</a>
                <a class='next'>&#10095;</a>
            </div>
    	</header>

        <main>
            <!-- about section -->
            <div class='bgColor'>
                <section id='about'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div id='aboutHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h1>About</h1>
                            <p>DELICA is delighted to introduce our distinctively delicious Japanese cuisine, which is born from a Japanese sensibility merged with California vitality. DELICA comes to California eager to learn from and contribute to the thriving food community in the Bay Area.</p>
                            <br>
                            <div style='text-align: center;'>
                                <a class='btn btn-primary' href="./history.php">Read more</a>
                            </div>
                        </div>
                        <div class="flex-40 padding-2">
                            <img src="./images/history.jpg" alt="">
                        </div>
                    </div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50"></div>
                </section>
            </div>
            

            <!-- parallax -->
            <div class="imgContainer">
                <div class='fixedImage'></div>  
            </div>

            <!-- menu section -->
            <div class="bgColor">
                <section id='menu'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div id='menuHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h1>Menu</h1>
                            <p>DELICA is delighted to introduce our distinctively delicious Japanese cuisine, which is born from a Japanese sensibility merged with California vitality. DELICA comes to California eager to learn from and contribute to the thriving food community in the Bay Area.</p>
                            <div style='text-align: center;'>
                                <a data-image='./images/menu_salad.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Salad</a>
                                <!-- <a data-image='./images/hoverImage.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Deli</a> -->
                                <a data-image='./images/menu_donburi.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Donburi</a>
                                <a data-image='./images/menu_soup.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Soup</a>
                                <a data-image='./images/menu_sushi.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Sushi</a>
                                <a data-image='./images/menu_bento.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Bento</a>
                                <a data-image='./images/menu_sandwich.jpg' class='btn btn-primary categoryButton' href="../images/salad.pdf">Sandwich</a>
                            </div>
                        </div>
                        <div class="flex-40 padding-2">
                            <img id='menuSectionImage' src="./images/menu_sushi.jpg" alt="">
                        </div>
                    </div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <div class="padding50"></div>
                </section>
            </div>
            
            
            <!-- parallax -->
            <!-- <div class="imgContainer">
                <div class='fixedImage img2'></div>  
            </div> -->

            <!-- catering section -->
            <div class="bgColor">
                <section id='catering'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-mobile"></div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <div id='cateringHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h1>Catering</h1>
                            <p>
                                DELICA specializes in company and special event catering throughout the greater San Francisco carea.
                                We arrange our food on platters suitable for parties, executive dinners,
                                lunch meetings and other company eventsm and we have accommodated up to 500 people at a time. 
                                DELICA is proud to provide a unique combination of traditional Japanese cuisine infused with seasonal and sustainable ingredients form northern California.
                            </p>
                            <div style='text-align: center;'>
                            <a class='btn btn-primary' href="./catering.php">Catering options</a>
                            </div>
                        </div>
                        <div class="flex-40 padding-2">
                            <img src="./images/menu.jpg" alt="">
                        </div>
                    </div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50"></div>
                </section>
            </div>
           
            <!-- instagram section -->
            <div class="bgColor">
                <div id='instagram'>
                    <h1><i class="fab fa-instagram" style='font-size: 76px;'></i></h1>
                    <div class='disp-flex align-items--flex-start flex-wrap'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BCvyVIno8es/?utm_source=ig_web_copy_link'>
                    </div>
                </div>
            </div>

            <!-- parallax -->
            <div class="imgContainer">
                <div class='fixedImage img2'></div>  
            </div>
            
            <!-- hours section -->
            <div class="bgColor">
                <section id='hours'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div id='hoursHash' class='hash'></div>
                    <h1 hidden>Store Info</h1>
                    <div class='disp-flex'>
                        <div class="flex-33 padding-left-3">
                            <h2>Location</h2>
                            <p> 
                                San Francisco Ferry Building <br>
                                1 FERRY BLDG SHOP 45 <br>
                                SAN FRANCISCO, CA 94111
                            </p>
                        </div>
                        <div class="flex-33 padding-left-3">
                            <div hidden class='line show-tablet'></div>
                            <h2>DELICA</h2>
                            <p>
                                <i class="fas fa-phone"></i> <a class='infoLink' href="tel:415-834-0344">415 834 0344</a> <br>
                                <i class="fas fa-fax"></i> <a class='infoLink' href="fax:414-834-0348"> 414 834 0348</a> <br>
                                <i class="fas fa-envelope"></i> <a class='infoLink' href="mailto:shop@delicasf.com"> shop@delicasf.com</a>   
                            </p>
                        </div>
                        <div class="flex-33 padding-left-3">
                            <div hidden class='line show-tablet'></div>
                            <h2>Deli / Lunch</h2>
                            <p> 
                                Mon-Fri: 10am - 7pm <br>
                                Sat: 9am - 6pm <br>
                                Sun: 10am - 6pm <br>
                            </p>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.7638147308126!2d-122.39551484961034!3d37.79557451863724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580668e8f3159%3A0xcf1057f9175e312e!2sDelica!5e0!3m2!1sen!2sus!4v1560732609379!5m2!1sen!2sus" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50"></div>
                </section>
            </div>

             <!-- facebook timeline section -->
             <div class='bgColor'>
                <section id='facebook'>
                    <div class="padding50"></div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div id='aboutHash' class='hash'></div> -->
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h1>Announcements</h1>
                            <p>We post holidays and special offers. Check out our seasonal dishes.</p>
                        </div>
                        <div class="flex-40 disp-flex justify-content--center">
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDELICAsf%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                <!-- <a class="twitter-timeline" data-height="700" data-theme="light" href="https://twitter.com/DELICAsf?ref_src=twsrc%5Etfw">Tweets by DELICAsf</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->                        </div>
                    </div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50"></div>
                </section>
            </div>
            
             <!-- doordash section -->
             <div class='bgColor'>
                <section id='facebook'>
                    <div class="padding50"></div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div id='aboutHash' class='hash'></div> -->
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h1>Doordash</h1>
                            <p>Need a quick meal? We are available thourgh DoorDash. No waiting in line.</p>
                        </div>
                        <div class="flex-40 disp-flex justify-content--center align-items--center">
                            <button type='button'>Doordash button</button>
                        </div>
                    </div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50 hide-mobile"></div>
                    <div class="padding50"></div>
                </section>
            </div>
           
                   
            
        </main>

		<!-- footer -->
		<footer>
            <?php include('footer.php'); ?>
        </footer>

        <!-- jquery -->
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        
        <!-- lazysizes -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js"></script>
        
        <script src="js/wow.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>
