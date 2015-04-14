<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PETSHOP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/nivo-slider.css" />
	<link href="favicon.jpg" rel="shortcut icon" />	
</head>
<body>
<div class="container">
		<div id="header" class="col-xs-12 col-sm-12 col-md-12">
			<div class="col-xs-2 col-sm-2">
            	<img id="logo" src="logo.png"/>
            </div>
            <div class="col-xs-10 col-sm-8">
                <p>
                    <a href="#"><img src="images/twitter.png" class="img-responsive social"></a>
                    <a href="#"><img src="images/facebook.png" class="img-responsive social"></a>
                    <a href="#"><img src="images/linkedin.png" class="img-responsive social"></a>
                    <a href="#"><img src="images/youtube.png" class="img-responsive social"></a>
                    </p>
            </div>			
		</div>
		<div id="main" class="col-xs-12 col-sm-12 col-md-12">
			<div class="navbar-inverse">
                    <div class="navbar-header">
                    <button class="navbar-toggle"  data-toggle="collapse" data-target="#menu">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    </div>
                    <div class="navbar-collapse" id="menu">
                        <ul class="nav navbar-nav">
                            <li><a href=" index.html">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="service.php">Pet service</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                            <li><a href="book.php">Contact Us</a></li>
                        </ul>
                    </div>
              </div>
			<div id="main-content" class="col-xs-12 col-sm-12 col-md-12 slider-wrapper theme-default">
				<div id="slider" class="col-xs-12 col-sm-12 col-md-12 nivoSlider">
					<img src="images/banner1.jpg" data-thumb="images/banner1.jpg" />
					<img src="images/banner2.jpg" data-thumb="images/banner2.jpg" />
					<img src="images/banner3.jpg" data-thumb="images/banner3.jpg" />
					<img src="images/banner4.jpg" data-thumb="images/banner4.jpg" />
				</div>
				<div id="content" class="col-xs-12 col-sm-12 col-md-12">
					<div id="welcome" class="col-xs-12 col-sm-12 col-md-12">
						<h3 style="color:rgb(98, 98, 218)">Pets Need Grooming</h3>
							<p>
								Flip & Cut is a whole new Pet Mobile Grooming service in Austin, TX. Our professional and certificated dog and cat groomers,   								Steven and Sharon, started this mobile grooming business in the begining of 2015. With our proficiency of pet grooming skill,  								the passion for animals, and the knowlege of pets,  becoming the best Mobile Grooming Unit of  the Greater Austin Area is our  								goal. 

								Flip & Cut prides ourselves on our unique Asian styles and the quality of our grooming work. Whole hand scissoring is our    	 								superiority. With the best products, equipment and the finest hand scissor work, we  guarantee the best possible groom for     							your dogs and cats. With our fantastic hand scissoring, "All Shaved" is no more your only choice for pets! You could be your  	 								pet's style designer. Pick up your phone and call us for an appointment now~ ready to make your pets stunning!!
							</p>
					</div>
                    <div class="col-xs-12">
					<div class="col-xs-12 col-sm-3 content">
						<h3>Dog Mobile Services</h3>
                        <p class="image"><img src="images/grooming5.png" class="pull-left"/>With a reserved appointment, our certificated mobile grooming team will meet you on time and bring you the professional grooming services...</p>
						<a href="service.php"  class="pull-right">More</a>                        
					</div>
					<div class="col-xs-12 col-sm-3 content">
						<h3>Cat Mobile Services</h3>
                        <p class="image"><img src="images/grooming2.png" class="pull-left">With a reserved appointment, our certificated mobile grooming team will 	   						meet you on time and bring you the professional grooming services...</p>
						<a href="service.php"  class="pull-right">More</a></span>
                     </div>
					<div class="col-xs-12 col-sm-3 content">
						<h3>Drive-thru Services</h3>
                        <p class="image"><img src="images/grooming3.png" class="pull-left">With a reserved appointment, our certificated grooming team will be waiting for you coming and provide you the professional grooming services...</p>
						<a href="service.php"  class="pull-right">More</a>
                   	</div>
					<div class="col-xs-12 col-sm-3 content">
						<h3>Our Shampoo</h3>
                        <p class="image"><img src="images/Shampoo.png" class="pull-left">After years of grooming experience, #1 ALL SYSTEMS is always our best and only choice. We use show quality shampoo to provide show quality...</p>
						<a href="service.php"  class="pull-right">More</a>  			
                        </div>
					<div class="col-xs-12 col-sm-3 content">
						<h3>Groomer certifications</h3>
                        <p class="image"><img src="images/grooming1.png" class="pull-left">Pet Beautician Qualification Certificate International Approved Pet Grooming Certificate...</p><a href="service.php"  class="pull-right">More</a>
					</div>
                    <div class="col-xs-12 col-sm-3 content">
						<h3>Our Tibetan Mastiff</h3>
                        <p class="image"><img src="images/service6.png" class="pull-left">"Tall as a donkey, roar as a lion." If you are looking for a giant furry breed as a loyal home guardian, Tibetan Mastiff is your best choice...</p>
						<a href="service.php" class="pull-right">More</a>
 					</div>
                    </div>
			</div>			
		</div> 
</div>
<div id="footer">
            <p style="text-align:center;color:white">&copy;Copyright  flipandcutllc.com</p>
			
</div>
<img class="offers pull-right" src="SpecialOffers.png"/>
</div>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">
   $(window).load(function() {
       $('#slider').nivoSlider();
   });
</script>

</body>
</html>