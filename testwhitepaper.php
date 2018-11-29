<!DOCTYPE html>
<html lang="en">
<head>
  <title>Whitepapers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
  .bg-overlay{
  background-image: url("./assests/whitepaper1.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  color: #fff;
  width:100%;
  height: 450px;
  padding-top: 50px;
}
  </style>
</head>
<body>
<?php include('test.php'); ?>

  <div class="container bg-overlay">
<br>
<br>
<br>
<br>
  <div class=" text-center">
  <h1><b>Whitepapers<b></h1>
</div>
</div>

<div class="container">

  <div class="row">
    <div class="col-sm-4">
      <h3>Off-Chain Smart Contract</h3>
      <p>Smart Contracts should surpass their limitations and
                        evolve to changing architectural standards that are needed for blockchains to scale
                        significantly while retaining their decentralized principles.</p>
                        <p>Presented at 13th International Conference on
                        Information Systems Security 2017 | IIT Mumbai, India.</p>
     <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
    </div>
    <div class="col-sm-4">
    <h3>Connected Health</h3>
      <p>Development of fundamental design changes for
                        Electronic Health Records (EHRs) and Patient Health Records (PHRs) has been constrained
                        traditionally through a longstanding focus on compliance.</p>
                        <p>Presented at 13th International Conference on
                        Information Systems Security 2017 | IIT Mumbai, India.</p>
       <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
    </div>
    <div class="col-sm-4">
    <h3>GDPR Architecture</h3>        
      <p>The General Data Protection Regulation (GDPR) regulates
                        the export of personal data outside the EU. The regulation has provisions for individual
                        control over one’s own data that includes many rights to the individual to manage personal data
                        -access, consent, removal, portability and minimization.</p>
<p>It becomes enforceable from 25 May 2018 after a
                        two-year transition period.</p>
    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
    </div>
  </div>
</div>
<br>
 <br/>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
    <h3>Real Estate Solution</h3>        
      <p>Financial-Settlement Speed, Payment Automation,
                        Contract Enforceability, Dispute Reduction, Cash Flow Improvements.</p>
                        <p>Expense Reduction-Legal, Payment Automation, Dispute
                        Reduction, Cash Flow Improvements.</p>
    <a data-toggle="modal" href="#" data-target="#myModal" class="card-link">Explore more ----></a>
    </div>
    <div class="col-md-4"></div>
            <div class="col-sm-4">
                <img src="assests/group-6.svg" class="img-responsive">
           
        </div>
  </div>
</div>
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

</body>
</html>
