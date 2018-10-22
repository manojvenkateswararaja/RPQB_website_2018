<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/app.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <title>Contact Us</title>
    <style>
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
    </style>
</head>

<body>
    <?php include('navbar.php'); ?>
    <div class="container heading pnSB mt-5 pl-5">
        Contact Us
    </div>
    <div class="row container mt-5">
            <div class="col mt-3 ml-5">
                    <ul class="tabs" style="list-style: none; ">
                            <button type="button" class="btn btn-link">
                                <li class="active smallheading" rel="#state2">Mumbai</li>
                            </button>
                            <br>
                            <button type="button" class="btn btn-link">
                                <li class="smallheading" rel="#state1">Chennai</li>
        
                            </button>
                    </ul>
            </div>
            <div class="col-md-9 ml-5 tab_container  shadowEffect">
                    <h3 class="tab_drawer_heading city_name pnL" rel="#state2" role="tab">Mumbai</h3>
                    <div class="tab_content" id="state2">
                        <div class="row">
                            <div class="col mt-3">
                                    <span class="city_office_name pnSB  ml-5">Mumbai Office</span>
                                    <p class="solid_contact w_42 ml_13 mt-3"></p>
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col ml-auto">
                                    <p class="city_office_name pnSB mt-3  mr-5">OUR GLOBAL PRESENCE</p>
                                    <p class="solid_contact w_76  mt-3"></p>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4">
                                        <ul class="mt-3 city_address" style="list-style: none;padding-left: 1px;">
                                        
                                                <li class="pnL" >No,&nbsp;415,&nbsp;Fourth&nbsp;Floor,</li>
                 
                                                <li class="pnL" >The&nbsp;Corporate&nbsp;Phase&nbsp;1</li>
                 
                                                <li class="pnL" >Nirmal&nbsp;Lifestyle,&nbsp;L.B.S&nbsp;Marg,</li>
                 
                                                <li class="pnL" >Mulund(West),&nbsp;Mumbai</li>
                 
                                                <li class="pnL" >&nbsp;Maharashtra&nbsp;-&nbsp;400080.&nbsp;</li>
                 
                                                <li class="pnL" >&nbsp;+91-22&nbsp;2567&nbsp;3235&nbsp;</li>
                                                 <button type="button" class="btn btn-link">
                                                    <li class="pnSB">info@rapidqube.com</li>
                                                 </button>
                                        </ul>
                                </div>
                                <div class="col-md-1"></div>
                                <div class="col-md-4">
                                        <img src="./assests/mumbai.png" alt="location lc_mumbai image" class="locationtabs_img map ml_-35">
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    <h3 class="tab_drawer_heading city_name pnL" rel="#state1" role="tab">Chennai</h3>
                    <div class="tab_content" id="state1">
                            <div class="row">
                                    <div class="col mt-3">
                                            <span class="city_office_name pnSB  ml-5">Chennai Office</span>
                                            <p class="solid_contact w_42 ml_13 mt-3"></p>
                                    </div>
                                    <div class="col-md-1"></div>
                                    <div class="col ml-auto">
                                            <p class="city_office_name pnSB mt-3  mr-5">OUR GLOBAL PRESENCE</p>
                                            <p class="solid_contact w_76  mt-3"></p>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4">
                                                <ul class="mt-3 city_address" style="list-style: none;padding-left: 1px;">
                                                
                                                        <li class="pnL" >Tek&nbsp;Towers,11,Rajiv&nbsp;Gandhi&nbsp;IT</li>
                         
                                                        <li class="pnL" >Expressway,&nbsp;Mettukuppam,&nbsp;</li>
                         
                                                        <li class="pnL" >Okkiyam&nbsp;Thoraipakkam,&nbsp;</li>
                         
                                                        <li class="pnL" >Chennai,&nbsp;Tamil&nbsp;Nadu&nbsp;-&nbsp;600097.</li>
                         
                                                        <li class="pnL" >+91-22&nbsp;2567&nbsp;3235&nbsp;</li>
                                                         <button type="button" class="btn btn-link">
                                                            <li class="pnSB">info@rapidqube.com</li>
                                                         </button>
                                                </ul>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-4">
                                                <img src="./assests/Chennai.png" alt="location lc_mumbai image" class="locationtabs_img map ml_-35">
                                        </div>
                                    </div>
                        </div>
                    </div>
        
                    
            </div>
            
           </div>

    <!-- Modal Content -->
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
        $(".tab_content").hide();   
        $(".tab_content:first").show();

        $("ul.tabs li").click(function () {
            console.log("test");
            $(".tab_content").hide();
            var activeTab = $(this).attr("rel");
            console.log(activeTab);
            $(activeTab).fadeIn();
            $("ul.tabs li").removeClass("active");
            $(this).addClass("active");
            $(".tab_drawer_heading").removeClass("d_active");
            $(".tab_drawer_heading[rel^='" + activeTab + "']").addClass("d_active");

            /*$(".tabs").css("margin-top", function(){ 
                return ($(".tab_container").outerHeight() - $(".tabs").outerHeight() ) / 2;
            });*/
        });
        $(".tab_drawer_heading").click(function () {
            $(".tab_content").hide();
            var d_activeTab = $(this).attr("rel");
            $("#" + d_activeTab).fadeIn();
            $(".tab_drawer_heading").removeClass("d_active");
            $(this).addClass("d_active");
            $("ul.tabs li").removeClass("active");
            $("ul.tabs li[rel^='" + d_activeTab + "']").addClass("active");
        });

        $(".tab_container").css("min-height", function () {
            return $(".tabs").outerHeight() + 50;
        });
    </script>
</body>

</html>