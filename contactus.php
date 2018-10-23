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
    <title>About Us</title>
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
  .business_intelligence {
    position: absolute;
    top: 83px;
    left: -24px;
    z-index: 2;
    width: 110%;
}
.Rectangle1 {
    position: absolute;
    top: 80px;
    left: -28px;
    z-index: 1;
    width: 110%;
    height: 109.9%;
}

    </style>
</head>

<body>
        <?php include('navbar.php'); ?>


    <!-- <div class="container-fluid">
        <img src="assests/shutterstock-324782423.jpg" srcset="assests/shutterstock-324782423@2x.jpg 2x,assests/shutterstock-324782423@3x.jpg 3x"
            class="shutterstock_324782423 mt-2" style="width:100%;height: 14.9%;">
        <div class="centered">
            <h4 class="heading white_color banner_heading">About us</h4>
            <p class=" banner_size smallheading white_color banner_content">We are blockchain experts. We are
                digital
                natives. We ensure that from your initial idea through to final implementation, we deliver our
                solutions leveraging “best in class” digital technology to enhance your business.</p>
        </div>
    </div> -->
    <div class="container mt-1 col-md-12">
        <div class="item">
            <img src="assests/shutterstock-324782423.jpg" srcset="assests/shutterstock-324782423@2x.jpg 2x,assests/shutterstock-324782423@3x.jpg 3x"
                class="shutterstock_324782423" style="width:100%;height: 14.9%;">
            <div class="text_wrapper text-block centered">

                <h2 class="item--title ml_38 white_color banner_heading">About&nbsp;us</h2>
                <p class="item--text white_color banner_content">We are blockchain experts. We are
                    digital
                    natives. We ensure that from your initial idea through to final implementation, we deliver our
                    solutions leveraging “best in class” digital technology to enhance your business.</p>

            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="col-md-12">
            <div class="row">
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <div class="card-body">
                        <h5 class="card-title aboutus_heading">Transforming <br>
                            Business Paradigms</h5>
                        <br>
                        <p class="card-text Solutions_content_body">RapidQube has the capability to provide solutions
                            in best-in-class Business Intelligence (BI) & visualization commercial off-the-shelf (COTS)
                            products. Our development team can transform any desktop view into a mobile view as
                            required. Mobility access for people on the move enhances quicker decision making.</p>
                        <br>
                        <p class="card-text Solutions_content_body">With the advent of "Internet of everything" and the
                            subsequent exponential explosion of data, it has become a “front and center” imperative for
                            organizations to derive more meaningful information and generate actionable insights from
                            data collected. Data driven decisions need to create sustainable business impact.</p>
                        <!-- <a href="#" class="card-link">Card link</a> -->
                        <!-- <a href="#" class="card-link">Explore more --</a> -->
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <img src="assests/rectangle.png" srcset="assests/rectangle@2x.png 2x,assests/rectangle@3x.png 3x"
                        class="Rectangle1">
                    <img src="assests/shrine-s-320180516-4-zakj-13-1.jpg" srcset="assests/shrine-s-320180516-4-zakj-13-1@2x.jpg 2x,
             assests/shrine-s-320180516-4-zakj-13-1@3x.jpg 3x"
                        class="business_intelligence">
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container-fluid" style="margin-top: 14.1%;">
        <div class="col-md-12">
            <div class="row">
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <div class="card-body">
                        <h5 class="card-title aboutus1_heading"> <img src="assests/noun-about-us-316051.svg" class="noun_about-us_316051">
                            <span>Who we are</span> </h5>

                        <br>
                        <p class="card-text Solutions_content_body">We are Digital natives. We have full stack
                            developers. The digital landscape is always a moving target. We help you stay ahead of that
                            target through our business relationships and creative minds in everything from platform
                            selection to integration to delivery and follow on consulting. We engage with thought
                            leaders from IIT and other prestigious schools in India to understand trends and best
                            practices and ensure that you benefit from that latest thinking.</p>
                        <br>
                        <!-- <p class="card-text Solutions_content_body">With the advent of "Internet of everything" and the
                                            subsequent exponential explosion of data, it has become a “front and center” imperative for
                                            organizations to derive more meaningful information and generate actionable insights from
                                            data collected. Data driven decisions need to create sustainable business impact.</p> -->
                        <!-- <a href="#" class="card-link">Card link</a> -->
                        <!-- <a href="#" class="card-link">Explore more --</a> -->
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <div class="card-body">
                        <h5 class="card-title aboutus1_heading"><img src="assests/noun-challenge-1873994.svg" class="noun_challenge_1873994">
                            <span>What we do</span> </h5>

                        <br>
                        <p class="card-text Solutions_content_body">RapidQube solves our clients' toughest challenges
                            by providing unmatched services using our customized solution frameworks.Throughout that
                            process we create long-term relationships with our clients by being responsive, relevant
                            and consistently delivering value. We also know that Better, Cheaper, and Faster hasn’t
                            fallen out of fashion. Selecting and executing the right solution can help bring new those
                            ideas to market before your competitors at a rate that is sure to increase in speed and
                            scale in the years ahead.</p>
                        <br>
                        <!-- <p class="card-text Solutions_content_body">With the advent of "Internet of everything" and the
                                                subsequent exponential explosion of data, it has become a “front and center” imperative for
                                                organizations to derive more meaningful information and generate actionable insights from
                                                data collected. Data driven decisions need to create sustainable business impact.</p> -->
                        <!-- <a href="#" class="card-link">Card link</a> -->
                        <!-- <a href="#" class="card-link">Explore more --</a> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <div class="card-body">
                        <h5 class="card-title aboutus1_heading"> <img src="assests/noun-vision-995437.svg" class="noun_Vision_995437">
                            <span>Our Vision</span> </h5>

                        <br>
                        <p class="card-text Solutions_content_body">Our Vision is to become the incubator for
                            developing successful future ready business solutions by innovative use of next generation
                            disruptive technology and automation.</p>
                        <br>
                        <!-- <p class="card-text Solutions_content_body">With the advent of "Internet of everything" and the
                                                    subsequent exponential explosion of data, it has become a “front and center” imperative for
                                                    organizations to derive more meaningful information and generate actionable insights from
                                                    data collected. Data driven decisions need to create sustainable business impact.</p> -->
                        <!-- <a href="#" class="card-link">Card link</a> -->
                        <!-- <a href="#" class="card-link">Explore more --</a> -->
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="card col-md-5" style="width:24.4%;border:none;">
                    <div class="card-body">
                        <h5 class="card-title aboutus1_heading"> <img src="assests/noun-focus-1532465.svg" class="noun_focus_1532465">
                            <span>Our Mission</span> </h5>

                        <br>
                        <p class="card-text Solutions_content_body">Our Mission is to help our clients achieve and
                            exceed their digital technology adaptation goals and make digital technology become a
                            pillar of their business growth and profitability. We seek to accomplish this through
                            creation and superior execution of fully customized, robust and scalable next generation,
                            disruptive technology solutions including automation of business processes that are unique
                            to every client.</p>
                        <br>
                        <!-- <p class="card-text Solutions_content_body">With the advent of "Internet of everything" and the
                                                    subsequent exponential explosion of data, it has become a “front and center” imperative for
                                                    organizations to derive more meaningful information and generate actionable insights from
                                                    data collected. Data driven decisions need to create sustainable business impact.</p> -->
                        <!-- <a href="#" class="card-link">Card link</a> -->
                        <!-- <a href="#" class="card-link">Explore more --</a> -->
                    </div>
                </div>

            </div>
        </div>
    </div>

    
        <div class="container-fluid mt-5">
            <div class=" row col-md-12">
                <div class="col-md-4"></div>
                <div class="col-md-5 heading">
                    Leadership&nbsp;&&nbsp;Management&nbsp;Team
                </div>

            </div>
        </div>
        <div class="container-fluid ">
        <div class="row col-md-12 background_image ">
            <div class="row mt-5 col-md-12">
                
                <div class="col-md-3 col-md-offset-2 ml_18 mr-auto shadowEffect">
                    <img src="assests/img-lokesh.png" srcset="assests/img-lokesh@2x.png 2x, assests/img-lokesh@3x.png 3x"
                        class="img_lokesh ml_18 mt-3">
                    <p class="aboutus1_heading_name mt-4 ml_30">Lokesh Reddi </p>
                    <p class="aboutus1_heading_desc ml_35 mt_2 ">Co-founder</p>
                    <p class="card-text Solutions_content_body" style="text-align: justify;">Lokesh is an angel
                        investor and serial
                        entrepreneur. He worked in payments industry for almost a decade and associated with some
                        of
                        the most renowned names in financial services. He is a hands on Strategist and technology
                        evangelist. He handles and organizes all the numbers to fund RapidQube.</p>
                    <div class="row ml_18">
                        <div class="col ml_18">
                                <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/rapidqube"><img src="assests/Group 11.png"></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="blue_line"></div>

                </div>
                
                <div class="col-md-3 col-md-offset-2 ml-5 mr-5 shadowEffect">
                    <img src="assests/img-raghunadh.png" srcset="assests/img-raghunadh@2x.png 2x, assests/img-raghunadh@3x.png 3x"
                        class="img_raghunadh ml_18 mt-3">
                    <p class="aboutus1_heading_name mt-4 ml_18">Raghunadh&nbsp;Vaddadi</p>
                    <p class="aboutus1_heading_desc ml_35 mt_2 ">Co-founder</p>
                    <p class="Solutions_content_body" style="text-align: justify;">Raghu is an early adapter
                        to Block chain
                        technology, has a deep understanding and connect with the digital eco-system. He can always
                        be found tinkering with ideas and strategies. A 24/7 person, he is a very well known
                        technologist across the Community. He is the Managing Principal @ RapidQube fueling growth.</p>
                    <div class="row ml_18">
                        <div class="col ml_18">
                            <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="blue_line"></div>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>

        <!-- data-ride="carousel -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner background_image">
                <div class="carousel-item active">
                    <div class="row mt-5 col-md-12">
                        <div class="col-md-1"></div>

                        <div class="col-md-3 mr-auto shadowEffect">
                            <img src="assests/img-mohanraj.png" srcset="assests/img-mohanraj@2x.png 2x, assests/img-mohanraj@3x.png 3x"
                                class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_28">&nbsp;&nbsp;Mohanraj&nbsp;P&nbsp;B</p>
                            <p class="aboutus1_heading_desc ml_28 mt_2 ">&nbsp;Cheif&nbsp;Digital Strategist</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body mt-4" style="text-align: justify;">Mohan is an
                                    early adopter of Technology
                                    disruptions, has a critical role as he handles most of our solutions and
                                    offerings. He has
                                    a deep understanding of the technology and is extremely patient and guides the
                                    team and our
                                    customers with dedication. He constantly surprises with better ways to
                                    implement design.</p>
                            </div>


                            <div class="container mt-5 ">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>


                        
                        <div class="col-md-3  mr-auto shadowEffect">
                            <img src="assests/img_Muthu.png" class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_12">Muthuprakash&nbsp;Ravindran&nbsp;&nbsp;</p>
                            <p class="aboutus1_heading_desc ml_41 mt_2 ">Co-founder</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body" style="text-align: justify;">Muthu
                                    is a seasoned professional on
                                    delivering complex projects for various large customers in his long stint
                                    with the
                                    IT services majors. He specializes in delivery, architecting solutions and
                                    is a
                                    passionate Agile practitioner. Having extensive experience in Insurance and
                                    Healthcare, as the technology and delivery leader, he combines the business
                                    with
                                    technology with ease.</p>
                            </div>


                            <div class="container mt-4 ">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>


                        <div class="col-md-3 mr-auto shadowEffect">
                            <img src="assests/img_umashankar copy.png" class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_28">UmaShankar&nbsp;S</p>
                            <p class="aboutus1_heading_desc ml_28 mt_2 ">Head&nbsp;-&nbsp;Development</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body mt-4" style="text-align: justify;">Uma is at
                                    the core of everything
                                    RapidQube
                                    does. He handles many core responsibilities in terms of Tech Management. He is
                                    well
                                    known in the tech Community. He is also an Influencer for new solutions and he
                                    Tweets a lot! Constantly refining and retesting each method to perfection is
                                    his
                                    main strength.</p>
                            </div>
                            <div class="container mt-5">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>



                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="carousel-item">
                    
                    <div class="row mt-5 col-md-12">
                            <div class="col-md-1"></div>
                        <div class="col-md-3 mr-auto shadowEffect">
                            <img src="assests/img-christopher.png" srcset="assests/img-christopher@2x.png 2x, assests/img-christopher@3x.png 3x"
                                class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_24">&nbsp;Christopher&nbsp;Day</p>
                            <p class="aboutus1_heading_desc ml_30 mt_2 ">&nbsp;Business&nbsp;Advisor</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body mt-4" style="text-align: justify;">Chris is a
                                    senior executive with a
                                    diverse
                                    background in IT-Vendor Management, Workforce
                                    Optimization, Resourcing, and
                                    Human Resources. He has worked diligently to raise awareness and develop
                                    business
                                    opportunities
                                    for RapidQube in North America. He feels that the technology, specifically
                                    blockchain, has
                                    the ability to transform current business processes as well as define
                                    businesses not yet in
                                    existence.</p>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>



                        <div class="col-md-3 mr-auto shadowEffect">
                            <img src="assests/img-rushikesh.png" srcset="assests/img-rushikesh@2x.png 2x, assests/img-rushikesh@3x.png 3x"
                                class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_24">Rushikesh&nbsp;Purohit</p>
                            <p class="aboutus1_heading_desc ml_30 mt_2 ">&nbsp;Business&nbsp;Advisor</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body" style="text-align: justify;">Rushi comes
                                    with 25 + years of business
                                    development background and domain knowledge in Capital Markets, Mortgage,
                                    Insurance, Healthcare, Supply Chain and the CRM space. Rushi’s connections
                                    across the industry have helped raise awareness and develop RapidQube’s
                                    potential in North America. Rushi’s expertise ranges across the technology map
                                    from legacy modernization to Web 3.0 and everything in between.</p>
                            </div>


                            <div class="container">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>


                        <div class="col-md-3 mr-auto  shadowEffect">
                            <img src="assests/img_vikram copy.png" class="ml_18 mt-3">
                            <p class="aboutus1_heading_name mt-4 ml_18">Vikram&nbsp;Viswanathan</p>
                            <p class="aboutus1_heading_desc ml_35 mt_2 ">Architect</p>
                            <div class="container-fluid">
                                <p class="Solutions_content_body mt-4" style="text-align: justify;">Vikram has
                                    a strong passion for
                                    disruptive
                                    technologies, especially those associated with Financial services and Public
                                    Sector. He has presented to various industry leaders his analysis on technology
                                    implementations that aligns with their strategic visions and goals thereby
                                    delivering industry specific performance driven solutions.</p>
                            </div>


                            <br>
                            <br>
                            <div class="container">
                                <div class="row">
                                    <div class="col ml_18">
                                        <a href="https://www.linkedin.com/company/rapidqube/"><img src="assests/Group 10.png"></a>
                                    </div>
                                    <div class="col">
                                        <a href="https://twitter.com/rapidqube/"><img src="assests/Group 11.png"></a>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <br>
                            <div class="blue"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon mr_86" style="background-color:grey;" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon ml_86" style="background-color:grey;margin-left: 76%;"
                    aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br> 
    <div class="container">

    </div>



</body>

</html>