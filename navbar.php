<html lang="en">
  <head>
    <title>RapidQube</title>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- fontawesome incorporated -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
      integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
    />
    <!-- open sans font loading -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <!-- social Media Buttons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="./css/app.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">   
        <div class="row" style="background-color: #ffffff;
                box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.13);width:100%">
            <div class="col-md-2 mb-3 img_style">
            <a href="landingpage.php"> <img src="assests/rapidqube-logo-2.png" alt="rapidqube"></a>
               
            </div>
       
            <div class="col-md-10 pad_right_0">
            <div class="row custom_margin">

<div class="col-md-8  mr-auto menuitems"></div>

 <div class="collapse navbar-collapse col-md-1" id="navbarNavAltMarkup">
    <a class="fa fa-home" href="landingpage.php"></a>
</div>
 <div class="collapse navbar-collapse col-md-1" id="navbarNavAltMarkup">
    <a class="navBarNameContactUs" href="contactus.php">Contact&nbsp;Us</a>
</div>
 <div class="collapse navbar-collapse col-md-1" id="navbarNavAltMarkup">
    <a class="navBarName pl-4 pl-2" href="undermaintance.php">Career</a>
</div>
 <div class="collapse navbar-collapse col-md-1" id="navbarNavAltMarkup">
    <a class="navBarNameBlog" href="blog.php">Blog</a>
</div>



</div>
                <div class="border"></div>
                <div class="border"></div>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <!-- <a class="navbar-brand" href="landingpage.php"> <img src="assests/rapidqube-logo-2.png" alt="rapidqube"></a> -->
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-toggle="collapse"
                      data-target="#navbarNavAltMarkup"
                      aria-controls="navbarNavAltMarkup"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <!-- <div class="navbar-nav"> -->
                          <div class="col-md-0.5"></div>
                        <!-- <a class="nav-item nav-link active" href="#">Product & Solutions<button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarNavAltMarkup"
                            aria-controls="navbarNavAltMarkup"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                          > <span class="sr-only">(current)</span></a> -->
                          
                        <a class="nav-item nav-link active" href="#">Product & Solutions </a>
                        <a class="nav-item nav-link active" href="#">White&nbsp;Papers</a>
                        <a class="nav-item nav-link active" href="#">Frameworks </a>
                        <a class="nav-item nav-link active" href="#">Services </a>
                        <a class="nav-item nav-link active" href="#">About&nbsp;Us </a>
                        <a class="nav-item nav-link active" href="#">info@rapidqube.com</a>
                        <a class="nav-item nav-link active" href="#">+91-22-2567-3235</a>
                        <!-- <a class="nav-item nav-link" href="#">Features</a>
                        <a class="nav-item nav-link" href="#">Pricing</a>
                        <a class="nav-item nav-link disabled" href="#">Disabled</a> -->
                      <!-- </div> -->
                    </div>
                  </nav>
    
            </div>
        </div>
    </div>
</nav>

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
          <form name="email_form" class="email_form" action="enquiryinserttable.php" id="email_form" method="POST" autocomplete="off">

            <div class="form-group">
              <input type="email" class="form-control" name="email"  id="email">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"   for="exampleInputEmail1">Your Email</label>

            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="f_name" id="f_name">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"  for="exampleInputEmail1">Your Name</label>


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
              <input type="text" class="form-control" name="details" id="details" id="exampleInputEmail1">
              
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" name="details" for="exampleInputEmail1">Description</label>
            </div>
            <div class="form-group">
            <input type="hidden" name="fld_name" id="fld_name" value="Quick Enquiry">
            </div>
            <div class="modal-footer d-flex justify-content-center">
           
              <button  type="submit" id="send_btn" name="submit"  value="submit" class="btn btn-default send_btn  buttonFonts "
                style="width: 265px; height: 61px;border-radius: 8px; background-image: linear-gradient(76deg, #06cbec, #0c7bd2);">Submit</button>
              <input type="reset" name="" class="reset_btn">
            </div>
            <!-- <a href="whitepaper.php">Link</a> -->
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

<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
  <!-- Modal Header -->
  <div class="modal-header">
          <h4 class="modal-title w-100 heading">Registration</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body modal-guts">
          <form name="email_form" class="email_form" action="connectsql.php" id="email_form" method="POST" autocomplete="off">

            <div class="form-group">
              <input type="email" class="form-control" name="email"  id="email">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"   for="exampleInputEmail1">Name</label>

            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="f_name" id="f_name">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts"  for="exampleInputEmail1">Current Profession</label>


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
              <label class="float-label regFormFonts" name="phone" for="exampleInputEmail1">Program Duration  and Structure</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="details" id="details" id="exampleInputEmail1">
              
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              <label class="float-label regFormFonts" name="details" for="exampleInputEmail1">What is your expectation with the course?</label>
            </div>
            <div class="form-group">
            <input type="hidden" name="fld_name" id="fld_name" value="Quick Enquiry">
            </div>
            <div class="modal-footer d-flex justify-content-center">
           
              <button  type="submit" id="send_btn" name="submit"  value="submit" class="btn btn-default send_btn  buttonFonts "
                style="width: 265px; height: 61px;border-radius: 8px; background-image: linear-gradient(76deg, #06cbec, #0c7bd2);">Pay Now >></button>
              <input type="reset" name="" class="reset_btn">
            </div>
            <!-- <a href="whitepaper.php">Link</a> -->
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


<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/slick.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js" type="text/javascript"></script>
