
<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>EMSS Hospital</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
	<!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

	<!-- LOADER -->
     <!-- <div id="preloader">
		<div class="loader">
			<img src="images/preloader.gif" alt="" />
		</div>
    </div>end loader -->
    <!-- END LOADER -->
	
	<!-- Start top bar -->
	
	<!-- End top bar -->
	
	<!-- Start header -->
	<header class="top-header">
        <!-- Start Top ber section -->	



<!-- End Top ber section -->	
		<nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
				<a class="navbar-brand" href="{{route('adib')}}"><img src="images/logo.png" alt="image"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
					<span></span>
					<span></span>
					<span></span>
				</button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link" href="{{route('adib')}}">Home</a></li>
                 
						<li><a class="nav-link" href="{{route('virus')}}">Covid-19</a></li>
                        <li><a class="nav-link active" href="{{route('foysul')}}">Hospital</a></li>
						<li><a class="nav-link" href="{{route('doct')}}">Doctor</a></li>
                        <li><a class="nav-link" href="{{route('red')}}">Ambulance</a></li>
				
						
                    </ul>
                </div>
            </div>
        </nav>
	</header>
	
	<div id="blog" class="blog-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="title-box">
						<h2>Hospital</h2>
						<p>Looking for a hospital </p>
					</div>										 					 					 
					
					 <div class="form-group">
					
					 <form action="{!! route('find') !!}" method="post">
					 @csrf
					 <label for="email"><b>Your Location(Mandatory):</b></label>
         				<input name="search" class="form-control mr-sm-2" type="search" placeholder="search by location" aria-label="Search">
						 <br>
						 <label for="email"><b>Hospital name(Optional):</b></label>
						<input name="name" class="form-control mr-sm-2" type="name" placeholder="search by name" aria-label="Search">
						<br>
						<label for="email"><b>Departments(Optional):</b></label>
						<input name="depname" class="form-control mr-sm-2" type="name" placeholder="search by department name eg: Surgery; Medicine" aria-label="Search">
						<br>
						
						
						
        		         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> 
        		     </form>
                          

                        </div>
        		   

                    </div>
				</div>
			</div>
			
			
			
		</div>

			

	

	
	
	<!-- End Contact -->
	
	
	<!-- Start Footer -->
	<footer class="footer-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<p class="footer-company-name">All Rights Reserved. &copy; 2020 </p>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer -->
	

	<!-- ALL JS FILES -->
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
	<script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
	<script src="js/slider-index.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/TweenMax.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
	<script src="js/isotope.min.js"></script>	
	<script src="js/images-loded.min.js"></script>	
    <script src="js/custom.js"></script>
</body>
</html>