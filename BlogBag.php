<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>
 RapidQube
</title>
<link rel="icon" href="assests/rapidqube-logo-2.png" type="image">

<!------ Include the above in your HEAD tag ---------->
<style>
@import url('https://fonts.googleapis.com/css?family=Open+Sans');
body{font-family: 'Open Sans', sans-serif;}
.header{position:relative;overflow:hidden;max-height:350px;display:flex;align-items:center;justify-content:center}
.text{
    /*-webkit-column-count: 2; 
    -moz-column-count: 2; 
    column-count: 2; */  
    margin-top:15px;        
}
.statistics > p{margin-bottom:2px;}
.statistics > p > span.label{background-color:white;color:gray;}
.side{background:#fafafa;padding-top:15px}
.side > img { margin-bottom:15px;}
.semi-title{font-weight: bold;margin-top:30px;}
.title{    
    position: absolute;
    bottom: 45px;
    padding: 7px;
    right: 25px;
    padding-left: 25px;
    padding-right: 30px;
    color: white;
    background: rgba(0,0,0,0.5);
}
.sub-title{    
    position: absolute;
    bottom: 94px;
    padding: 7px;
    right: 25px;
    padding-left: 12px;
    padding-right: 12px;
    color: orange;
    background: rgba(0,0,0,0.7);
}        
.name-author{
    position: absolute;
    bottom: 35px;
    left: 100px;
    font-size: 11px;
    color: white;
    background: black;
    padding: 2px;
    padding-right: 10px;
    padding-left: 22px;
    margin-left: -21px;
    z-index: 1;
    font-weight: 500;            
}
.photo-author{
    max-height: 70px;
    padding: 2px;
    position: absolute;
    left: 25px;
    bottom: 25px;
    background: white;
    z-index: 3;            
}
.triangulo{
    position:absolute;
    bottom:0px;
    left:0px;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 60px 0 0 1200px;
    border-color: transparent transparent transparent #ffffff;
}
.row-eq-height {
display: -webkit-box;
display: -webkit-flex;
display: -ms-flexbox;
display: flex;
}   

@media (max-width: 426px) {
    .header{
            margin-left: -15px;
            margin-top: -15px;
            margin-right: -15px;
    }
    .title{
        font-size:15px;
        bottom:-12px;
        right:0px;
        padding-left:10px;
        padding-right:10px;
    }
    .photo-author{
        max-height:45px;
        left:5px;
        bottom:40px;
    }
    .name-author{
        font-size:9px;
        margin-left:-63px;
        bottom:44px;
    }
    .sub-title{
        right:0px;
        bottom:18px;
        padding:5px;
        font-size:10px;
    }
}
</style>
<?php include('nav.php'); ?>
<br><br><br><br><br><br><br>
<div class="container">
	<div class="row">
		 <!-- HEADER -->
        <div class="header">
            <img style="width:100%" src="./assests/blockchain_healthcare.jpg" />
            <div class="triangulo"></div>
            <div class="profile">
                <img class="photo-author img-circle" src="./assests/uma_trainingImg.png" />
                <span class="name-author">UmaShankar</span>
            </div>
            
        </div>

        <!-- INFO -->
        <!-- <div class="row">
            <div class="col-xs-12">
          
            </div>
        </div> -->
        <div class="col-sm-12" style="padding-right:15px">
       
            <div class="col-xs-12 text">
            <h2 style="font-family:ProximaNova-Semibold"><b>Blockchain in Health Care</b></h2>
            <p style="font-family:ProximaNova-Regular;font-size:17px" >
                                                                RapidQube Digital Solutions Pvt Ltd. is a 2016 start-up
                                                                focusing on next generation, disruptive technology
                                                                solutions leveraging a range of blockchain platforms
                                                                and the associated front-end, middleware and back-end technologies that
                                                                bring a
                                                                complete blockchain ecosystem to life. We are global by design. Our main
                                                                office is in
                                                                Mumbai along with an architecture hub & development center.
                                                            </p>
            
                                                            <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                        That raises the question of how Blockchain can be a selling point to
                                                        5million users when the awareness about this emerging technology is
                                                        just happening and more importantly, what is the USP of availing global
                                                        health care services (or any other service) from a BlockChain
                                                        application?</p>
                                                    <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                        Is BlockChain going to be a mere data repository of live data with some
                                                        high degree of security & protection or will it remain as a reference
                                                        point only or would such Blockchain applications truly allow the user
                                                        to do a real-time transaction wherein s/he can witness the process and
                                                        all the stakeholders accord their concurrence & acceptance to the
                                                        success of the transaction? These are questions that need to be
                                                        answered for a wider adoption of Blockchain as a technology backbone in
                                                        corporate applications.</p>
                                                    <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                        So, from a corporate sector view of the adoption of Blockchain, the
                                                        challenge is to convince the sector on the added layers of security the
                                                        technology brings in and the suitability of adoption of Blockchain for
                                                        specific areas of business which can not only add security but can help
                                                        in elevating the end user experience.</p>
                                                    <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                        Here in India, the Central Government and most of the State Governments
                                                        are promoting BlockChain Technology among various Govt establishments &
                                                        departments but there seem to be a lack of awareness on the
                                                        possibilities of this technology. The concern for them is that this
                                                        technology is something very new, something which is not proven and
                                                        validated internationally and have to show the credentials of being the
                                                        securest way to store and access data. So, the need is for a clearer
                                                        and transparent IT Strategy on adoption of Blockchain and educate the
                                                        users on the benefits of the same.</p>
                                                    <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                        As a proponent of the capabilities of Blockchain and RapidQube, I can
                                                        request the readers of my views to visit www.rapidqube.com to
                                                        experience a broader overview of BlockChain Technology along with
                                                        validated Use Cases and Tested Applications. Do reach out to us in case
                                                        of queries.
            </div>
            <!-- Sidebar // advertising -->
            <!-- <div class="col-xs-3 side">
                <img style="max-width: 100%" src="http://youthnesia.id//assets/img/images/Advertise-here.png" alt="Photograph" />

                <small>
                <p style="margin-bottom:0px;"><b>Estadísticas</b></p>
                <div class="statistics">
                    <p><span class="label label-default">Visitas 2550</span></p>
                    <p><span class="label label-default">Comentarios 15</span></p>
                    <p><span class="label label-default">Compartido 50 veces</span></p>
                    <p><span class="label label-default">Me gusta 20</span></p>
                </div>
                <p style="margin-bottom:0px;margin-top:25px;"><b>Noticias importantes</b></p>
                <ul class="list-group">
                    <li class="list-group-item"><big><b>1.</b></big> Cras justo odio</li>
                    <li class="list-group-item"><big><b>2.</b></big> Dapibus ac facilisis in</li>
                    <li class="list-group-item"><big><b>3.</b></big> Morbi leo risus</li>
                    <li class="list-group-item"><big><b>4.</b></big> Porta ac consectetur ac</li>
                    <li class="list-group-item"><big><b>5.</b></big> Vestibulum at eros</li>
                </ul>
                </small>
                
            </div> -->
        </div>
	</div>
</div>
<?php include('footer.php'); ?>