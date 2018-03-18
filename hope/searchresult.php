<!doctype html>
<html lang="en">
    <?php
include_once('config.php');
        session_start();
     $user=$_SESSION['username'];
 $item=$_POST['item3'];

    $sql="SELECT * FROM people where name = '$item' ";
$query=mysql_query($sql,$dbcon);
   $row = mysql_fetch_assoc($query);

?>


<head>
        <meta charset="utf-8">
        <title>HOPE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Description Here">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700%7CMerriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body class=" " data-smooth-scroll-offset='180'>
        <a id="start"></a>
        <div class="nav-container ">
            <div class="bar bar--sm visible-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-3 col-md-2">
                            <a href="index-2.html">
                                <img class="logo logo-dark" alt="logo" src="img/logo-dark.png" />
                                <img class="logo logo-light" alt="logo" src="img/logo-light.png" />
                            </a>
                        </div>
                        <div class="col-9 col-md-10 text-right">
                            <a href="#" class="hamburger-toggle" data-toggle-class="#menu2;hidden-xs hidden-sm">
                                <i class="icon icon--sm stack-interface stack-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
            <!--end bar-->
            
            <!--end bar-->
        </div>
		    <div  class="bar bar-2 hidden-xs bar--transparent bar--absolute">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bar__module">
                    <ul class="menu-horizontal" >
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="about.html">About Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end of row-->
    </div><!--end of container-->
</div>
        <div class="main-container">
            <section class="cover height-100 imagebg text-center" data-overlay="2" id="home">
                <div class="background-image-holder">
                    <img alt="background" src="img/search.jpg"  />
                </div>
                <h3>Search</h3>
                <div class="container pos-vertical-top">
                    <div class="row" >
                        <div class="col-md-8" style="padding-top: 10pt">
                           
            
                            <a class="btn btn--primary type--uppercase" href="searchname.html">
                                <span class="btn__text">
                                    Search By Name
                                </span>
                            </a>
							<a class="btn btn--primary type--uppercase" href="searchimg.html">
                                <span class="btn__text">
                                    Search By Image
                                </span>
                            </a>
                        </div>
                    </div>
                    <!--end of row-->
                     <h3>Search Result</h3>
                     <p style="color: white"; >
                        <img src="img/clinz.jpg" alt="image" width="200" height="200">
                        <h4>

                                Name        :  <?php echo $row['name'] ?><br>
                                Gender      :   <?php echo $row['gender'] ?><br>   
                                Age         :   <?php echo $row['age'] ?><br>   
                                Parent      :   <?php echo $row['pname'] ?><br>   
                                Nationality :   <?php echo $row['nationality'] ?>  <br>   
                                Camp        :   <?php echo $row['cname'] ?>  <br>   
                                Location    :   <?php echo $row['location'] ?>  <br>  
                                Time&Date   :   <?php echo $row['time'] ; echo '|' ; echo $row['date'] ?>  <br>
                                Calamity    :   <?php echo $row['calamity'] ?>  <br><h4>
                                Contact     :   9496461545<br><h4>
                    </p>

                </div>
                <!--end of container-->
            </section>
            
            
        <!--<div class="loader"></div>-->
        <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
            <i class="stack-interface stack-up-open-big"></i>
        </a>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="js/flickity.min.js"></script>
        <script src="js/easypiechart.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/isotope.min.js"></script>
        <script src="js/ytplayer.min.js"></script>
        <script src="js/lightbox.min.js"></script>
        <script src="js/granim.min.js"></script>
        <script src="js/jquery.steps.min.js"></script>
        <script src="js/countdown.min.js"></script>
        <script src="js/twitterfetcher.min.js"></script>
        <script src="js/spectragram.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>

<!-- Mirrored from trystack.mediumra.re/home-landing-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Mar 2018 18:18:59 GMT -->
</html>