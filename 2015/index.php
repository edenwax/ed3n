<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<!DOCTYPE html>
<html>
    <head>
        <!--
            Dearest source-reader,
            Welcome to some of the code used on this website. I'd love to know if you see anything that requires tweaking. It's always helpful to have a second set of eyes!

            If you find anything you can shoot me an email at me@ed3n.me

            I would really appreciate it!
        -->
        <meta charset="utf-8">
        <title>Colin Berry | ed3n.me</title>
        <meta name="description" content="Personal Portfolio of Colin Berry">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!-- So. Many. Stylesheets. -->
        <link rel="stylesheet" href="css/main-min.css">
        <link rel="stylesheet" href="css/adapt-min.css">
        <link rel="stylesheet" href="css/sanitize-min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="apple-touch-icon" href="images/favicon.png">

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.2.0.min.js"></script>
        <script async src="js/scroll.js"></script>
    </head>
    <body>
    <div id="page-wrap">
        <div id="header-wrap">
            <header>
                <div id="top-header">
                    <?php include "p/topheader.html"; ?>
                </div>
                <?php 
                    if($_GET['p'] == ""){
                        include "p/botheader.html"; 
                    }
                    if($_GET['p'] == "cyanima"){
                        include "p/header/cyanheader.html"; 
                    }
                    if($_GET['p'] == "ed3nme"){
                        include "p/header/ed3nheader.html"; 
                    }
                    if($_GET['p'] == "shockline"){
                        include "p/header/shockheader.html"; 
                    }
                    if($_GET['p'] == "orb"){
                        include "p/header/orbheader.html"; 
                    }
                    if($_GET['p'] == "radiant"){
                        include "p/header/rtheader.html"; 
                    }
                    if($_GET['p'] == "dotbu"){
                        include "p/header/dotheader.html"; 
                    }
                    if($_GET['p'] == "sog"){
                        include "p/header/sogheader.html"; 
                    }
                ?>
            </header>
        </div>
        <div id="content-wrap">
        <?php 
                if($_GET['p'] == ""){
                    include "p/main.html";
                }
                if($_GET['p'] == "portfolio"){
                    include "p/portfolio.html";
                }
                if($_GET['p'] == "contact"){
                    include "p/contact.php";
                }
                if($_GET['p'] == "cyanima"){
                    include "p/port/port-cyan.html";
                }
                if($_GET['p'] == "ed3nme"){
                    include "p/port/port-ed3n.html";
                }
                if($_GET['p'] == "shockline"){
                    include "p/port/port-shock.html";
                }
                if($_GET['p'] == "orb"){
                    include "p/port/port-orb.html";
                }
                if($_GET['p'] == "radiant"){
                    include "p/port/port-rt.html";
                }
                if($_GET['p'] == "dotbu"){
                    include "p/port/port-dotbu.html";
                }
                if($_GET['p'] == "sog"){
                    include "p/port/port-sog.html";
                }
            ?>
        </div>
        <?php 
            if($_GET['p'] == ""){
                include "p/portad.html";
            } else if($_GET['p'] == "contact"){
                include "p/contactad.html";
            } else {
                include "p/portcontact.html";
            }
 
        ?>
        <div id="footer-wrap">
            <div id="top-footer-wrap">
                <div id="top-footer">
                    <div class="tf" id="tf-1">
                        <img src="images/logo.png" alt="" />
                    </div>
                    <div class="tf" id="tf-2">
                        <h3>SITEMAP</h3>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/portfolio">Portfolio</a></li>
                            <li><a href="/blog">Blog</a></li>
                            <li><a href="/contact">Contact</a></li>
                        </ul>
                    </div>
                    <div class="tf" id="tf-3">
                        <h3>BUILT WITH</h3>
                        <ul>
                            <li><a href="https://10up.github.io/sanitize.css/">sanitize.css</a></li>
                            <li><a href="http://www.sublimetext.com/">SublimeText3</a></li>
                            <li><a href="https://fortawesome.github.io/Font-Awesome/">Font Awesome</a></li>
                            <li><a href="https://www.youtube.com/watch?v=m74apHK4Ve0">Love &nbsp;<span class="fa fa-heart"></span></a></li>
                        </ul>
                    </div>
                    <div class="tf" id="tf-4">
                        <h3>SOCIAL</h3>
                        <ul>
                            <li><a href="http://facebook.com/piratebattles">Facebook</a></li>
                            <li><a href="http://twitter.com/edenwax">Twitter</a></li>
                            <li><a href="http://reddit.com/user/edenwax">Reddit</a></li>
                            <li><a href="https://www.youtube.com/user/ed3nwax">Youtube</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="backtotop">
                <span class="scrollUp fa fa-angle-up" title="Back to the top, Cap'n!"></span>
            </div>
            <div id="bot-footer-wrap">
                <p><span class="scrollUp">Colin Berry</span> &copy; 2016</p>
            </div>
        </div>
    </div>
    </body>
</html>