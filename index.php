<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="authentic, vegan, vegetarian, organic, gluten-free option, California cuisine">
        <meta name="description" content="Authentic Japanese Delicatessen Organic・Local・All Fresh. We offer vegan, vegetarian and gluten-free options">
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
        <link rel="stylesheet" type="text/css" href="css/home.css?version9">
        
    </head>
    <body>

        <!-- nav -->
        <nav>
            <?php include('header.php'); ?>
        </nav>

        <!-- title section -->
    	<header class='parallax-border-bottom'>
            <div id='slides'>
                <!-- <h1>DELICA</h1> -->
                <span class='titleContainer'>
                    <h1>DELICA</h1>
                    <p>JAPANESE DELI</p>
                    <p style='background-color: rgba(0,0,0,0.6); border-radius: 16px; border: 1px solid #00dcff; padding: 0 6px; max-width: 400px; margin-top: 14px;'>
                        We will be closed on<br>12/25 and 1/1
                    </p>
                    <a class='btn doordashButton' style='border-radius: 4px; margin-top: 25px;' href="https://order.online/business/delica-218107">
                        <span style='font-size: 16px; background-color: transparent; color: white;'>Order online with</span> <strong>DOORDASH</strong>
                    </a>
                </span> 

                <div class='slide showing'></div>
                <div class='slide'></div>
                <div class='slide'></div>

                <a class='prev'>&#10094;</a>
                <a class='next'>&#10095;</a>
            </div>
    	</header>

        <main onClick='return true'>
            <!-- about section -->
            <div class='bgColor parallax-border-bottom'>
                <section id='about'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div id='aboutHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <!-- <h2>About</h2> -->
                            <h2>Holiday Special</h2>
                            <!-- <p>DELICA is delighted to introduce our distinctively delicious Japanese cuisine, which is born from a Japanese sensibility merged with California vitality. DELICA comes to California eager to learn from and contribute to the thriving food community in the Bay Area.</p> -->
                            <p>
                                Delica's Rost beef holiday special for your parties or gift. <br>All natural Angus, house roasted beef, $40 per pound for limited time. (12/15/2021 - 1/8/2022) <br>
                            </p>
                            <p style='margin-top: 0'>
                                To place an order, please email to <a href="mailto:shop@delicasf.com" class='infoLink'>shop@delicasf.com</a> <br>or call at <a href="tel:415-834-0344" class='infoLink'>415-834-0344</a>
                            </p>
                            <br>
                            <div style='text-align: center;'>
                                <!-- <a class='btn btn-primary' href="./history.php">Read more</a> -->
                            </div>
                        </div>
                        <div class="flex-40 padding-2">
                            <img data-src="./images/roast-beef.jpg" alt="soup" class='lazyload'>
                        </div>
                    </div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50"></div>
                </section>
            </div>
            

            <!-- parallax -->
            <div class="imgContainer">
                <div class='fixedImage'></div>  
            </div>

            <!-- menu section -->
            <div class="bgColor parallax-border-top">
                <section id='menu'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div id='menuHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h2>Menu</h2>
                            <p>DELICA is delighted to introduce our distinctively delicious Japanese cuisine, which is born from a Japanese sensibility merged with California vitality. DELICA comes to California eager to learn from and contribute to the thriving food community in the Bay Area.</p>
                            <div style='text-align: center;'>
                                <a data-image='./images/menu_salad.jpg' class='btn btn-primary categoryButton' href="../images/menu/salad.pdf?version9">Salad</a>
                                <a data-image='./images/menu_deli.jpg' class='btn btn-primary categoryButton' href="../images/menu/deli.pdf?version9">Deli</a>
                                <a data-image='./images/menu_donburi.jpg' class='btn btn-primary categoryButton' href="../images/menu/donburi.pdf?version9">Donburi</a>
                                <a data-image='./images/menu_soup.jpg' class='btn btn-primary categoryButton' href="../images/menu/soup.pdf?version9">Soup</a>
                                <a data-image='./images/menu_sushi.jpg' class='btn btn-primary categoryButton' href="../images/menu/sushi.pdf?version9">Sushi</a>
                                <a data-image='./images/menu_bento.jpg' class='btn btn-primary categoryButton' href="../images/menu/bento.pdf?version9">Bento</a>
                                <a data-image='./images/menu_sandwich.jpg' class='btn btn-primary categoryButton' href="../images/menu/sandwich.pdf?version9">Sandwich</a>
                            </div>
                            <div class='message message-warning'>
                                <strong>These items are temporarily unavailable</strong><br/>
                                Futomaki roll, Tofu chicken patty Sandwitch
                            </div>
                        </div>
                        <div class="flex-40 padding-2">
                            <img id='menuSectionImage' data-src="./images/menu_sushi.jpg" alt="sushi" class='lazyload'>
                        </div>
                    </div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <div class="padding50"></div>
                </section>
            </div>

            <!-- online order section -->
            <div class='bgColor'>
                <section id='onlineOrder'>
                    <div class="padding50"></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h2>Order Online</h2>
                            <p>Need a quick meal? Order online from these food delivery services.</p>
                        </div>
                        <div class="flex-40 disp-flex justify-content--center align-items--flex-start flex-dir-col">
                            <a class='btn doordashButton' href="https://order.online/business/delica-218107">Order online with <strong>DOORDASH</strong></a>
                            <a class='btn bentocartButton' style='margin-top: 10px;' href="https://www.bentocart.com/store/restaurant/265/">Order online with <strong>Bentocart</strong></a>
                        </div>
                    </div>
                    <div class="padding50 hide-tablet"></div>
                    <!-- <div class="padding50"></div> -->
                    <!-- <div class="padding50"></div> -->
                </section>
            </div>

            <!-- catering section -->
            <div class="bgColor parallax-border-bottom">
                <section id='catering'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-tablet"></div>
                    <!-- <div class="padding50 hide-mobile"></div> -->
                    <div id='cateringHash' class='hash'></div>
                    <div class="disp-flex">
                        <div class="flex-60 disp-flex justify-content--center flex-dir-col padding-2">
                            <h2>Catering</h2>
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
                            <img data-src="./images/menu.jpg" alt="catering" class='lazyload'>
                        </div>
                    </div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50"></div>
                </section>
            </div>
           
            <!-- instagram section -->
            <!-- <div class="bgColor parallax-border-bottom">
                <div id='instagram'>
                    <h1>Follow us on <i class="fab fa-instagram" style='font-size: 56px;'></i></h1>
                    <div class='disp-flex align-items--flex-start flex-wrap'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta hide-mobile' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                        <img src="./images/insta1.png" alt="" class='insta hide-mobile' data-link='https://www.instagram.com/p/BcqFGa0hbiX/?utm_source=ig_web_copy_link'>
                    </div>
                </div>
            </div> -->

            <!-- parallax -->
            <div class="imgContainer">
                <div class='fixedImage img2'></div>  
            </div>
            
            <!-- hours section -->
            <div class="bgColor parallax-border-top">
                <section id='hours'>
                    <div class="padding50"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
                    <div id='hoursHash' class='hash'></div>
                    <h2 hidden>Store Info</h2>
                    <div class='disp-flex'>
                        <div class="flex-33 padding-left-3">
                            <h3>Location</h3>
                            <p> 
                                San Francisco Ferry Building <br>
                                1 FERRY BLDG SHOP 45 <br>
                                SAN FRANCISCO, CA 94111
                            </p>
                        </div>
                        <div class="flex-33 padding-left-3">
                            <div hidden class='line show-tablet'></div>
                            <h3>DELICA</h3>
                            <p>
                                <i class="fas fa-phone"></i> <a class='infoLink' href="tel:415-834-0344">415 834 0344</a> <br>
                                <i class="fas fa-fax"></i> <a class='infoLink' href="fax:414-834-0348"> 415 834 0348</a> <br>
                                <i class="fas fa-envelope"></i> <a class='infoLink' href="mailto:shop@delicasf.com"> shop@delicasf.com</a>   
                                <!-- <i class="fas fa-envelope"></i> <a class='infoLink' href="mailto:delicasf.akiko@gmail.com"> Email Us</a>    -->
                            </p>
                        </div>
                        <div class="flex-33 padding-left-3">
                            <div hidden class='line show-tablet'></div>
                            <h3>Deli / Lunch</h3>
                            <p> 
                                Mon-Sat: 9:30am - 5pm <br>
                                Sun: Closed <br>
                            </p>
                        </div>
                    </div>

                    <iframe class='lazyload' data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.7638147308126!2d-122.39551484961034!3d37.79557451863724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808580668e8f3159%3A0xcf1057f9175e312e!2sDelica!5e0!3m2!1sen!2sus!4v1560732609379!5m2!1sen!2sus" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>

                    <div class="padding50 hide-tablet"></div>
                    <div class="padding50 hide-tablet"></div>
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
                            <h2>Announcements</h2>
                            <p>We post holidays and special offers. Check out our seasonal dishes.</p>
                        </div>
                        <div class="flex-40 disp-flex justify-content--center" style='overflow-x: auto;'>
                        <iframe class='lazyload' data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FDELICAsf%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                                <!-- <a class="twitter-timeline" data-height="700" data-theme="light" href="https://twitter.com/DELICAsf?ref_src=twsrc%5Etfw">Tweets by DELICAsf</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> -->                        </div>
                    </div>
                    <div class="padding50 hide-tablet"></div>
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
