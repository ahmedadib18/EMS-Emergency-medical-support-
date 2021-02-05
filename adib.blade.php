<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Result</title>  
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

</head>

<header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="{{route('adib')}}">Home</a></li>
                 
                        <li><a class="nav-link" href="{{route('virus')}}">Covid-19</a></li>
                        <li><a class="nav-link" href="{{route('foysul')}}">Hospital</a></li>
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
                        <p>Search Results</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                @foreach($hospitals as $hospitals)
                <div class="col-md-4">
                    <div class="blog-inner">
                        <div class="blog-img">
                            <img class="img-fluid" src="{{ asset('images/'. $hospitals->hospital_img) }}" alt="" />
                        </div>
                        <div class="item-meta">
                            <a href="#"><i class="fa fa-comments-o"></i> {{$hospitals->hospital_name}}</a>
                            <a href="#"><i class="fa fa-user-o"></i> {{$hospitals->hospital_location}}</a>
                            <a href="#"><i class="fa fa-user-o"></i> {{$hospitals->hospital_icu}}</a>
                            <span class="dti">{{$hospitals->hospital_contact}}</span>
                        </div>
                        <h2>Departments</h2>
                        <p>{{$hospitals->hospital_departments}} </p>
                    </div>
                </div>
                @endforeach
            </div>
            
        </div>
    </div>


</html>