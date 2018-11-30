<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

  <!-- Add this css in head tag -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
       <style>
            body{
                font-size:18px;
                font-weight: 400;
            }
.p-y-2 {
    padding-top: 28px;
    padding-bottom: 28px;
}
.p-y-3 {
    padding-top: 45px;
    padding-bottom: 45px;
}
.m-b-1 {
    margin-bottom: 18px;
}
.m-t-1 {
    margin-top: 18px;
}

           .main_counter_area{
                /* background: url(https://images.pexels.com/photos/196288/pexels-photo-196288.jpeg?w=940&h=650&auto=compress&cs=tinysrgb) no-repeat top center; */
                background-size: cover;
                overflow: hidden;
            }
            .main_counter_area .main_counter_content .single_counter{
                background: black;
                    color: #fff;
            }
            .main_counter_area .main_counter_content .single_counter i{
                font-size:36px;
            }
           </style>
        
     <!-- Here is the section -->
     
      <section id="counter" class="counter">
            <div class="main_counter_area">
                <div class="overlay p-y-3">
                    <div class="container">
                        <div class="row">
                            <div class="main_counter_content text-center white-text wow fadeInUp">
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                        <h2 class="statistic-counter">3</h2>
                                        <p>Whitepapers</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="glyphicon glyphicon-ok-circle"></i>
                                        <h2 class="statistic-counter">79</h2>
                                        <p>Products & Solutions</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="single_counter p-y-2 m-t-1">
                                        <i class="glyphicon glyphicon-screenshot"></i>
                                        <h2 class="statistic-counter">8</h2>
                                        <p>Frameworks</p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End of counter Section -->


<!-- Add this script before </body> -->


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
        
        
        
        
     
        <script>
     jQuery('.statistic-counter').counterUp({
                delay: 10,
                time: 2000
            });


            
    </script>