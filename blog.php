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
    <title>Blog</title>
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
    <div class="container-fluid">
        <?php include('navbar.php'); ?>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 ml-auto">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
           
                            <div class="carousel-inner">
                                    <div class="heading mt-5 ml-5"> Blog </div>
                              <div class="carousel-item active">
                                <!-- <img class="d-block w-100" src=".../800x400?auto=yes&bg=777&fg=555&text=First slide" alt="First slide"> -->
                                <div class="row container mt-5 col-md-12"  alt="First slide">
                                        <div class="col-md-5">
                                                <img src="./assests/blockchain_healthcare.jpg" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain in Health Care</p>
                                                <div class="container-fluid ">
                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                focusing on next generation, disruptive technology
                                                                solutions leveraging a range of blockchain platforms
                                                                and the associated front-end, middleware and back-end technologies that
                                                                bring a
                                                                complete blockchain ecosystem to life. We are global by design. Our main
                                                                office is in
                                                                Mumbai along with an architecture hub & development center in Chennai. We
                                                                also have
                                                                sales and business development offices in Connecticut and New Jersey
                                                            </p>
                                                </div>
                                                <button class="btn  btn-link ml_67" type="button" data-toggle="collapse" data-target="#blog1"
                                                aria-expanded="false" aria-controls="blog1">
                                                <img src="/assests/group-19.svg">
                                            </button>
                                            <div class="collapse container-fluid" id="blog1">
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        That raises the question of how Blockchain can be a selling point to
                                                        5million users when the awareness about this emerging technology is
                                                        just happening and more importantly, what is the USP of availing global
                                                        health care services (or any other service) from a BlockChain
                                                        application?</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        Is BlockChain going to be a mere data repository of live data with some
                                                        high degree of security & protection or will it remain as a reference
                                                        point only or would such Blockchain applications truly allow the user
                                                        to do a real-time transaction wherein s/he can witness the process and
                                                        all the stakeholders accord their concurrence & acceptance to the
                                                        success of the transaction? These are questions that need to be
                                                        answered for a wider adoption of Blockchain as a technology backbone in
                                                        corporate applications.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        So, from a corporate sector view of the adoption of Blockchain, the
                                                        challenge is to convince the sector on the added layers of security the
                                                        technology brings in and the suitability of adoption of Blockchain for
                                                        specific areas of business which can not only add security but can help
                                           W             in elevating the end user experience.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        Here in India, the Central Government and most of the State Governments
                                                        are promoting BlockChain Technology among various Govt establishments &
                                                        departments but there seem to be a lack of awareness on the
                                                        possibilities of this technology. The concern for them is that this
                                                        technology is something very new, something which is not proven and
                                                        validated internationally and have to show the credentials of being the
                                                        securest way to store and access data. So, the need is for a clearer
                                                        and transparent IT Strategy on adoption of Blockchain and educate the
                                                        users on the benefits of the same.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        As a proponent of the capabilities of Blockchain and RapidQube, I can
                                                        request the readers of my views to visit www.rapidqube.com to
                                                        experience a broader overview of BlockChain Technology along with
                                                        validated Use Cases and Tested Applications. Do reach out to us in case
                                                        of queries.
                                                        <button class="btn  btn-link mr_67" type="button" data-toggle="collapse"
                                                        data-target="#blog1" aria-expanded="false" aria-controls="blog1">
                                                        Explore Less ---->
                                                    </button>
                                                    </p>
                                
                                                </div>
                                                
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5 ml-auto">
                                                <img src="./assests/Blockchain-Technology_pic.png" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain technology  in 2018</p>
                                                                    <div class="container-fluid">
                                                                        <!-- <h5 class="card-title">Card title</h5> -->
                                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                            RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                            focusing on next generation, disruptive technology
                                                                            solutions leveraging a range of blockchain platforms
                                                                            and the associated front-end, middleware and back-end technologies that
                                                                            bring a
                                                                            complete blockchain ecosystem to life. We are global by design. Our main
                                                                            office is in
                                                                            Mumbai along with an architecture hub & development center in Chennai. We
                                                                            also have
                                                                            sales and business development offices in Connecticut and New Jersey
                                                                        </p>
                                                                        <button class="btn  btn-link mr_67" type="button" data-toggle="collapse" data-target="#blog2"
                                                                            aria-expanded="false" aria-controls="blog2">
                                                                            <img src="/assests/group-19.svg">
                                                                        </button>
                                                                        <div class="collapse" id="blog2">
                                                                            <p style="text-align: justify;" class="smallheading pnR">
                                                                                We have existing intellectual as well as personal relationships with
                                                                                known “thought
                                                                                leaders” at IIT Bombay and MS University of Baroda. We regularly
                                                                                collaborate with
                                                                                them to better understand how we can help organizations across
                                                                                industries adapt to
                                                                                the digital shift through robust use of analytics, rapid solution
                                                                                product
                                                                                development, and reduced time-to-market and total cost of ownership.
                                                                                Our leadership team and advisors consist of experienced global IT
                                                                                services and
                                                                                solutions executives that are well versed in today’s dynamic IT
                                                                                environment. Our
                                                                                goal is to continue to push the boundaries of the blockchain ecosystem
                                                                                across
                                                                                varied business verticals as well as enhance existing business
                                                                                solutions.
                                                                                <button class="btn  btn-link mr_67" type="button" data-toggle="collapse"
                                                                                    data-target="#blog2" aria-expanded="false" aria-controls="blog2">
                                                                                    Explore Less ---->
                                                                                </button>
                                                                            </p>
                                
                                                                        </div>
                                                                    </div>
                                        </div>
                                        <div class="col">
                                
                                        </div>
                                    </div>
                
                              </div>
                              <div class="carousel-item">
                                <!-- <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide"> -->
                                <div class="row container mt-5 col-md-12"  alt="Second slide">
                                        <div class="col-md-5">
                                                <img src="./assests/blockchain_healthcare.jpg" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain in Health Care</p>
                                                <div class="container-fluid mt-4">
                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                focusing on next generation, disruptive technology
                                                                solutions leveraging a range of blockchain platforms
                                                                and the associated front-end, middleware and back-end technologies that
                                                                bring a
                                                                complete blockchain ecosystem to life. We are global by design. Our main
                                                                office is in
                                                                Mumbai along with an architecture hub & development center in Chennai. We
                                                                also have
                                                                sales and business development offices in Connecticut and New Jersey
                                                            </p>
                                                </div>
                                                <button class="btn  btn-link ml_67" type="button" data-toggle="collapse" data-target="#blog3"
                                                aria-expanded="false" aria-controls="blog3">
                                                <img src="/assests/group-19.svg">
                                            </button>
                                            <div class="collapse container-fluid" id="blog3">
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        That raises the question of how Blockchain can be a selling point to
                                                        5million users when the awareness about this emerging technology is
                                                        just happening and more importantly, what is the USP of availing global
                                                        health care services (or any other service) from a BlockChain
                                                        application?</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        Is BlockChain going to be a mere data repository of live data with some
                                                        high degree of security & protection or will it remain as a reference
                                                        point only or would such Blockchain applications truly allow the user
                                                        to do a real-time transaction wherein s/he can witness the process and
                                                        all the stakeholders accord their concurrence & acceptance to the
                                                        success of the transaction? These are questions that need to be
                                                        answered for a wider adoption of Blockchain as a technology backbone in
                                                        corporate applications.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        So, from a corporate sector view of the adoption of Blockchain, the
                                                        challenge is to convince the sector on the added layers of security the
                                                        technology brings in and the suitability of adoption of Blockchain for
                                                        specific areas of business which can not only add security but can help
                                                        in elevating the end user experience.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        Here in India, the Central Government and most of the State Governments
                                                        are promoting BlockChain Technology among various Govt establishments &
                                                        departments but there seem to be a lack of awareness on the
                                                        possibilities of this technology. The concern for them is that this
                                                        technology is something very new, something which is not proven and
                                                        validated internationally and have to show the credentials of being the
                                                        securest way to store and access data. So, the need is for a clearer
                                                        and transparent IT Strategy on adoption of Blockchain and educate the
                                                        users on the benefits of the same.</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        As a proponent of the capabilities of Blockchain and RapidQube, I can
                                                        request the readers of my views to visit www.rapidqube.com to
                                                        experience a broader overview of BlockChain Technology along with
                                                        validated Use Cases and Tested Applications. Do reach out to us in case
                                                        of queries.
                                                        <button class="btn  btn-link ml_67" type="button" data-toggle="collapse"
                                                        data-target="#blog3" aria-expanded="false" aria-controls="blog3">
                                                        Explore Less ---->
                                                    </button>
                                                    </p>
                                
                                                </div>
                                                
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5 ml-auto">
                                                <img src="./assests/Blockchain-Technology_pic.png" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain technology  in 2018</p>
                                                                    <div class="container-fluid">
                                                                        <!-- <h5 class="card-title">Card title</h5> -->
                                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                            RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                            focusing on next generation, disruptive technology
                                                                            solutions leveraging a range of blockchain platforms
                                                                            and the associated front-end, middleware and back-end technologies that
                                                                            bring a
                                                                            complete blockchain ecosystem to life. We are global by design. Our main
                                                                            office is in
                                                                            Mumbai along with an architecture hub & development center in Chennai. We
                                                                            also have
                                                                            sales and business development offices in Connecticut and New Jersey
                                                                        </p>
                                                                        <button class="btn  btn-link mr_67" type="button" data-toggle="collapse" data-target="#blog4"
                                                                            aria-expanded="false" aria-controls="blog4">
                                                                            <img src="/assests/group-19.svg">
                                                                        </button>
                                                                        <div class="collapse" id="blog4">
                                                                            <p style="text-align: justify;" class="smallheading pnR">
                                                                                We have existing intellectual as well as personal relationships with
                                                                                known “thought
                                                                                leaders” at IIT Bombay and MS University of Baroda. We regularly
                                                                                collaborate with
                                                                                them to better understand how we can help organizations across
                                                                                industries adapt to
                                                                                the digital shift through robust use of analytics, rapid solution
                                                                                product
                                                                                development, and reduced time-to-market and total cost of ownership.
                                                                                Our leadership team and advisors consist of experienced global IT
                                                                                services and
                                                                                solutions executives that are well versed in today’s dynamic IT
                                                                                environment. Our
                                                                                goal is to continue to push the boundaries of the blockchain ecosystem
                                                                                across
                                                                                varied business verticals as well as enhance existing business
                                                                                solutions.
                                                                                <button class="btn  btn-link mr_67" type="button" data-toggle="collapse"
                                                                                    data-target="#blog4" aria-expanded="false" aria-controls="blog4">
                                                                                    Explore Less ---->
                                                                                </button>
                                                                            </p>
                                
                                                                        </div>
                                                                    </div>
                                        </div>
                                        <div class="col">
                                
                                        </div>
                                    </div>
                              </div>
                              <div class="carousel-item">
                                <!-- <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide"> -->
                                <div class="row container mt-5 col-md-12"   alt="Third slide">
                                        <div class="col-md-5">
                                                <img src="./assests/blockchain_healthcare.jpg" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain in Health Care</p>
                                                <div class="container-fluid mt-4">
                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                focusing on next generation, disruptive technology
                                                                solutions leveraging a range of blockchain platforms
                                                                and the associated front-end, middleware and back-end technologies that
                                                                bring a
                                                                complete blockchain ecosystem to life. We are global by design. Our main
                                                                office is in
                                                                Mumbai along with an architecture hub & development center in Chennai. We
                                                                also have
                                                                sales and business development offices in Connecticut and New Jersey
                                                            </p>
                                                </div>
                                                <button class="btn  btn-link ml_67" type="button" data-toggle="collapse" data-target="#blog5"
                                                aria-expanded="false" aria-controls="blog5">
                                                <img src="/assests/group-19.svg">
                                            </button>
                                            <div class="collapse container-fluid" id="blog5">
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        That raises the question of how Blockchain can be a selling point to
                                                        5million users when the awareness about this emerging technology is
                                                        just happening and more importantly, what is the USP of availing global
                                                        health care services (or any other service) from a BlockChain
                                                        application?</p>
                                                    <p style="text-align: justify;" class="smallheading pnR">
                                                        Is BlockChain going to be a mere data repository of live data with some
                                                        high degree of security & protection or will it remain as a reference
                                                        point only or would such Blockchain applications truly allow the user
                                                        to do a real-time transaction wherein s/he can witness the process and
                                                        all the stakeholders accord their concurrence & acceptance to the
                                                        success of the transaction? These are questions that need to be
                                                        answered for a wider adoption of Blockchain as a technology backbone in
                                                        corporate applications.</p>
                                                    <p style="text-align: justify;" class="smallheading">
                                                        So, from a corporate sector view of the adoption of Blockchain, the
                                                        challenge is to convince the sector on the added layers of security the
                                                        technology brings in and the suitability of adoption of Blockchain for
                                                        specific areas of business which can not only add security but can help
                                                        in elevating the end user experience.</p>
                                                    <p style="text-align: justify;" class="smallheading">
                                                        Here in India, the Central Government and most of the State Governments
                                                        are promoting BlockChain Technology among various Govt establishments &
                                                        departments but there seem to be a lack of awareness on the
                                                        possibilities of this technology. The concern for them is that this
                                                        technology is something very new, something which is not proven and
                                                        validated internationally and have to show the credentials of being the
                                                        securest way to store and access data. So, the need is for a clearer
                                                        and transparent IT Strategy on adoption of Blockchain and educate the
                                                        users on the benefits of the same.</p>
                                                    <p style="text-align: justify;" class="smallheading">
                                                        As a proponent of the capabilities of Blockchain and RapidQube, I can
                                                        request the readers of my views to visit www.rapidqube.com to
                                                        experience a broader overview of BlockChain Technology along with
                                                        validated Use Cases and Tested Applications. Do reach out to us in case
                                                        of queries.
                                                        <button class="btn  btn-link ml_67" type="button" data-toggle="collapse"
                                                        data-target="#blog5" aria-expanded="false" aria-controls="blog5">
                                                        Explore Less ---->
                                                    </button>
                                                    </p>
                                
                                                </div>
                                                
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-5 ml-auto">
                                                <img src="./assests/Blockchain-Technology_pic.png" class="ml-3"
                                                alt="Card image cap" style="width:460px;height: 231px;">
                                                <p class="heading pnSB ml-3 mt-2">Blockchain technology  in 2018</p>
                                                                    <div class="container-fluid">
                                                                        <!-- <h5 class="card-title">Card title</h5> -->
                                                                        <p style="text-align: justify;" class="smallheading pnR">
                                                                            RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                            focusing on next generation, disruptive technology
                                                                            solutions leveraging a range of blockchain platforms
                                                                            and the associated front-end, middleware and back-end technologies that
                                                                            bring a
                                                                            complete blockchain ecosystem to life. We are global by design. Our main
                                                                            office is in
                                                                            Mumbai along with an architecture hub & development center in Chennai. We
                                                                            also have
                                                                            sales and business development offices in Connecticut and New Jersey
                                                                        </p>
                                                                        <button class="btn  btn-link mr_67" type="button" data-toggle="collapse" data-target="#blog6"
                                                                            aria-expanded="false" aria-controls="blog6">
                                                                            <img src="/assests/group-19.svg">
                                                                        </button>
                                                                        <div class="collapse" id="blog6">
                                                                            <p style="text-align: justify;" class="smallheading pnR">
                                                                                We have existing intellectual as well as personal relationships with
                                                                                known “thought
                                                                                leaders” at IIT Bombay and MS University of Baroda. We regularly
                                                                                collaborate with
                                                                                them to better understand how we can help organizations across
                                                                                industries adapt to
                                                                                the digital shift through robust use of analytics, rapid solution
                                                                                product
                                                                                development, and reduced time-to-market and total cost of ownership.
                                                                                Our leadership team and advisors consist of experienced global IT
                                                                                services and
                                                                                solutions executives that are well versed in today’s dynamic IT
                                                                                environment. Our
                                                                                goal is to continue to push the boundaries of the blockchain ecosystem
                                                                                across
                                                                                varied business verticals as well as enhance existing business
                                                                                solutions.
                                                                                <button class="btn  btn-link mr_67" type="button" data-toggle="collapse"
                                                                                    data-target="#blog6" aria-expanded="false" aria-controls="blog6">
                                                                                    Explore Less --- >>
                                                                                </button>
                                                                            </p>
                                
                                                                        </div>
                                                                    </div>
                                        </div>
                                        <div class="col">
                                
                                        </div>
                                    </div>
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="fa fa-angle-left mr_86" style="background-color:#ffffff;" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="fa fa-angle-right ml_86" style="background-color:#ffffff;" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
            </div>
            <div class="col-md-1">
                <img src="/assests/Blog page 2.png" class="blog_bg_image mt-5">
            </div>
        </div>
        
        
</body>

</html>