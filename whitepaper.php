<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Rapidqube, RapidQube ,Rapidqube Digital">
<meta name="author" content="">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
<link rel="icon" type="image/png" href="rq_favicon.png"/>
<link href="assests/css/bootstrap.min.css" rel="stylesheet" >
<link href="assests/css/slick.css" rel="stylesheet" />
<link href="assests/css/style.css" rel="stylesheet" />
<link href="assests/css/responsive.css" rel="stylesheet" />
<link href="assets/css/responsive.css" rel="stylesheet" />
<link href="assets/css/app.css" rel="stylesheet" />
<title>Home</title>
</head>
<body>
        <?php include('navbartest.php'); ?>
        <div id="ps">
        <div class="container mt-1 col-md-12">
            <div class="item">
                <img src="assests/whitepaper.jpg" srcset="assests/whitepaper.jpg"
                    class="imgwhitepaperstyle1">
                <div class="text_wrapper text-block centered">
                    <h2 class="item--title ml_38 white_color banner_headingwhitepaper">Whitepapers</h2>
                    <!-- <p class="item--text white_color banner_content">ISO defines software quality as a structured set
                        of
                        individual quality characteristics focusing on Functionality, Reliability, Usability,
                        Efficiency,
                        Maintainability, and Portability. We keep those tenets “front and center” throughout our
                        solution
                        lifecycle. As innovators, designers, developers and strategists, our client work defines us. In
                        today's marketplace, the practice of innovation isn't just about creating new solutions, it's
                        about
                        discovering completely new markets and customers.</p> -->
                </div>
            </div>
        </div>
    </div>
 
   
    <div id="whitepaper">
    <div class="col-md-12 ">
        <!-- <div class="m-5  Whitepapershead ">
            Whitepapers
        </div> -->
        <div class="m-5 container col-md-12 row service_title">
            <div class="card col-md-3" style="width:24.4%;border:none;">

                <div class="card-body">
                    <h5 class="card-text  Solutions_content_bodyidentity">Off-Chain Smart Contract</h5>
                    <p class="service_desc f16 " >Smart Contracts should surpass their limitations and
                        evolve to changing architectural standards that are needed for blockchains to scale
                        significantly while retaining their decentralized principles.</p>
                    <br>
                    <p class="service_desc f16 ">Presented at 13th International Conference on
                        Information Systems Security 2017 | IIT Mumbai, India..</p>
                        <div class="expstyle">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-text  Solutions_content_bodyidentity">Connected Health</h5>
                    <p class="service_desc f16 ">Development of fundamental design changes for
                        Electronic Health Records (EHRs) and Patient Health Records (PHRs) has been constrained
                        traditionally through a longstanding focus on compliance.</p>
                    <br>
                    <p class="service_desc f16 ">Presented at 13th International Conference on
                        Information Systems Security 2017 | IIT Mumbai, India.</p>
                <div class="expstyle">
                    <a href="#" data-toggle="modal" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-text  Solutions_content_bodyidentity">GDPR Architecture</h5>
                    <p class="service_desc f16 ">The General Data Protection Regulation (GDPR) regulates
                        the export of personal data outside the EU. The regulation has provisions for individual
                        control over one’s own data that includes many rights to the individual to manage personal data
                        -access, consent, removal, portability and minimization.</p>
                    <br>
                    <p class="service_desc f16 ">It becomes enforceable from 25 May 2018 after a
                        two-year transition period.</p>
                        <div class="expstyle">
                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
                </div>
            </div>
        </div>
        <div class="m-5 container col-md-12 row">
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-text  Solutions_content_bodyidentity">Real Estate Solution</h5>
                    <p class="service_desc f16 ">Financial-Settlement Speed, Payment Automation,
                        Contract Enforceability, Dispute Reduction, Cash Flow Improvements.</p>
                    <br>
                    <p class="service_desc f16 ">Expense Reduction-Legal, Payment Automation, Dispute
                        Reduction, Cash Flow Improvements.</p>
                        <div class="expstyle">
                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
                </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-4">
                <img src="assests/group-6.svg" class="Group-6">
            </div>
        </div>
    </div>
    </div>
    
   
    <!--    Modal Form     -->
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title w-100 heading">Quick Enquiry</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body modal-guts">
          <form name="email_form" class="email_form" id="email_form" method="POST" action="#" autocomplete="off">
            <div class="form-group">
              <input type="email" class="form-control" name="email"   id="email">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Your Email</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="f_name" id="f_name">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"  for="exampleInputEmail1">First Name</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="l_name" id="l_name" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Last Name</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="company" id="company" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"  name="company" id="company" for="exampleInputEmail1">Company</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="phone" id="phone" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" name="phone" for="exampleInputEmail1">Phone Number</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="country" id="country" id="exampleInputEmail1">
              
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" name="country" for="exampleInputEmail1">Country</label>
            </div>
            <div class="form-group">
            <input type="hidden" name="fld_name" id="fld_name" value="Quick Enquiry">
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="submit" id="send_btn" name="submit" value="submit" class="btn btn-default send_btn  buttonFonts  enqsubmitstyle"
                >Submit</button>
              <input type="reset" name="" class="reset_btn">
            </div>
            <p class="statusMsg"></p>
        </div>
        </form>
        <!-- Modal footer -->
        <!-- <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div> -->
      </div>
    </div>
  </div>
  <!--   End Of Modal-->
    <script>
        //popup video
        $('.video_stop').click(function (e) {
            var myVideo = document.getElementById("popup_video");
            myVideo.pause();
        });
        
        $('.close').click(function(){
            $('.statusMsg').html('');
            $('.reset_btn').click();
        });
        $("#myModal").on("hidden.bs.modal", function () {
            $('.statusMsg').html('');
            $('.reset_btn').click();
        });
    
        $('.card-link').click(function (e) {
           
            modalTitle = $(this).parents('.card').find('.card-title').text();
            $('.modal-title').text(modalTitle);
            $('#fld_name').val(modalTitle);
            ('.statusMsg').html('');
        });
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
                
            //   setTimeout(function(){
            //       $('.statusMsg').html('');
            //   },3000);
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