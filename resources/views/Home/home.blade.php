<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Meetup is a free responsive single page bootstrap template by designerdada.com">
  <meta name="author" content="Akash Bhadange">
  <title>Movie App Api</title>

  <!-- Bootstrap -->
  <link href="/css/bootstrap.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
  <link href="/css/themify-icons.css" rel="stylesheet">
  <link href='/css/dosis-font.css' rel='stylesheet' type='text/css'>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body id="page-top" data-spy="scroll" data-target=".side-menu">
     
      <div class="container-fluid">
        <!-- Start: Header -->
        <div class="row hero-header" id="home">
          <div class="col-md-7">
            <h1>Movie App Api's</h1>
            <a target="_blank" href="{{route('category')}}" class="btn btn-lg btn-red">api/category</a>
            <a target="_blank" href="{{route('category_detail', ['id' => 1])}}" class="btn btn-lg btn-warning">api/category_detail/{id}</a>
            <a target="_blank" href="{{route('movies')}}" class="btn btn-lg btn-success">api/movies</a>
            <a target="_blank" href="{{route('movie_detail', ['id' => 2])}}" class="btn btn-lg btn-success">api/movie_detail/{id}</a>
            <a target="_blank" href="{{route('notification')}}" class="btn btn-lg btn-success">api/notification</a>

          </div>
          <div class="col-md-5 hidden-xs">
            <img src="img/rocket.png" class="rocket animated bounce">
          </div>
        </div>
        <!-- End: Header -->
      </div>
      <!--<div class="container">
         Start: Desc 
        <div class="row me-row content-ct">
          <h2 class="row-title">Why This Event Is Super Cool?</h2>
          <div class="col-md-4 feature">
            <span class="ti-ticket"></span>
            <h3>Buy Early Bird Tickets</h3>
            <p>Super cool discounts if you purchase early bird tickets now. Limited tickets available with some awesome perks and goodies!</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-microphone"></span>
            <h3>Expert Speakers</h3>
            <p>Best in class expert speakers who have extensive knowledge of the topic. All speakers are curated by the panel of experts.</p>
          </div>
          <div class="col-md-4 feature">
            <span class="ti-world"></span>
            <h3>People around the globe!</h3>
            <p>Meet the people attending this event around the globe. This will be the best opportunity to meet and greet people from your industry.</p>
          </div>
        </div>
     

      Start: Speakers 
        <div class="row me-row content-ct speaker" id="speakers">
          <h2 class="row-title">Meet the Speakers</h2>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-1.png" class="speaker-img">
            <h3>Simon Collins</h3>
            <p>Simon is designer and partner at Fictivekin and has worked in a variety of situations for bands, record labels, governments, polar explorers, and most other things...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-2.png" class="speaker-img">
            <h3>Stephanie Troeth</h3>
            <p>Stephie is a user experience researcher and designer. In over 15 years of working on the web, she has worn many hats, including a product lead for a tech startup in publishing...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-3.png" class="speaker-img">
            <h3>Harry Roberts</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-4.png" class="speaker-img">
            <h3>Geri Coady</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-5.png" class="speaker-img">
            <h3>Andy Budd</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 feature">
            <img src="img/speaker-6.png" class="speaker-img">
            <h3>Christian Lauke</h3>
            <p>Harry is a freelance designer, developer, writer, speaker and front-end architect from the UK, previously working as Senior UI Developer for Sky. He Tweets at...</p>
            <ul class="speaker-social">
              <li><a href="#"><span class="ti-facebook"></span></a></li>
              <li><a href="#"><span class="ti-twitter-alt"></span></a></li>
              <li><a href="#"><span class="ti-linkedin"></span></a></li>
            </ul>
          </div>
        </div>
       End: Speakers -->
      </div>

    

      

   
      <!-- End: Footer -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="/js/bootstrap.min.js"></script>
      <script src="/js/jquery.easing.min.js"></script>
      <script src="/js/scrolling-nav.js"></script>
      <script src="/js/validator.js"></script>

    </body>
    </html>