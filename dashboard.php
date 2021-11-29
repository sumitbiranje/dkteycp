<?php  
    session_start();  
    if(!$_SESSION['username']) {  
        header("Location: login.php");
    }    
?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admission Portal </title>
    <link rel="stylesheet" href="styles.css" >
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/normalize.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="javascript.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <header class="container">
        <div class="headerbar">   
            <div class="ycp-logo">
                <img src="ycp-logo.png" width="118" height="28" alt="dkte ycp logo" class="ycp-logo">
            </div>
            <div class="heading">
                <h3> DKTE Society's </h3>
                <h1> Yashwantrao Chavan Polytechnic, Ichalkaranji </h1>
                <p> Dist: Kolhapur (Maharashtra) India. </p>
                <p> Approved By Aicte, Delhi, Recognized By Date, Affiliated To Msbte, Mumbai Msbte Code 1577 </p>
            </div>
        </div>
        <nav>
			<ul>
				<a href="index.html"><li>Home</li></a>
				<a href="#"><li>Admission</li></a>
				<a href="#"><li>Records</li></a>
                <a href="logout.php"><li>Logout</li></a>
                <a href="#"><li><i class="fab fa-facebook fa-1x margin"></i></li></a>
                <a href="#"><li><i class="fab fa-instagram fa-1x margin"></i></li></a>
                <a href="#"><li><i class="fab fa-youtube fa-1x margin"></i></li></a>
                <a href="#"><li><i class="fab fa-linkedin fa-1x margin"></i></li></a>
			</ul>
			<div class="handle">
				<p class="menu">Menu</p>
				<div class="menu_icon">
			      <div></div>
			      <div></div>
			      <div></div>
		      </div>
			</div>
		</nav>
    </header>
    <footer style="background-color: #450527;">
        <div class="content">
            <div class="left box">
                <div class="upper">
                    <div class="topic">Address:</div>
                    <i class="fas fa-map-marker-alt" style="float: left;"></i>
                    <p>DKTE's Yashwantrao Chavan Polytechnic,   R.S. No.644, Sangli Road, Near  Adinath Housing Society, Ichalkaranji-416115</p>
                </div>
            </div>
            <div class="middle box">
                <div class="topic">Email:</div>
                <a href="#"><i class="fas fa-envelope"></i>dkteycp@gmail.com</a> <br>
                <a href="#"><i class="fas fa-envelope"></i>info@dkteycp.ac.in</a>
            </div>
            <div class="right box">
                <div class="topic">Phone:</div>
                <a href="#"><i class="fas fa-phone-volume"></i>(0230) 2432793</a> <br>
                <a href="#"><i class="fas fa-phone-volume"></i>(0230) 2436612</a>    
            </div> 
        </div>
        <div class="bottom">
            <p>Copyright © 2021 <a href="index.html">DKTEYCP</a> All rights reserved</p>
        </div>
    </footer>
    <script>
		$('.handle').on('click', function() {
			$('nav ul').toggleClass('showing');
		});
	</script>
</body>
</html>