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

    <title>Services</title>
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
  .custom-button {
            background: none !important;
            box-shadow: none !important
        }
    </style>
</head>

<body>
        <?php include('navbar.php'); ?>
        <!-- <div class="container col-md-12 mt-2">
            <img src="assests/shutterstock-324782423.jpg" srcset="assests/shutterstock-324782423@2x.jpg 2x,assests/shutterstock-324782423@3x.jpg 3x"
                class="shutterstock_324782423" style="width:100%;height: 14.9%;">
            <div class="centered">
                <h4 class="heading white_color banner_heading">Services</h4>
                <div class="banner_size">
                    <p class="white_color banner_content">We have a unique depth in our services that differentiates
                        us. We are curious. We look at every opportunity as a potential problem to solve. We grow our
                        talent infront-end, middleware, and back-end technologies that we feel are appropriate. We can
                        support our customer’s requirements across delivery cycle verticals such as Planning,
                        Development and Testing inclusive of Infrastructure.We have delivered training at the
                        University/ College and Corporate level in both India and the United States.
                    </p>
                </div>

            </div>
        </div> -->
        <div class="container-fluid mt-1 ml-2 col-md-12">
            <div class="item">
                <img src="assests/shutterstock-324782423.jpg" srcset="assests/shutterstock-324782423@2x.jpg 2x,assests/shutterstock-324782423@3x.jpg 3x"
                    class="shutterstock_324782423" style="width:100%;height: 14.9%;">
                <div class="text_wrapper text-block centered">

                    <h2 class="item--title ml_38 white_color banner_heading">Services</h2>
                    <p class="item--text white_color banner_content">We have a unique depth in our services that
                        differentiates
                        us. We are curious. We look at every opportunity as a potential problem to solve. We grow our
                        talent infront-end, middleware, and back-end technologies that we feel are appropriate. We can
                        support our customer’s requirements across delivery cycle verticals such as Planning,
                        Development and Testing inclusive of Infrastructure.We have delivered training at the
                        University/ College and Corporate level in both India and the United States.</p>

                </div>
            </div>
        </div>
        <div class="row mt-5 col-md-12 col-sm-12 col-lg-12">
            <div class="col-md-5">
                <img src="assests/shutterstock-331398086.png" srcset="assests/shutterstock-331398086@2x.png 2x,assests/shutterstock-331398086@3x.png 3x"
                    class="solutions_image">
            </div>
            <div class="col-md-5 col-sm-5 col-lg-5 ml-auto">
                <h5 class="services_heading">Business Intelligence & Analytics</h5>
                <p class="card-text services_content_body">RapidQube has the capability to provide solutions in
                    best-in-class Business Intelligence (BI) & visualization commercial off-the-shelf (COTS)
                    products. Our development team can transform any desktop view into a mobile view as
                    required.
                    Mobility access for people on the move enhances quicker decision making.</p>
                
                <p class="card-text services_content_body">With the advent of "Internet of everything" and the
                    subsequent exponential explosion of data, it has become a “front and center” imperative for
                    organizations to derive more meaningful information and generate actionable insights from
                    data
                    collected. Data driven decisions need to create sustainable business impact.</p>
                <div class="row">
                    <h5>&nbsp;Our&nbsp;services&nbsp;range&nbsp;across&nbsp;the&nbsp;following&nbsp;areas&nbsp;of&nbsp;Analytics:</h5>
                </div>
               
                <div class="row mt-2">
                    <div class="col">
                        <img src="assests/services/group-5.png" srcset="assests/services/group-5@2x.png 2x,assests/services/group-5@3x.png 3x"
                            class="Group-5">
                        <span class="  services_content_body"> Predictive </span>
                    </div>
                    <div class="col">
                        <img src="assests/services/group-7.png" srcset="assests/services/group-6@2x.png 2x,assests/services/group-6@3x.png 3x"
                            class="Group-5">
                        <span class=" services_content_body"> Diagnostic </span>
                    </div>
                    <div class="col">
                        <img src="assests/services/group-6.png" srcset="assests/services/group-7@2x.png 2x,assests/services/group-7@3x.png 3x"
                            class="Group-5">
                        <span class=" services_content_body"> Descriptive </span>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <img src="assests/services/group-8.png" srcset="assests/services/group-8@2x.png 2x,assests/services/group-8@3x.png 3x"
                            class="Group-5">
                        <span class="  services_content_body"> Prescriptive </span>
                    </div>
                    <div class="col">
                        <img src="assests/services/group-9.png" srcset="assests/services/group-9@2x.png 2x,assests/services/group-9@3x.png 3x"
                            class="Group-5">
                        <span class=" services_content_body">Search-based </span>
                    </div>
                    <div class="col">
                        
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="row mt-5 col-md-12 col-sm-12 col-lg-12">
            <div class="col-md-5 col-sm-5 col-lg-5 pt_6 ">
                <h5 class="services_heading">Business Consulting</h5>
                <p class="card-text services_content_body mt-4">Our leadership team possesses a unique blend of
                    real-world experience. We will ensure that BOTH the people and technology changes needed
                    for
                    business transformation are identified and shared.</p>
               
                <p class="card-text services_content_body">Using our expertise, we will help define both “the
                    tactical and strategic” using synergistic change management programs to address both.
                </p>
                <p class="card-text services_content_body"> We will look across the business, technology, and
                    customer ecosystems at all the underlying
                    components (people, digital technologies, business processes, and tools) to understand and
                    recommend appropriate strategies and tactics (leveraging digital technologies) to succeed.
                </p>
            </div>
            <div class="col-md-5 ml-auto">
                <img src="assests/shutterstock-331398086-copy.png" srcset="assests/shutterstock-331398086-copy@2x.png 2x,assests/shutterstock-331398086-copy@3x.png 3x"
                    class="solutions_image">
            </div>
        </div>

        <div class="row col-md-12 col-sm-12 col-lg-12">
                <div class="col-md-5 col-sm-5 col-lg-5">
                        <img src="assests/shutterstock-331398086-copy-2.jpg" srcset="assests/shutterstock-331398086-copy-2@2x.png 2x,assests/shutterstock-331398086-copy-2@3x.png 3x"
                                        class="solutions_image">
                </div>
    
                <div class="col-md-5 col-sm-5 col-lg-5 ml-auto mt-5 pt_6">
                    <h5 class="services_heading">Technology Consulting</h5>
                    <p class="card-text services_content_body mt-4">In the new digital economy, we assist
                        organizations
                        across industry verticals to adapt. We help them look at potentially disruptive next-gen
                        technologies such as Robotic Process Automation (RPA), Blockchain, the Internet of Things
                        (IoT), and Machine Learning to consider. Our services are designed to ensure security and
                        efficiency of IT environments and operations, which in turn reduces the risk of loss,
                        improves
                        overall business performance as well as address any required compliance with data
                        regulations
                        in the respective industry.</p>
                    <br>
                    
                </div>
        </div>

        <div class="row mt-5 col-md-12 col-sm-12 col-lg-12">
            
                <div class="col-md-6 col-sm-6 col-lg-6 pt_6">
                    <h5 class="services_heading">Infrastructure Management</h5>
                    <p class="card-text services_content_body mt-4">The ongoing digital disruptions across industries
                            has
                            given rise to a new, hybrid infrastructure approach to environments that requires
                            significant
                            expertise to sort out. Without a clear path, environments can become overly complex and not
                            business focused. We feel that enterprises’ need a single version of truth across their
                            technology and application landscape. Our next generation infrastructure management
                            services
                            including RapidQube's Cloud-First strategy.</p>
                    <br>
                    <div class="row">
                            <h5>&nbsp;Infrastructure&nbsp;Management&nbsp;service&nbsp;portfolio&nbsp; includes:&nbsp;</h5>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                                <img src="assests/group-10.png" srcset="assests/group-10@2x.png 2x,assests/group-10@3x.png 3x"
                                class="Group-5">
                            <span class="services_content_body">Service&nbsp;desk</span>
                        </div>
                        <div class="col">
                                <img src="assests/services/group-12.png" srcset="assests/services/group-12@2x.png 2x,assests/services/group-12@3x.png 3x"
                                class="Group-5">
                            <span class="services_content_body">Cloud&nbsp;Services</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                            <div class="col">
                                    <img src="assests/services/group-11.png" srcset="assests/services/group-11@2x.png 2x,assests/services/group-11@3x.png 3x"
                                      class="Group-5">
                                <span class="services_content_body">Enterprise&nbsp;Network&nbsp;Services&nbsp;</span>
                            </div>
                            <div class="col">
                                    <img src="assests/services/group-13.png" srcset="assests/services/group-13@2x.png 2x,assests/services/group-13@3x.png 3x"
                                    class="Group-5">
                                <span class="services_content_body">System&nbsp;Integration&nbsp;Services</span>
                            </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                                <img src="assests/services/group-14.png" srcset="assests/services/group-14@2x.png 2x,assests/services/group-14@3x.png 3x"
                                class="Group-5">
                            <span class="ml-1 services_content_body">Infrastructure&nbsp;Engineering&nbsp;Services</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-2 col-sm-2 col-lg-2">
                        <img src="assests/services/shutterstock-331398086-copy-3.png" srcset="assests/shutterstock-331398086-copy-3@2x.png 2x,assests/shutterstock-331398086-copy-3@3x.png 3x"
                        class="solutions_image">
                </div>
    </div>

    <div class="row col-md-12 col-sm-12 col-lg-12">
            <div class="col-md-5 col-sm-5 col-lg-5">
                    <img src="assests/services/shutterstock-331398086-copy-4.png" srcset="assests/shutterstock-331398086-copy-4@2x.png 2x,assests/shutterstock-331398086-copy-4@3x.png 3x"
                    class="solutions_image">
            </div>
    
            <div class="col-md-5 col-sm-5 col-lg-5 ml-auto">
                <h5 class="services_heading">Education</h5>
                <p class="card-text services_content_body mt-4">We feel that as technologies change, the
                    approach
                    towards education also needs to change.</p>
               
                <p class="card-text services_content_body mt-4">RapidQube has delivered Fortune 500 (India/
                    Webinar), IIT Bombay (India), and Connecticut (UCONN, CCSU) University level blockchain
                    educational sessions (not for credit) to date. Our goal is to spread the word about the
                    technology, its capabilities, and ensure that colleges, universities, and global businesses
                    are
                    benefitting from it.</p>
               
                <p class="card-text services_content_body mt-4">We hosted over 200 hours of industry specific
                    Use
                    Case/ solution discussions. Each of these sessions required research, development, and
                    presentation specific fine-tuning to ensure that the message was appropriate.</p>
            </div>
        </div>
        <div class="row mt-5 col-md-12 col-sm-12 col-lg-12">
            <div class="col-md-2 col-sm-2 col-lg-2">
                    <img src="assests/services/group-5-copy-4.png" srcset="assests/services/group-5-copy-4@2x.png 2x,
                    assests/services/group-5-copy-4@3x.png 3x"
                    class="Group-5-Copy-4" style="margin-left:-22.9%;margin-top: 58%;">  
            </div>
            <div class="col">
                    <ul style=" list-style: none;">
                            <li class="mt-3"><img src="assests/services/group-15.png" srcset="assests/services/group-15@2x.png 2x,assests/services/group-15@3x.png 3x"
                                    class="Group-5">
                                <span class=" ml-3 services_content_body"> Help You Define Blockchain Technology In Your
                                    Own
                                    Words </span>
                            </li>
                            <li class="mt-3"><img src="assests/services/group-16.png" srcset="assests/services/group-16@2x.png 2x,assests/services/group-16@3x.png 3x"
                                    class="Group-5">
                                <span class=" ml-3 services_content_body">Understand How Blockchain Could Potentially
                                    Impact
                                    Your Business And Industry</span>
                            </li>
                            <li class="mt-3"><img src="assests/services/group-17.png" srcset="assests/services/group-17@2x.png 2x,assests/services/group-17@3x.png 3x"
                                    class="Group-5">
                                <span class=" ml-3 services_content_body"> Write A Thought Leadership Piece Regarding Use
                                    Cases
                                    And Industry Potential Of Blockchain
                                    &nbsp;Technology</span>
                            </li>
                            <li class="mt-3"><img src="assests/services/group-18.png" srcset="assests/services/group-18@2x.png 2x,assests/services/group-18@3x.png 3x"
                                    class="Group-5">
                                <span class=" ml-3 services_content_body">Explain Blockchain Technology To Your Clients,
                                    Friends, Business Colleagues </span>
                            </li>
                            <li class="mt-3"><img src="assests/services/group-19.png" srcset="assests/services/group-19@2x.png 2x,assests/services/group-19@3x.png 3x"
                                    class="Group-5">
                                <span class=" ml-3 services_content_body"> Identify Which Aspects Of Blockchain Technology
                                    Seem
                                    Most Important To You And Why </span>
                            </li>
                        </ul>   
            </div>
            
        </div>
        

        
      
































</body>

</html>