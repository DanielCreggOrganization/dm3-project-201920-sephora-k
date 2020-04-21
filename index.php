<!DOCTYPE html>
<html lang="en">

<head>
    <title>Simply StephMUA</title>
<meta name="description" content="Makeup artist informative website">

<link href="css/addtohomescreen.min.css" rel="stylesheet">

<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="application-name" content="SS">
<meta name="apple-mobile-web-app-title" content="SS">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

<link rel="apple-touch-icon" href="meta/ios/ios-appicon-120-120.png">
<link rel="apple-touch-icon" sizes="152x152" href="meta/ios/ios-appicon-152-152.png">
<link rel="apple-touch-icon" sizes="180x180" href="meta/ios/ios-appicon-180-180.png">
<link rel="apple-touch-icon" sizes="120x120" href="meta/ios/ios-appicon-120-120.png">
<link href="meta/ios/apple-touch-startup-image-320x460.png" media="(device-width: 320px)"
    rel="apple-touch-startup-image">
<!-- iPhone (Retina) SPLASHSCREEN-->
<link href="meta/ios/apple-touch-startup-image-640x920.png"
    media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad (portrait) SPLASHSCREEN-->
<link href="meta/ios/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)"
    rel="apple-touch-startup-image">
<!-- iPad (landscape) SPLASHSCREEN-->
<link href="meta/ios/apple-touch-startup-image-748x1024.png" media="(device-width: 768px) and (orientation: landscape)"
    rel="apple-touch-startup-image">
<!-- iPad (Retina, portrait) SPLASHSCREEN-->
<link href="meta/ios/apple-touch-startup-image-1536x2008.png"
    media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image">
<!-- iPad (Retina, landscape) SPLASHSCREEN-->
<link href="meta/ios/apple-touch-startup-image-2048x1496.png"
    media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
    rel="apple-touch-startup-image">
<!-- iPhone 6/7/8 -->
<link href="/meta/ios/apple-touch-startup-image-750x1334.png"
    media="(device-width: 375px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image" />
<!-- iPhone 6 Plus/7 Plus/8 Plus -->
<link href="/meta/ios/apple-touch-startup-image-1242x2208.png"
    media="(device-width: 414px) and (-webkit-device-pixel-ratio: 3)" rel="apple-touch-startup-image" />

<meta name="msapplication-starturl" content="/?utm_source=homescreen">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="favicon.ico" rel="shortcut icon">
<link rel="icon" type="image/png" href="meta/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="meta/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="meta/favicon-96x96.png" sizes="96x96">

<meta name="theme-color" content="#000000">

	<link rel="manifest" href="manifest.json">
	<meta name="generator" content="PWA Starter">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <!-- icons library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/ico" href="images/logo/icon.png" />
</head>

<body>

    <?php if( !empty($user) ): ?>

		<br />You are logged in as: <?= $user['email']; ?> 
		<a href="logout.php">Logout?</a>


<!-- *NAVBAR* -->            
       <nav class="navbar navbar-expand-md navbar dark bg-dark sticky-top"> <!-- (option)change sticky top to fixed bottom -->
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="images/logo/icon.png" height="30" width="30"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
        </nav> 
<!-- *NAVBAR* -->

        <section class="fwh-slide fwh-slide--bg-lightgray"> <!-- SECTION 1 -->
    
            <img src="images/logo/logoAnimatedG.gif" class="img-fluid" height="800px" width="1000px" alt="Simply Steph">
           
        </section>  <!-- END OF SECTION 1 -->

        <section class="fwh-slide fwh-slide--bg-silver"> <!-- SECTION 2 -->

            <div class="jumbotron jumbotron-fluid">
                <h1 class="display-4">Simply Steph Makeup Artist</h1>
                <h5>Welcome to Simply_StephMUA. I am a freelance makeup artist based in 
                Galway and Mayo in Castlebar.</h5>
                    <a href="https://www.instagram.com/simply_stephmua/?hl=en" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="https://www.snapchat.com/l/en-gb/" class="fa fa-snapchat-ghost"></a>
                    <a href="https://www.youtube.com/user/sophsmithss/featured" class="fa fa-youtube"></a>

                <h4>Keep up with me and follow my socials!</h4>
            </div>
                    <img src="images/logo/icon.png" height="250px" width="250px">
        </section> <!-- END OF SECTION 2 -->

        <section class="fwh-slide fwh-slide--bg-darkgray"> <!-- SECTION 3 -->
            <div class="content">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/look_16.jpg" class="d-block w-100" alt="Slideshow" height = "550" width = "500">
                        </div>

                        <div class="carousel-item">
                            <img src="images/look_5.jpg" class="d-block w-100" alt="Slideshow" height = "550" width = "500">
                        </div>

                        <div class="carousel-item">
                            <img src="images/look_12.jpg" class="d-block w-100" alt="Slideshow" height = "550" width = "500">
                        </div>

                        <div class="carousel-item">
                            <img src="images/look_4.jpg" class="d-block w-100" alt="Slideshow" height = "550" width = "500">
                        </div>
                        
                        <div class="carousel-item">
                            <img src="images/look_11.jpg" class="d-block w-100" alt="Slideshow" height = "550" width = "500">
                        </div>
                    </div>
                </div>
            
                <h2>
                 Go to my gallery to see my work throughout the year!
                </h2>

                <a href="gallery.php" class="btn btn-primary btn-lg btn-block active" role="button" aria-pressed="true">Go to Gallery</a>
                <br>
                <br>
                <br>
            </section> <!-- END OF SECTION 3 -->

            <section class="fwh-slide fwh-slide--bg-lightgray"> <!-- SECTION 4 -->
                <iframe width="420" height="345" src="https://www.youtube.com/embed/DhvUotj15QU">
                </iframe>

                <h2>
                 Visit my Youtube channel tutorials, storytimes, chitchats and more!
                </h2>
            
            <img src="images/logo/priceList.png" class="rounded float-left" alt="Pricing">
            <img src="images/logo/priceList.png" class="rounded float-right" alt="Student Pricing">
           
            <a href="contact.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Go to Bookings</a>
            <br>
            <br>
            <br>

        </section> <!-- END OF SECTION 4 -->
        
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <!-- Footer -->

        <footer class="page-footer font-small pt-4 fixed-bottom">

            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="https://www.instagram.com/simply_stephmua/?hl=en"> Simply_StephMUA</a>
            </div>

            </footer>
<!-- Footer -->



	<?php else: ?>

		<h1>Please Login or Register</h1>
		<a href="login.php">Login</a> or
		<a href="register.php">Register</a>

	<?php endif; ?>

    <!-- Common Add to Homescreen Template -->
    <div class="ath-container banner-bottom-center">
        <div class="ath-banner">
            <div class="ath-banner-cell">
                <img src="imgs/pwa-logo-50x50.png" alt="PWA" class="ath-prompt-logo">
            </div>
            <div class="ath-banner-title">
                <p>Install this PWA?</p>
            </div>
            <div class="ath-banner-cell">
                <button class="btn btn-cancel btn-link">Not Now</button>
            </div>
            <div class="ath-banner-cell">
                <button class="btn btn-install btn-success">Install</button>
            </div>

        </div>
    </div>
    <div class="d-flex justify-content-center my-1 py-2 mx-auto">
        <p>Generated by <a href="https://pwastarter.love2dev.com/">Love2Dev's PWA Starter</a></p>
    </div>
    <script src="js/addtohomescreen.min.js" type="application/javascript"></script>

        <script src="js/addtohomescreen.js"></script>
    <script>
        addToHomescreen( {
            appID: "io.gitpod.ws-eu01.8080-b0e62734-9999-435d-ad45-7063055f5f81",
            appName: "Simply StephMUA",
            lifespan: 15,
	startDelay:0,
            autostart: true,
            skipFirstVisit: true,
            minSessions: 1,
            displayPace: 0,
            customPrompt: {
                title: "Install 8080-b0e62734-9999-435d-ad45-7063055f5f81.ws-eu01.gitpod?",
                src: "meta/favicon-96x96.png",
                cancelMsg: "Cancel",
                installMsg: "Install"
            }
        } );
    </script>
    <script>
        if ( "serviceWorker" in navigator ) {

            navigator.serviceWorker.register( "/sw.js" )
                .then( function ( registration ) { // Registration was successful

                    console.log( "ServiceWorker registration successful with scope: ", registration.scope );

                } ).catch( function ( err ) { // registration failed :(

                    console.log( "ServiceWorker registration failed: ", err );

                } );

        }
    </script>
</body>

</html>