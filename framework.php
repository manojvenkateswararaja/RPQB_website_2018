<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <!--fontawesome incorporated-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--open sans font loading-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- social Media Buttons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>RapidQube-Solutions</title>
    <style>
        .reset_btn {
	font-size: 0px;
	border: none;
	outline: none;
	padding: 0px;
}
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
            /* End of Regista=ration Form Modal */
            </style>
</head>

<body>
        <?php include('navbar.php'); ?>
        <div class="container mt-1 col-md-12">
            <div class="item">
                <img src="assests/frame.jpeg" srcset="assests/frame.jpeg"
                    class="shutterstock_324782423" style="width:100%;height: 548px;">
                <div class="text_wrapper text-block centered">

                    <h2 class="item--title ml_38 white_color banner_heading">Frameworks</h2>
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
    <div class="col-md-12" id="framework">
        <div class="m-5 heading">
            FrameWorks
        </div>
        <div class="m-5 container col-md-12 row">
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Identity</h5>
                    <p class="card-text Solutions_content_body">Digitizes and manages identity of individuals,
                        organizations and physical real world assets.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Trade Finance</h5>
                    <p class="card-text Solutions_content_body">Simplifies management, tracking and securing of trade
                        transactions from order to payment.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Health Records</h5>
                    <p class="card-text Solutions_content_body">An access control framework that ensures privacy of
                        health record.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
        </div>
        <div class="m-5 container col-md-12 row">
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Legal</h5>
                    <p class="card-text Solutions_content_body">Framework that ensures ownership of assets.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Lending</h5>
                    <p class="card-text Solutions_content_body">A common framework that facilitates reward model,
                        equity model, lending model etc. of crowd funding.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Insurance</h5>
                    <p class="card-text Solutions_content_body">Facilitates a live digital access across the value
                        chain of insurance services.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
        </div>
        <div class="m-5 container col-md-12 row">
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Compliance</h5>
                    <p class="card-text Solutions_content_body">Facilitates immutable track of the steps required by
                        regulation.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="card col-md-3" style="width:24.4%;border:none;">
                <div class="card-body">
                    <h5 class="card-title solutions_heading">Supply Chain</h5>
                    <p class="card-text Solutions_content_body">A cost-effective and flexible model for distributed
                        supply chain network.</p>
                    <br>

                    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <img src="assests/group-8.svg" class="Group-8">
            </div>
        </div>
    </div>
    <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close video_stop" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <video id="popup_video" class="w-100" height="240" controls controlsList="nodownload">
                        <source src="assests/videos/RapidSettle.mp4" type="video/mp4">
                        <source src="movie.ogg" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>

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
              <label class="float-label regFormFonts"  for="exampleInputEmail1">Your Name</label>


            </div>
            <!-- <div class="form-group">
              <input type="text" class="form-control" name="l_name" id="l_name" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" for="exampleInputEmail1">Last Name</label>
            </div> -->
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
              <label class="float-label regFormFonts" name="country" for="exampleInputEmail1">Description</label>
            </div>
            <div class="form-group">
            <input type="hidden" name="fld_name" id="fld_name" value="Quick Enquiry">
            </div>
            <div class="modal-footer d-flex justify-content-center">
              <button type="submit" id="send_btn" name="submit" value="submit" class="btn btn-default send_btn  buttonFonts "
                style="width: 265px; height: 61px;border-radius: 8px; background-image: linear-gradient(76deg, #06cbec, #0c7bd2);">Submit</button>
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
            //   	 $('.statusMsg').html('');
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