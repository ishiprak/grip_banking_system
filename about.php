<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name= "viewport" value="width=device-width,initial-scaling=1.0,user-scalable=no">
    <title>About</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,500" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Akronim&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Krona+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="func.js"></script>
    
    <!--
    
    -->
</head>
<body>
    <?php
    include 'navbar.php';
    ?>
  

<div onload="wraps()" id="wrapper" data-aos="flip-down" data-aos-duration="900">
  <div id="content">
    <div id="card">
      <div id="front">
        <!--<div id="arrow"><i class="fa fa-arrow-left"></i></div>-->
        <div id="top-pic"></div>
        <div id="avatar"></div>
        <div id="info-box">
          <div class="info">
            <h1 style="font-family: Verdana, Arial, Helvetica">Shivam Prakash</h1>
            <h2 style="font-family: 'Krona One'">Full-Stack Developer & Designer</h2>
          </div>
        </div>
        <div id="social-bar">
          <a href="https://www.facebook.com/shivam.prakash113" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
          <a href="https://twitter.com/imshiprak" target="_blank">
          <i class="fa fa-twitter"></i>
          </a>
          <a href="https://github.com/ishiprak" target="_blank">
          <i class="fa fa-github"></i>
          </a>
          <a href="https://codepen.io/ishiprak/public" target="_blank">
          <i class="fa fa-codepen"></i>
          </a>
          <a href="https://www.linkedin.com/in/ishiprak/" target="_blank" class="more-info">
            <i class="fa fa-linkedin"></i>
          </a>
        </div>
       </div>
      </div>
    </div>
 </div>

<style>
  #wrapper {
	opacity: 1; /*orig=0*/
	display: table;
	height: 100%;
	width: 100%;
	margin: 10% auto;
  }
  #wrapper.loaded {
	opacity: 1;
	transition: 2.5s ease-in-out;
  }
  #wrapper #content {
	display: table-cell;
	vertical-align: middle;
	margin: 0 auto;
  }
  #card {
	height: 400px;
	width: 300px; /*300*/
	margin: 0 auto;
	position: relative;
	z-index: 1;
	perspective: 600px;
	margin: 0 auto;
	border-radius: 10px;
	-webkit-transition: all 0.3s linear 0s;
	-moz-transition: all 0.3s linear 0s;
	-ms-transition: all 0.3s linear 0s;
	-o-transition: all 0.3s linear 0s;
	transition: all 0.3s linear 0s;
  }
  #card #front, #card #back {
	border-radius: 10px;
	height: 100%;
	width: 100%;
	position: absolute;
	left: 0;
	top: 0;
	transform-style: preserve-3d;
	backface-visibility: hidden;
	box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
	margin: 0 auto;
  }
  #card #front {
	transform: rotateY(0deg);
	overflow: hidden;
	z-index: 1;
  }
  
  #card:hover,
  .hover {
	-webkit-box-shadow: 0px 1px 32px 0px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 0px 1px 32px 0px rgba(0, 0, 0, 0.5);
	box-shadow: 0px 1px 32px 0px rgba(0, 0, 0, 0.5);
  }
  #card:hover #top-pic {
	-webkit-transform: scale(1.1);
	-moz-transform: scale(1.1);
	transform: scale(1.1);
	opacity: 0.88;
  }
  
  #card #front #top-pic {             /*for card upper half pic*/ 
	height: 50%;
	width: 100%;
	background-image: url(https://unsplash.imgix.net/45/ZLSw0SXxThSrkXRIiCdT_DSC_0345.jpg?q=75&w=1080&h=1080&fit=max&fm=jpg&auto=format&s=857f07b76abac23a7fb7161cc7b12a46);
	background-size: cover;
	-webkit-transition: all 0.3s linear 0s;
	-moz-transition: all 0.3s linear 0s;
	-ms-transition: all 0.3s linear 0s;
	-o-transition: all 0.3s linear 0s;
	transition: all 0.3s linear 0s;
  }
  #card #front #avatar {
	width: 114px;
	height: 114px; /*114px*/
	top: 50%;
	left: 50%;
	margin: -77px 0 0 -57px;
	border-radius: 100%;
	box-shadow: 0 0 0 3px rgba(255, 255, 255, .8), 0 4px 5px rgba(107, 5, 0, .6), 0 0 50px 50px rgba(255, 255, 255, .25);
	background-image: url("img/sp2.jpeg");
	background-size: contain;
	position: absolute;
	z-index: 1;
  }
  #card #front #info-box {
	height: 50%;
	width: 105%;/***********************************/
	position: absolute;
	display: table;
	left: 0;
	bottom: 0;
	background: rgba(200, 38, 29, .87);
	padding: 50px ;
  }
  #card #front #info-box h1{
	font-size:21px;
	font-weight:200;
	color:white;
	line-height:30px;
	margin-bottom:10px; /*10*/
  }
  #card #front #info-box h2{
	font-size:13.5px;
	color:#222;
  }
  
  #card #front #social-bar {
	height: 50px;
	width: 100%;
	position: absolute;
	bottom: 0;
	left: 0;
	line-height: 50px;
	font-size: 18px;
	text-align: center;
  }
  #card #front #social-bar a {
	display: inline-block;
	/*color: #951009;*/
	color: #222;
	text-decoration: none;
	padding: 5px;
	line-height: 18px;
	border-radius: 5px;
  }
  #card #front #social-bar a:hover {
	/*color: #450300;*/
	color: #000;
	background: rgba(255, 255, 255, .3);
	transition: 0.25s ease-in-out;
  }
  #card .info {
	display: table-cell;
	height: 100%;
	vertical-align: middle;
	text-align: center;
  }
  #card.flip #front {
	transform: rotateY(180deg);
  }
  #card.flip #back {
	transform: rotateY(360deg);
  }



</style>

  <!-- <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <div class="quote_m" data-aos="fade-right" data-aos-duration="600" style="font-family: 'Quicksand', sans-serif;font-weight: bold;font-size: 2.4em;">
    <blockquote cite="Shivam Prakash" style="font-family: 'Quicksand', sans-serif;font-weight: bold;font-size: 1.61rem;">
      <br/>
      Howdy!
      <br/>
      <br/>
      I'm Shivam Prakash.
      <br/>
      <br/>
      I'm a web designer / developer by profession, passion and heart.
      <br/>
      <br/>
      And I love to create for web and mobile devices. 
      <br/>
      <br/>
      I have a passion for web development. 
      <br/>
    </blockquote>
    </div> -->
    <br/>
    <br/>
    <footer class="text-center mt-5 py-2" style="line-height:200%;background-color: #343a40;">
        <a target="_blank" style="text-decoration:none; color:white; font-family:'Krona One', sans-serif; !important" href="https://www.linkedin.com/in/ishiprak/"><span>Designed and Made with <i style="color: red; margin-left: 6px; margin-right: 6px;" class='fa fa-heart fa-beat'></i> by Shivam Prakash</span></a>
      </footer>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
         AOS.init();
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137886172-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137886172-1');
</script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</body>
</html>