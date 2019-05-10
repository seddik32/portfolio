<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Cover Template · Bootstrap</title>
    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/jquery.pagepiling.min.css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="assets/jquery.pagepiling.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

      /*
      * Plugin intialization
      */
        $('#pagepiling').pagepiling({
          menu:"#menu",
          anchors: ['page1', 'page2', 'page3', 'page4'],
          sectionsColor: ['white', '#222', '#2C3E50', '#39C'],
          navigation: {
            'position': 'right',
            'tooltips': ['About me', 'Page 2', 'Page 3', 'Page 4']
          },
          afterRender: function(){
            $('#pp-nav').addClass('custom');
          },
          afterLoad: function(anchorLink, index){
            if(index>1){
              $('#pp-nav').removeClass('custom');
            }else{
              $('#pp-nav').addClass('custom');
            }
          }
      });


      /*
        * Internal use of the demo website
        */
        $('#showExamples').click(function(e){
        e.stopPropagation();
        e.preventDefault();
        $('#examplesList').toggle();
      });

      $('html').click(function(){
        $('#examplesList').hide();
      });
      });
    </script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      #pp-nav span{
        border:none;
        background:transparent;
      }
      #pp-nav li span:before
      {
        font-family: "Font Awesome 5 Free"; font-weight: 900;
        font-size: 20px;
        padding: 5px;
        color: #ccc;
      }
      #pp-nav li:nth-child(1) span:before
      {
        content: "\f007";
      }
      #pp-nav li:nth-child(2) span:before
      {
        content: "\f2bb";
      }
      #pp-nav li:nth-child(3) span:before
      {
        content: "\f0b1";
      }
      #pp-nav li:nth-child(4) span:before
      {
        content: "\f0a3";
      }
      #pp-nav li {
        margin:20px;
      }
      #pp-nav li .active span:before{
          
          border-bottom : 1px solid;
          border-top: 1px solid;
          color: white;
      }
      #pp-nav li .active span{
          background: transparent;
          border:none;
      }
    </style>
    <!-- Custom styles for this template -->
  </head>

  <body class="text-center" >
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent bg-light fixed-top" id="#menu">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto" id="#menu">
      <li class="nav-item">
        <a class="nav-link" href="#page1">Resume</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page2">About me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page2">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page3">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#page4">Certificate</a>
      </li>
    </ul>
  </div>
</nav>
    <div id="pagepiling">
      <div class="section bg-dark text-white" id="section1">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
          <div role="main" class="inner cover mb-auto mt-auto">
            <h1 class="cover-heading">Belgacemi Mohamed Seddik</h1>
            <div class="container">
              <p class="lead">
                Full stack web developer
              </p>
              <p class="lead">
              <a href="#page2" class="btn btn-lg btn-secondary">Download resume</a>
              </p>
            </div>
          </div>

          </div>
      </div>
      <div class="section text-white" id="section2">
        <div role="main" class="inner cover mb-auto mt-auto">
            <h1 class="cover-heading">Belgacemi Mohamed Seddik</h1>
            <div class="container">
              <p class="lead">
                Full stack web developer
              </p>
              <p class="lead">
              <a href="#page2" class="btn btn-lg btn-secondary">About me</a>
              </p>
            </div>
        </div>
      </div>
      <div class="section text-white" id="section3">
        <div role="main" class="inner cover mb-auto mt-auto">
            <h1 class="cover-heading">Belgacemi Mohamed Seddik</h1>
            <div class="container">
              <p class="lead">
                Full stack web developer
              </p>
              <p class="lead">
              <a href="#page2" class="btn btn-lg btn-secondary">About me</a>
              </p>
            </div>
        </div>
      </div>
      <div class="section text-white" id="section4">
        <div role="main" class="inner cover mb-auto mt-auto">
            <h1 class="cover-heading">Belgacemi Mohamed Seddik</h1>
            <div class="container">
              <p class="lead">
                Full stack web developer
              </p>
              <p class="lead">
              <a href="#page2" class="btn btn-lg btn-secondary">About me</a>
              </p>
            </div>
        </div>
      </div>

  </div>
</body></html>