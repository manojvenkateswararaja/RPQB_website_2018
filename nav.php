<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link data-require="bootstrap-css@3.1.1" data-semver="3.1.1" rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script data-require="jquery" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.1.1" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <style>

.icon-bar{
  color:black
}
.navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: #232323b0;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
    /* .navbar-inverse{
      background-color:"white";
    } */
  </style>
</head>
<body>
<div class="navbar1">
<nav class="navbar navbar-inverse navbar-fixed-top visible-lg" style="background-color:#ffffff!important;border:none !important;height: 133px;">
<!-- website navbar -->
  <div class="container-fluid ">
    <div class="navbar-header">
    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="testlandingpage.php">
    <img class="img-responsive" src="assests/rapidqube-logo-2.png" style="margin-top: 26px;">
  </a>
    </div>
  
    <ul class="nav navbar-nav navbar-right mt-2" style="margin-top: 36px;">
       <a href="testlandingpage.php" style="color:black" class="col-sm-2"><span class="glyphicon glyphicon-home "></span></a>
        
        <a href="testcontact.php" style="color:black;font-family:ProximaNova-Regular;font-size:14px" class="col-sm-4">Contact&nbsp;Us</a>
        <a href="testundermaintance.php" style="color:black;font-family:ProximaNova-Regular;font-size:14px" class="col-sm-3">Career</a>
        <a href="testblog.php" style="color:black;font-family:ProximaNova-Regular;font-size:14px" class="col-sm-2">Blog</a>
      </ul>
      <br>
      <hr style="margin-top: 50px;border-color: #101010;">
     <div class="pl-2">
    <div class="collapse navbar-collapse nav navbar-right" id="myNavbar" style="margin-top:-12px">
      <ul class="nav navbar-nav">
        <li><a href="productsolution.php" style="color:black ;font-family:ProximaNova-Regular;font-size:15px" > Products & Solutions</a></li>
        <li><a href="testwhitepaper.php" style="color:black; font-family:ProximaNova-Regular;font-size:15px">Whitepapers</a></li>
        <li><a href="testframework.php" style="color:black;font-family:ProximaNova-Regular;font-size:15px">Frameworks</a></li>
        <li><a href="testserviceus.php" style="color:black;font-family:ProximaNova-Regular;font-size:15px">Services</a></li>
        <li><a href="training.php" style="color:black;font-family:ProximaNova-Regular;font-size:15px">Training</a></li>
        <li><a href="testaboutus.php" style="color:black;font-family:ProximaNova-Regular;font-size:15px">About&nbsp;Us </a></li>
        <li><a href="#" style="color:black;font-family:ProximaNova-Regular;font-size:15px">info@rapidqube.com</a></li>
        <li><a href="#" style="color:black;font-family:ProximaNova-Regular;font-size:15px">+91-22-2567-3235</a></li>
      </ul>
    </div>
  </div> 
  </div>
  <script>
  //  $(".nav li").on("click", function() {
  //   $(".nav li").removeClass("active");
  //   $(this).addClass("active");
  // });
  </script>
  <style>
  .nav li:hover{
    background-color:silver;
  }
 
  </style>
  <hr style="margin-top: 1px;border-color: #101010;">
</nav>
  <!-- mobile navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top visible-xs "  style="background-color:#ffffff!important;border:none !important">
  <div class="container-fluid ">
    <div class="navbar-header">
    
      <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#myNavbar1">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a href="testlandingpage.php">
    <img class="img-responsive" src="assests/rapidqube-logo-2.png" style="margin-top: 13px;width: 79px;">
    </a>
    </div>
  
    <ul class="nav navbar-nav navbar-right mt-2">
    <hr style="margin-top: 1px; border-color: #101010;">
       <a href="testlandingpage.php" style="color:black" class="col-sm-2"><span class="glyphicon glyphicon-home "></span></a>
        
        <a href="testcontact.php" style="color:black" class="col-sm-4">Contact&nbsp;Us</a>
        <a href="testundermaintance.php" style="color:black" class="col-sm-3">Career</a>
        <a href="testblog.php" style="color:black" class="col-sm-2">Blog</a>
      </ul>
      <br>
      
     <div class="pl-2">
    <div class="collapse navbar-collapse nav navbar-right" id="myNavbar1">
      <ul class="nav navbar-nav navbar-right mt-2">
        <li><a href="productsolution.php" style="color:black">Products & Solutions</a></li>
        <li><a href="testwhitepaper.php" style="color:black">Whitepapers</a></li>
        <li><a href="testframework.php" style="color:black">Frameworks</a></li>
        <li><a href="testserviceus.php" style="color:black">Services</a></li>
        <li><a href="training.php" style="color:black">Training</a></li>
        <li><a href="testaboutus.php" style="color:black">About&nbsp;Us </a></li>
        <li><a href="#" style="color:black">info@rapidqube.com</a></li>
        <li><a href="#" style="color:black">+91-22-2567-3235</a></li>
      </ul>
    </div>
  </div>
  </div>
  <hr style="margin-top: 1px; border-color: #101010;">
</nav>

  </div>
</body>
</html>