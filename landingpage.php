<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
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
    
  
    
    
    
    
  
    
  
  
  
  /* End of Regista=ration Form Modal */
  </style>
</head>

<body>
    <?php include('navbar.php'); ?>
  <div class="container-fluid">
    <img style="margin-left: 21%;margin-top: -7.5%;width: 80%;" src="assests/group-21.png" srcset="assests/group-21@2x.png 2x,assests/group-21@3x.png 3x"
      class="Group-21">
    <button type="button" href="#" data-toggle="modal" data-target="#myModal" style="margin-top: -44%;padding-left: 21%;"
      class=" ml-5 btn btn-link">Explore --&gt;
    </button>
  </div>
  <div class="container" style="margin-right: 21.6%;margin-top: -9.1%;">
    <span class="heading" style="padding-left: 100px;">Our Specialization</span>
    <div class="row" style="margin-left: 12%;">
      <div class="ml-5 mt-3">
        <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-20.jpg" srcset="assests/group-20@2x.jpg 2x,assests/group-20@3x.jpg 3x"
          class="Etherium">
      </div>
      <div class="col-sm-1"></div>
      <div class="ml-5 mt-3">
        <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-18.jpg" srcset="assests/group-18@2x.jpg 2x,
                                  assests/group-18@3x.jpg 3x"
          class="Hyperledger">
      </div>
      <div class="col-sm-1"></div>
      <div class="ml-5 mt-3">
        <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-7.jpg" srcset="assests/group-7@2x.jpg 2x,
                                      assests/group-7@3x.jpg 3x"
          class="Multichain">
      </div>
      <div class="col-sm-1"></div>
      <div class="ml-5 mt-3">
        <img href="#" data-toggle="modal" data-target="#myModal" src="assests/group-6.png" srcset="assests/group-6@2x.png 2x,
                                      assests/group-6@3x.png 3x"
          class="Group-6">
      </div>
    </div>
  </div>
  <p class="solid mt-5" style="margin-left: 6.6%; width:82%;"></p>
  <div class="container" style="margin-right: 9.6%;">
    <div class="count_section text-center">
      <ul class="p-0 m-0">
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="solutions.php#section_sol_1" title="White Papers" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 3+ </h1>
            </div>
            <p class="pt-3 count_txt">White Papers</p>
          </a>
        </li>
        <svg style="margin-bottom: 1%;
                                  margin-left: -5%;" height="0.1%" width="240">
          <line x1="0" y1="0" x2="180" y2="0" style="stroke: #4990e2;stroke-width:5" />
          Sorry, your browser does not support inline SVG.
        </svg>
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="solutions.php#section_sol_2" title="Products &amp; Solutions" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 59+ </h1>
            </div>
            <p class="pt-3 count_txt">Products &amp; Solutions</p>
          </a>
        </li>
        <svg style="margin-bottom: 1%;
                                  margin-left: -9.5%;" height="0.1%" width="240">
          <line x1="0" y1="0" x2="180" y2="0" style="stroke: #4990e2;stroke-width:5" />
          Sorry, your browser does not support inline SVG.
        </svg>
        <li class="count_list px-sm-2 px-md-5 px-lg-5 px-xl-5">
          <a href="solutions.php#section_sol_3" title="Frameworks" class="d-block" style="text-decoration: none;">
            <div class="box_no">
              <h1 class="count_no"> 8+ </h1>
            </div>
            <p class="pt-3 count_txt">Frameworks</p>
          </a>
        </li>
      </ul>
      <p class="solid mt-5" style="margin-left: -0.7%; width: 102%;"></p>
    </div>

  </div>
  <div class="container container-fluid" style="margin-left: 14%;">
    <div class="heading" style="margin-left: 22%;"> <span class="pnR">Inside</span>  <span class="pnSB">Rapidqube</span>
    </div>
    <br>
    <div class="row" style="padding-right:23%;">
      <div class="col-md-6">
        <div class="card mb-4">
          <img src="assests/blockchain_healthcare.jpg" class="card-img-top d9e5d-0fe6-48be-8ed6-fb8eac39cbcf-copy" alt="Card image cap">

          <div class="card-body">
            <!-- <h5 class="card-title">Card title</h5> -->
            <p class="card-text smallheading">Our Latest Article About BlockChain And Health Care</p>
            <a href="blog.html" class="btn btn-link ">Read More ---> </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4" style="height:94%;">
          <a class="twitter-timeline" style="height:400%;" data-lang="en" data-width="100%" data-chrome="nofooter noborders noheader"
            data-height="260" data-theme="light" href="https://twitter.com/rapidqube">Tweets by
            RapidQube</a>
          <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

          <div class="card-body">
            <!-- <h5 class="card-title">Card title</h5> -->
            <p class="card-text smallheading">Twitter Handler @Rapdiqube </p>
            <a href="https://twitter.com/rapidqube" class="btn btn-link ">Achivements </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container" style="margin-left: 2%">
      <div class="heading mt-1" style="margin-left:12%">Partnership & Collaborations</div>
      <br>
      <div class="row mt-3" style="padding-right: 10%;">
        <div class="col-md-4">
          <span class="smallheading">Technology Partnerships</span>
        </div>
        <div class="col-md-4">
          <span class="smallheading">Industial Collaboration</span>
        </div>
        <div class="col-md-4">
          <span class="smallheading">Members</span>
        </div>
      </div>
      <div class="row " style="padding-left: 8%;">
        <div class="col-md-8">
          <img src="assests/screen-shot-2018-08-03-at-2-40-29-pm.jpg" srcset="assests/screen-shot-2018-08-03-at-2-40-29-pm@2x.jpg 2x,
                          assests/screen-shot-2018-08-03-at-2-40-29-pm@3x.jpg 3x"
            class="Screen-Shot-2018-08-03-at-24029-PM">
        </div>
      </div>
      <div class="row mt-5" style="padding-left: 24%;">
        <a class="gradient-button gradient-button-4" style="color: #ffffff;" data-toggle="modal" data-target="#myModal">
          Start a Project </a>

      </div>
    </div>
  </div>
  <div class="footer pale_bg_color" style="width: 100%;height:10%;">
    <div class="col-md-10"></div><div> <img src="assests/group-8.png"  srcset="assests/group-8@2x.png 2x, assests/group-8@3x.png 3x"
      class="Group-8 float-right mr-5" style="margin-top: -3%;" ></div>
    <div class="container row mt-5">
      <div class="col-md-2"></div>
      <div class="col-md-1">
        <ul style="list-style: none;">
          <li class="footer_font_header">Rapidqube</li>
          <br> <a href="aboutus.html">
            <li class="footer_font">About&nbsp;Us</li>
          </a>
          <br> <a href="services.html">
            <li class="footer_font">Services</li>
          </a>
          <br> <a href="solutions.html">
            <li class="footer_font">Solutions</li>
          </a>
        </ul>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1">
        <ul style="list-style: none; ">
          <li class="footer_font_header">SUPPORT</li>
          <br> <a href="contactus.html">
            <li class="footer_font">Help&nbsp;Center </li>
          </a>
          <br> <a href="contactus.html">
            <li class="footer_font">FAQ's</li>
          </a>
          <br> <a href="contactus.html">
            <li class="footer_font">Contact&nbsp;Us</li>
          </a>
        </ul>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-2">
        <ul style="list-style: none; ">
          <li class="footer_font_header">News&nbsp;&&nbsp;Events</li>
          <br> <a href="https://twitter.com/rapidqube">
            <li class="footer_font">Consessus 2018 </li>
          </a>
          <br> <a href="https://twitter.com/rapidqube">
            <li class="footer_font">NEM&nbsp;Foundation&nbsp;2018</li>
          </a>
          <!-- <br> <a href="http://"><li class="footer_font">Contact Us</li></a>  -->
        </ul>
      </div>
      <div class="col-md-4" style="padding-left: 120px;">
        <div class="row ml-5">
          <span><a href="https://www.facebook.com/rapidqube/" class="fa fa-facebook"></a></span>
          <span><a href="https://twitter.com/rapidqube" class="fa fa-twitter"></a></a></span>
          <span><a href="https://in.linkedin.com/company/rapidqube" class="fa fa-linkedin"></a></span>
          <span><a href="landingpage.html" class="fa fa-google"></a></span>
        </div>
      </div>
    </div>
    <div class="row">
      <p class="solid mt-5" style="margin-left: 10%;width: 80%;"></p>
    </div>
    <div class="row">
      <p style="font-size: 12px;margin-left:10%;font-family:Helvetica;color: #353535;">By continuing past this page,
        you agree to our Terms of Service, Cookie Policy, Privacy Policy and Content Policies. © 2018 - Maharashtra
        state board and higher secondary education All rights reserved.</p>
    </div>

  </div>

  <!-- <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content"> -->

        <!-- Modal Header -->
        <!-- <div class="modal-header">
          <h4 class="modal-title w-100 heading">Quick Enquiry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div> -->

        <!-- Modal body -->
        <!-- <div class="modal-body modal-guts">
          <form name="email_form" class="email_form" id="email_form" method="POST" action="#" autocomplete="off">

            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Your Email</label>

            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">First Name</label>


            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Last Name</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Company</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Phone Number</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail1" required>
              <input type="hidden" name="fld_name" id="fld_name">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Country</label>
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="submit" id="send_btn" name="submit" value="submit" class="btn btn-default  buttonFonts "
                style="width: 265px; height: 61px;border-radius: 8px; background-image: linear-gradient(76deg, #06cbec, #0c7bd2);">Submit</button>
              <input type="reset" name="" class="reset_btn">
            </div>

        </div>
        </form> -->
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div> -->

      <!-- </div>
    </div>
  </div> -->
  <!--   End Of Modal-->

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

      }

    });
  </script>
</body>

</html>