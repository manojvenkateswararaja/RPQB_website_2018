<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <!--fontawesome incorporated-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!--open sans font loading-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- social Media Buttons -->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
    <link rel="stylesheet" href="./css/app.css">
    <title>RapidQube-Undermaintenance</title>
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

.undermaintenance{
    margin-left: 300px;
    margin-top: 144px;

  }

            /* End of Regista=ration Form Modal */
            </style>
</head>

<body>
        <?php include('nav.php'); ?>
        <div class="container">
  <div class="row">
    <div class="col-md-6 undermaintenance" >
      <div class="error-template">
        <!-- <h1>:) Oops!</h1> -->
        <h2>Temporarily down for maintenance</h2>
        <h1>We’ll be back soon!</h1>
        <div>
          <p>
            Sorry for the inconvenience but we’re performing some maintenance at
            the moment. we’ll be back online shortly!
          </p>
          <p>— RapidQube Digital Solutions Pvt Ltd</p>
        </div>
        <div class="error-actions">
          <a
            href="landingpage.php"
            style="margin-top: 10px;"
            class="btn btn-info btn-lg"
            ><span class="glyphicon glyphicon-home"> </span>Take Me Home
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <!-- <svg
        class="svg-box"
        width="380px"
        height="500px"
        viewbox="0 0 837 1045"
        version="1.1"
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        xmlns:sketch="http://www.bohemiancoding.com/sketch/ns"
      >
        <g
          id="Page-1"
          stroke="none"
          stroke-width="1"
          fill="none"
          fill-rule="evenodd"
          sketch:type="MSPage"
        >
          <path
            d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z"
            id="Polygon-1"
            stroke="#3bafda"
            stroke-width="6"
            sketch:type="MSShapeGroup"
          ></path>
          <path
            d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z"
            id="Polygon-2"
            stroke="#7266ba"
            stroke-width="6"
            sketch:type="MSShapeGroup"
          ></path>
          <path
            d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z"
            id="Polygon-3"
            stroke="#f76397"
            stroke-width="6"
            sketch:type="MSShapeGroup"
          ></path>
          <path
            d="M639,529 L773,607.846761 L773,763.091627 L639,839 L505,763.091627 L505,607.846761 L639,529 Z"
            id="Polygon-4"
            stroke="#00b19d"
            stroke-width="6"
            sketch:type="MSShapeGroup"
          ></path>
          <path
            d="M281,801 L383,861.025276 L383,979.21169 L281,1037 L179,979.21169 L179,861.025276 L281,801 Z"
            id="Polygon-5"
            stroke="#ffaa00"
            stroke-width="6"
            sketch:type="MSShapeGroup"
          ></path>
        </g>
      </svg> -->
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