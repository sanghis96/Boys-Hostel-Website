<!DOCTYPE html>
<html>
	<head>
		<title>BOYS HOSTEL</title>
		<meta charset="UTF-8">
		<meta name="author" content="Samarth Sanghi">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style>
            body {  position: relative;   }
            .affix {    top: 0;  width: 100%;   z-index: 9999 !important;   }
            .navbar {   margin-bottom: 0px;   }
            .affix ~ .container-fluid { position: relative;    top: 50px; }
            .contact-btn {  background-color: #ff4d4d;  cursor: pointer;    }
            .contact-btn:active {   top: 2px;   }
            #footer {    font-size: 12px;    padding-top: 70px;    }
            #footer .col-sm-8 {  display: flex;  justify-content: flex-end;  }
            #footer ul { list-style: none;   }
            #footer li img { width: 32px;    height: 32px;   }
			
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="600" style="background-color:#b30000; border:0; border-radius:0;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="hostel.php">BOYS HOSTEL</a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#about">ABOUT</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">EVENTS<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="pehchaan.php">Pehchaan</a></li>
                                    <li><a href="hpl.php">HPL</a></li>
                                    <li><a href="sayonara.php">Sayonara</a></li>
                                </ul>
                            </li>
                            <li><a href="">MESS</a></li>
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">FACILITIES<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="">GYMKHANA</a></li>
                                    <li><a data-toggle="modal" data-target="#nightCanteen">NIGHT CANTEEN</a></li>
                                    <li><a href="">LAUNDARY</a></li>
                                    <li><a href="">GAMES</a></li>
                                </ul>
                            </li>
                            <li><a href="gallery.html">GALLERY</a></li>
                            <li><a href="#comities">COMITIES</a></li>
                            <li><a class="contact-btn" style="color:#FFFFFF;">CONTACT</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a data-toggle="modal" data-target="#modalSignup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a data-toggle="modal" data-target="#modalLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
	     
	    <!--  Copyright Section  -->
        <div id="footer" class="container">
            <div class="row">
                <p class="col-sm-4">
                    &copy; Boys Hostel RCOEM. All Rights Reserved.<br>
                    Designed and developed by SAMARTH SANGHI
                </p>
                <ul class="col-sm-8">
                    <li class="col-sm-1"><img src="images/youtube.png"></li>
                    <li class="col-sm-1"><img src="images/twitter.png"></li>
                    <li class="col-sm-1"><img src="images/facebook.png"></li>
                    <li class="col-sm-1"><img src="images/instagram.png"></li>
                </ul>
            </div>
        </div>
	</body>
</html>