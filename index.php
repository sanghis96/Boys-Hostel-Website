<!DOCTYPE html>
<html>
    <head>
        <title>BOYS HOSTEL</title>
        <meta charset="UTF-8">
        <meta name="description" content="A Website for Boys Hostel RCOEM">
        <meta name="keywords" content="RCOEM, BOYS HOSTEL">
        <meta name="author" content="Samarth Sanghi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- <link rel="stylesheet" type="text/css" href="css/loader.css">  -->
        <style>
            
        </style>    
    </head>
    
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        
    <!--  Boys' Hostel Image  -->
        <div class="background-img">
            <br><br><br><br><br><br><br><br>
            <img src="images/boys hostel logo.png" alt="Boys Hostel" style="width:160px;height:130px;">
        </div>
    <!--  End Boys' Hostel Image  -->

    <!--  Navigation Bar  -->
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="600">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">BOYS HOSTEL</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#home" class="tablinks" onclick="openContent(event, 'home')">HOME</a></li>
                            <!-- <li><a href="#about">ABOUT</a></li> -->
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                    EVENTS<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#pehchaan" class="tablinks" onclick="openContent(event, 'pehchaan')">Pehchaan</a>
                                    </li>
                                    <li>
                                        <a href="#hpl" class="tablinks" onclick="openContent(event, 'hpl')">
                                        HPL</a>
                                        </li>
                                    <li>
                                        <a href="#sayonara" class="tablinks" onclick="openContent(event, 'sayonara')">Sayonara</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li><a href="#comities">COMITIES</a></li> -->
                            <li><a href="#mess" class="tablinks" onclick="openContent(event, 'mess')">MESS</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="">
                                    FACILITIES<span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="">GYMKHANA</a></li>
                                    <li><a data-toggle="modal" data-target="#nightCanteen">NIGHT CANTEEN</a></li>
                                    <li><a href="">LAUNDARY</a></li>
                                    <li><a href="">GAMES</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#gallery" class="tablinks" onclick="openContent(event, 'gallery')">GALLERY</a>
                            </li>
                            <li><a href="#contact" class="contact-btn" style="color:#FFFFFF;">CONTACT</a></li>
                        </ul>
                    
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#profile" class="tablinks" onclick="openContent(event, 'profile')"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                            <li><a data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                            <li><a href="#home" class="tablinks" onclick="openContent(event, 'home')">Logout <span class="glyphicon glyphicon-log-out"></span></a></li>
                        </ul>
                   
                    </div>
                </div>
            </div>
        </nav>
    <!--  End Navigation Bar  -->

    <!--  NavBar Modals -->
        <!-- SignUp Modal  -->
            <?php
                $nameErr = $emailErr = $uNameErr = $passwordErr = "";
                $fName = $lName = $email = $uName = $password = "";
            ?>
            <div class="modal fade" id="modalSignup" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Sign Up</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-inline" role="form" form="signupForm">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
                                </div>
                                <span class="error"><?php echo $nameErr;?></span>
                            </form>
                            <br>
                            <form role="form" id="signupForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                    <span class="error"><?php echo $emailErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="uname" id="uname" placeholder="Username">
                                    <span class="error"><?php echo $uNameErr;?></span>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password">
                                    <span class="error"><?php echo $passwordErr;?></span>
                                </div>
                                <center><input type="submit" value="Create An Account" name="submit" class="btn btn-primary btn-md" style="background-color:#b30000;"></center>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <!--  End SignUp Modal  -->

        <!-- Login Modal  -->
            <div class="modal fade" id="modalLogin" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                        </div>
                        <div class="modal-body">
                            <form role="form" action="log.php">
                                <div class="form-group">
                                    <label for="email"><span class="glyphicon glyphicon-user"></span> Username</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="pwd"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox"> Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block" style="background-color:#b30000;"><span class="glyphicon glyphicon-off"></span> Login</button>
                            </form>
                        </div>
                        <div class="modal-footer" style="background-color: #f9f9f9;">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p>Not a member? <a data-toggle="modal" data-target="#modalSignup" data-dismiss="modal">Sign Up</a></p>
                            <p>Forgot <a href="#">Password?</a></p>
                        </div>
                    </div>
                </div>
            </div>   
        <!--  End Login Modal -->

        <!--  Night Canteen Modal  -->
            <div class="modal fade" id="nightCanteen" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Night Canteen Rate List</h4>
                        </div>
                        <div class="modal-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Items</th>
                                        <th>Rate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>-</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <!--  End Night Canteen Modal  -->
    <!--  End NavBar Modals  -->

    <!--  HOME  -->
        <div id="home" class="content" style="display:block">
        <!--  About Section  -->      
            <div id="about" class="container-fluid slideanim" style="background-color:#f6f6f6;">        
                <div class="title slideanim"> ABOUT</div>
                <div class="row container-fluid">
                    <div class="col-sm-8 slideanim">
                        <div class="container-fluid">
                            <div class="jumbotron" style="padding:20px;">
                                <h3 class="text-info"><strong>Boys Hostel</strong></h3>
                                <p>
                                    Empty Content........
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 slideanim">
                        <div class="container-fluid">
                            <div class="jumbotron" style="padding:20px;">
                                <h3 class="text-info"><strong>Wardens & Caretakers</strong></h3>
                                <p>
                                    Empty Content........
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--  End About Section  -->

        <!--  Events Section  -->      
            <div id="event" class="container-fluid row slideanim">
                    <div class="title">EVENTS</div>
                <br><br>
                <center>
                    <div class="container col-md-4 slideanim eventContainer">
                        <a href="#pehchaan" class="tablinks" onclick="openContent(event, 'pehchaan')">
                            <img id="pehchanImg" src="images/pehchaan_logo.png" class="image" alt="Pic1">
                            <div class="overlay">
                                <div class="text">Pehchaan</div>
                            </div>
                        </a>
                    </div>
                    <div class="container col-md-4 slideanim eventContainer">
                        <a href="#hpl" class="tablinks" onclick="openContent(event, 'hpl')">
                            <img src="images/hpl_logo4.png" class="image" alt="Pic2">
                            <div class="overlay">
                                <div class="text">HPL</div>
                            </div>
                        </a>
                    </div>
                    <div class="container col-md-4 slideanim eventContainer">
                        <a href="#sayonara" class="tablinks" onclick="openContent(event, 'sayonara')">
                            <img src="images/sayonara_logo4.gif" class="image" alt="Pic3">
                            <div class="overlay">
                                <div class="text">Sayonara</div>
                            </div>
                        </a>
                    </div>
                </center>
            </div>
        <!--  End Events Section  -->

        <!--  Comities Section  -->      
            <div id="comities" class="container-fluid" style="background-color:#f6f6f6;">
                <div class="title slideanim">COMITIES</div>
                <div class="row container-fluid slideanim">
                    <table class="table" style="font-size:20px;color: #000000;">
                        <thead>
                            <tr>
                                <th>Year</th>
                                <th>Proctor</th>
                                <th>Mess</th>
                                <th>Internet</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Final</strong></td>
                                <td>Nikhil Randad<br>Ankit Chattwani</td>
                                <td>Ashish Singh</td>
                                <td>Ashish Singh</td>
                            </tr>
                            <tr>
                                <td><strong>Third</strong></td>
                                <td>Niraj Taori <span class="glyphicon glyphicon-phone"></span> +91-9764898715<br>Vishal Bagadiya <span class="glyphicon glyphicon-phone"></span> +91-9765410101</td>
                                <td>Nayan Gade</td>
                                <td>Ashish Singh</td>
                            </tr>
                            <tr>
                                <td><strong>Second</strong></td>
                                <td>Pratik Surana <span class="glyphicon glyphicon-phone"></span> +91-8412960313<br>Krushna Sharma <span class="glyphicon glyphicon-phone"></span> +91-9403042303</td>
                                <td>Saurabh Shah <span class="glyphicon glyphicon-phone"></span> +91-7588102618<br>Suraj Malpani</td>
                                <td>Ashish Singh</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        <!--  End Comities Section  -->

        <!-- Carousel  -->
            <div id="carousel" class="container-fluid" style="padding:0;">
                <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="images/pic1.jpg" alt="Pic1" width="460" height="345">
                            <div class="carousel-caption">
                                <h3>Batch 2012-16</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/pic2.jpg" alt="Pic2" width="460" height="345">
                            <div class="carousel-caption">
                                <h3>Batch 2013-17</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/pic3.jpg" alt="Pic3" width="460" height="345">
                            <div class="carousel-caption">
                                <h3>Batch 2014-18</h3>
                            </div>
                        </div>
                        <div class="item">
                            <img src="images/pic4.jpg" alt="Pic4" width="460" height="345">
                            <div class="carousel-caption">
                                <h3>Batch 2015-19</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        <!--  End Carousel  -->
        </div>
    <!--  End HOME  -->

    <!--  Student Profile  -->
        <?php 
            include 'profile.php';
        ?>
    <!--  End Student Profile  -->

    <!--  Pehchaan Event  -->
        <?php 
            include 'pehchaan.php';
        ?>
    <!--  End Pehchaan Event  -->
    
    <!--  HPL Event  -->
        <?php 
            include 'hpl.php';
        ?>
    <!--  End HPL Event  -->

    <!--  Sayonara Event  -->
        <?php 
            include 'sayonara.php';
        ?>
    <!--  End Sayonara Event  -->

    <!--  Mess Section  -->
        <?php 
            include 'mess.php';
        ?>
    <!--  End Mess Section  -->

    <!--  Gallery  -->
        <?php 
            include 'gallery.php';
        ?>
    <!--  End Gallery  -->

    <!--  Contact Section  -->
        <div id="contact" class="container-fluid" style="background-color:#f6f6f6;padding: 60px 50px;">
            <div class="title">CONTACT</div>
            <div class="row">
                <div class="col-sm-5">
                    <p>Contact us and we'll get back to you within 24 hours.</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span> Nagpur, Maharashtra, India</p>
                    <p><span class="glyphicon glyphicon-phone"></span> 0712-2581752</p>
                    <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
                </div>
                <div class="col-sm-7 slideanim">
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                    </div>
                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <button class="btn btn-default pull-right" type="submit">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--  End Contact Section  -->

    <!--  Google Maps  -->
        <div id="googleMap" style="height:400px;width:100%;"></div>

        <script src="https://maps.googleapis.com/maps/api/js"></script>
        <script>
            var myCenter = new google.maps.LatLng(21.177698, 79.062161);
            function initialize() 
            {
                var mapProp = {
                    center:myCenter,
                    zoom:12,
                    scrollwheel:false,
                    draggable:false,
                    mapTypeId:google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                var marker = new google.maps.Marker({position:myCenter,});
                marker.setMap(map);
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
    <!--  End Google Maps  -->

    <!--  Copyright Section  -->
        <div id="footer" class="container">
            <center>
                <a href="#home" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </center>
            <div class="row">
                <p class="col-sm-4">
                    &copy; Boys Hostel RCOEM. All Rights Reserved.<br>
                    Designed and developed by SAMARTH SANGHI
                </p>
                <ul class="col-sm-8">
                    <li class="col-sm-1"><a href=""><img src="images/youtube.png"></a></li>
                    <li class="col-sm-1"><a href=""><img src="images/twitter.png"></a></li>
                    <li class="col-sm-1"><a href=""><img src="images/facebook.png"></a></li>
                    <li class="col-sm-1"><a href=""><img src="images/instagram.png"></a></li>
                </ul>
            </div>
        </div>
    <!--  End copyright Section  -->

    <!--  Java Scripts  -->
        <script>
            $(document).ready(function()
            {
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, #footer a[href='#home']").on('click', function(event) {
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") 
                    {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function(){
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });

                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        }
                    });
                });
            })
        </script>

        <script>
            function openContent(cnt, eventName) 
            {
                var i, content, tablinks;
                content = document.getElementsByClassName("content");
                for (i = 0; i < content.length; i++)
                    content[i].style.display = "none";
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++)
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                document.getElementById(eventName).style.display = "block";
                cnt.currentTarget.className += " active";
            }
        </script>
    
    </body>
</html>