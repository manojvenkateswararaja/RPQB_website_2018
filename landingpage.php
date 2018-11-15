<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="description" content="Rapidqube, RapidQube ,Rapidqube Digital">
<meta name="author" content="">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
<link rel="icon" type="image/png" href="rq_favicon.png"/>
<!-- <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/slick.css" rel="stylesheet"/>
<link href="assets/css/style.css" rel="stylesheet"/>
<link href="assets/css/responsive.css" rel="stylesheet"/> -->
  <title>RapidQube-Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--fontawesome incorporated-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!--open sans font loading-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <!-- social Media Buttons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/app.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>RapidQube</title>
  <style>
    /* Modal For Reg Form */
  /* -- Input styles ---------------------------------- */
  .form-group {
      position: relative;
      margin-top: 35px;
      margin-bottom: 20px;
    }
    .input-group {
      position: relative;
    }
    .form-control {
      display: block;
      height: 36px;
      width: 100%; 
      border: none;
      border-radius: 0 !important;
    
      font-size: 16px;
      font-weight: 300;
      padding: 0;
      background-color: transparent;
      box-shadow: none;
      border-bottom: 1px solid #757575;
    }
    .input-group .form-control {
      position: relative;
      z-index: inherit;
      float: inherit;
      width: 100%;
      margin-bottom: 0;
    }
    .form-control:focus {
      border-color: #757575;
      outline: none;
      box-shadow: none;
    }
    
    /* -- label styles ---------------------------------- */
    label {
      position: absolute;
      top: -18px;
      color: #999;
      font-size: 12px;
      font-weight: 300;
      
      transition: 0.2s ease all;
      -moz-transition: 0.2s ease all;
      -webkit-transition: 0.2s ease all;
    }
    
    .form-horizontal .control-label {
      position: relative;
      top: 0;
      margin-bottom: 0;
    }
    
    @media (min-width: 768px) {
      .form-horizontal .control-label {
        font-size: 16px;
      }
    }
      
    
    
    
    
    .float-label {
      left: 0;
      top: 7px;
      font-size: 16px;
      pointer-events: none;
    }
    
    /* active state */
    .form-control:focus ~ .float-label, .form-control:valid ~ .float-label {
      top: -18px;
      font-size: 12px;
    }
    .reset_btn {
    font-size: 0px;
    border: none;
    outline: none;
    padding: 0px;
  }
    


    /* input colors ---- */
    
  
    
    .insiderq{
      margin-top: -78px;
      
    }
    
    
  
    
  
  
  
  /* End of Regista=ration Form Modal */
  </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    
    
  <div class="container-fluid">
    <div>

<img src="assests/WeBCexpert.png" srcset="assests/WeBCexpert.png"
      class="BC_image" >

    </div>
    <img src="assests/icon.png" srcset="assests/icon.png"
      class="landing_image" >
    <button type="button" href="#" data-toggle="modal" data-target="#myModal"class=" ml-5 btn btn-link explore_more"><img src="/assests/group-19.svg" >
    </button>
  </div>
  <div class="row">
      <div class="col-md-1 col-sm-1 col-lg-1"></div>
      <div class="col mr-auto">
            <span class="heading ml-5" >Our Specialization</span>
      </div>
  </div>
  <div class="row mt-5">
      <div class="col-md-1 col-sm-1 col-lg-1 "></div>
      <div class="col">
            <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-20.jpg" srcset="assests/group-20@2x.jpg 2x,assests/group-20@3x.jpg 3x"
          class="Etherium">
      </div>
      <div class="col mr-auto">
            <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-18.jpg" srcset="assests/group-18@2x.jpg 2x,
            assests/group-18@3x.jpg 3x" class="Hyperledger mt-3">
      </div>
      <div class="col mr-auto">
            <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-7.jpg" srcset="assests/group-7@2x.jpg 2x,
            assests/group-7@3x.jpg 3x"class="Multichain mt-3">
      </div>
      <div class="col mr-auto">
            <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-6.png" srcset="assests/group-6@2x.png 2x,
                                      assests/group-6@3x.png 3x"
          class="NEM mt-3">
      </div>
      <div class="col-md-4 col-sm-4 col-lg-8"></div>
      <p class="solid mt-5" style="margin-left: 11.3%;width: 80%;"></p>
      
  </div>
    <!-- <p class="solid mt-5" style="margin-left: 6.6%; width:82%;"></p>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col">
          <p class="box">
              <br>
             <span class="ml_35 pt-5 count_no">3+</span>
          </p>
      </div>
      <div class="col">
           <p class="blue_line_landing_page"></p>
      </div>
      <div class="col" >
            <p class="box" style="margin-left: -40%;">
                <br>
                <span class="ml_28 pt-5 count_no">59+</span>
            </p>
      </div>
      <div class="col">
            <p class="blue_line2_landing_page"></p>
      </div>
      <div class="col">
            <p class="box" style="margin-left: -40%;">
                    <br>
                    <span class="ml_35 pt-5 count_no">8+</span>
            </p>
      </div>
      <div class="col">

      </div>
  </div> -->
 
  <div class="container" style="margin-right: 9.6%;">
    <div class="count_section text-center">
      <ul class="p-0 m-0">
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="whitepaper.php" title="White Papers" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 3+ </h1>
            </div>
            <p class="pt-3 count_txt">White Papers</p>
          </a>
        </li>
        <svg style="margin-bottom: 4%;
                                  margin-left: -5%;" height="0.1%" width="240">
          <line x1="0" y1="0" x2="180" y2="0" style="stroke: #4990e2;stroke-width:5" />
          Sorry, your browser does not support inline SVG.
        </svg>
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="product&solution.php" title="Products &amp; Solutions" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 59+ </h1>
            </div>
            <p class="pt-3 count_txt">Products &amp; Solutions</p>
          </a>
        </li>
        <svg style="margin-bottom: 4%;
                                  margin-left: -9.5%;" height="0.1%" width="240">
          <line x1="0" y1="0" x2="180" y2="0" style="stroke: #4990e2;stroke-width:5" />
          Sorry, your browser does not support inline SVG.
        </svg>
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="framework.php" title="Frameworks" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 8+ </h1>
            </div>
            <p class="pt-3 count_txt">Frameworks</p>
          </a>
        </li>
      </ul>
      <p class="solid mt-5" style="margin-left: 5.3%;; width: 102%;"></p>
    </div>
  </div>
  <div class="row">
      <div class="col-md-4 col-sm-4 col-lg-4"></div>
      <div class="col insiderq">
          <p class="heading ml_12"><span class="pnR">Inside</span>&nbsp;&nbsp;<span class="pnSB">RapidQube</span></p>
      </div>
  </div>
  <div class="row ">
      <div class="col-md-2 col-sm-2 col-lg-2  ">
            <img src="/assests/Landing Page - 1.png" class="landing_image_design">
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 shadowEffect_landing_page">
            <img src="assests/blockchain_healthcare.jpg" class="card-img-top mt-3 ">
            <p class="smallheading pnSB mt-3">Our Article&nbsp;About&nbsp;BlockChain&nbsp;And&nbsp;Health&nbsp;Care</p>
            <a href="blog.php" class="btn btn-link  pnSB ">Read More ---&nbsp;>
              <br>
      </div>
      <div class="col-md-1 col-sm-1 col-lg-1"></div>
      <div class="col-md-4 shadowEffect_landing_page">
            <a class="twitter-timeline" style="height:400%;" data-lang="en" data-width="100%" data-chrome="nofooter noborders noheader"
            data-height="260" data-theme="light" href="https://twitter.com/rapidqube">Tweets by
            RapidQube</a>
            <br>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          <p class="smallheading pnSB ">Twitter Handler @Rapdiqube </p>
            <!-- <a href="https://twitter.com/rapidqube" class="btn btn-link pnSB "> Our Achivements ---> </a> 
            <br>
            <br>
      </div>
  </div>
<div class="container">
  <div class="row mt-5">
      <div class="col-md-4 col-sm-4 col-lg-4"></div>
   <div class="col-md-1 col-sm-1 col-lg-1 ">
        <p class="heading pnSB">Partnership&nbsp;&&nbsp;Collaborations</p>
   </div>
   <div class="col-md2 col-sm2 col-lg2 ml-auto"></div>
  </div>
  <div class="row mt-3">
      <div class="col-md-3 col-sm-3 col-lg-3"></div>
      <div class="col-md-2 mr-auto">
           <a class="pnSB" ><p class="smallheading hover pnL">Technology&nbsp;Partnerships</p></a>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3  mr-auto">
            <a class="pnSB" ><p class="smallheading hover pnL">Industrial&nbsp;Collaboration</p></a>
      </div>
      <div class="col-md-2 col-sm-2 col-lg-2 mr-auto">
            <a class="pnSB" ><p class="smallheading hover pnL pr_52">Members</p></a>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3"></div>
  </div>
  <div class="row">
      <div class="col-md-4 col-sm-4 col-lg-4 "></div>
      <div class="col ml_-8" >
            <img src="assests/screen-shot-2018-08-03-at-2-40-29-pm.jpg" srcset="assests/screen-shot-2018-08-03-at-2-40-29-pm@2x.jpg 2x,
            assests/screen-shot-2018-08-03-at-2-40-29-pm@3x.jpg 3x"class="mr-5">
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4"></div>
  </div>
  <div class="row">
      <div class="col-md-4 col-sm-4 col-lg-4 ml-4"></div>
      <div class="col ml-1 ml-5">
            <a class="gradient-button gradient-button-4" style="color: #ffffff;" data-toggle="modal" data-target="#myModal">
                    Start a Project </a>
      </div>
      
      <div class="col-md-5 col-sm-5 col-lg-5"></div>
  </div>
</div>
    <div class="footer pale_bg_color" style="width: 100%;height:10%;">
    <div class="col-md-10 col-sm-10 col-lg-10 "></div><div> <a href="#" data-toggle="modal" data-target="#myModal"><img src="assests/group-8.png"  srcset="assests/group-8@2x.png 2x, assests/group-8@3x.png 3x"
      class="Group-8 float-right mr-5" style="margin-top: -3%;" ></a></div>
    <div class="container row mt-5">
      <div class="col-md-2 col-sm-2 col-lg-2 "></div>
      <div class="col-md-1 col-sm-1 col-lg-1 ">
        <ul style="list-style: none;">
          <li class="footer_font_header">RapidQube</li>
          <br> <a href="aboutus.php">
            <li class="footer_font">About&nbsp;Us</li>
          </a>
          <br> <a href="services.php">
            <li class="footer_font">Services</li>
          </a>
          <br> <a href="product&solution.php">
            <li class="footer_font">Solutions</li>
          </a>
        </ul>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1">
        <ul style="list-style: none; ">
          <li class="footer_font_header">SUPPORT</li>
          <br> <a href="undermaintance.php">
            <li class="footer_font">Help&nbsp;Center </li>
          </a>
          <br> <a href="undermaintance.php">
            <li class="footer_font">FAQ's</li>
          </a>
          <br> <a href="contactus.php">
            <li class="footer_font">Contact&nbsp;Us</li>
          </a>
        </ul>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <ul style="list-style: none; ">
          <li class="footer_font_header">News&nbsp;&&nbsp;Events</li>
          <br> <a href="undermaintance.php">
            <li class="footer_font">Consessus 2018 </li>
          </a>
          <br> <a href="undermaintance.php">
            <li class="footer_font">NEM&nbsp;Foundation&nbsp;2018</li>
          </a>
         
        </ul>
      </div>
      <div class="col-md-4" style="padding-left: 120px;">
        <div class="row ml-5">
          <!-- <ul class="social_media pl-0 m-0 ml-auto"> -->
								<span> <a href="https://www.facebook.com/rapidqube/" target="_blank" title="footer_media" class="fa fa-facebook"></a> </span>
								<span> <a href="https://twitter.com/rapidqube" target="_blank" title="footer_media" class="fa fa-twitter"></a> </span>
								<span> <a href="https://www.linkedin.com/company/rapidqube/" target="_blank" title="footer_media" class="fa fa-linkedin"></a> </span>
                <span><a href="undermaintance.php" class="fa fa-google"></a></span> 
              <!-- </ul> -->
          <!-- <span><a href="https://www.facebook.com/rapidqube/" class="fa fa-facebook"></a></span>
          <span><a href="https://twitter.com/rapidqube" class="fa fa-twitter"></a></a></span>
          <span><a href="https://in.linkedin.com/company/rapidqube" class="fa fa-linkedin"></a></span>
          <span><a href="landingpage.php" class="fa fa-google"></a></span> -->
        </div>
      </div>
    </div>
    <div class="row">
      <p class="solid mt-5" style="margin-left: 10%;width: 80%;"></p>
    </div>
    <div class="row">
      <p style="font-size: 12px;margin-left:27%;font-family:Helvetica;color: #353535;">By continuing past this page,
        you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. © 2018 </p>
    </div>

  </div>

  

  <script>
    // Mail Send
    $('#email_form').validate({
      rules: {

        email: {
          required: true,
          email: true
        },
        f_name: "required",
        phone: "required",
        country: "required"




      },
      messages: {

      },

      submitHandler: function (form) {


        var email_details = $('.email_form').serialize();
        $('.statusMsg').html('');
        $.ajax({
          type: "POST",
          url: "register.php",

          data: {
            email_details: email_details

          },
          success: function (msg) {
            if (msg) {
              $('.reset_btn').click();
              $('.statusMsg').html('<span style="color:blue;font-size: 20px;">Thanks for contacting us, we\'ll get back to you soon.</p>');

              // setTimeout(function(){
              // 	$('.close').click();
              // },3000);

              //$('.close').click();
              //$('.reset_btn').click();




            } else {
              $('.statusMsg').html('<span style="color:red;font-size: 20px;">Some problem occurred, please try again.</span>');
            }




          }
        });

      };
  </script>
</body>

</html>