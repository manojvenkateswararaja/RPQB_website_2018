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
            <img style="width:100%" src="./assests/adhaar.jpg" />
            <div class="triangulo"></div>
            <div class="profile">
                <img class="photo-author img-circle" src="./assests/ram c.png" />
                <span class="name-author"><b>RamC Ramakrishnan</b> <br>
                Solution Specialist</span>
               
            </div>
            
        </div>

        <!-- INFO -->
        <!-- <div class="row">
            <div class="col-xs-12">
            
            </div>
        </div> -->
        <div class="col-sm-12" style="padding-right:15px">
            <div class="col-xs-12 text">
            <h2 style="font-family:ProximaNova-Semibold"><b>Aadhaar - Offline authentications assisted by Blockchain</b></h2>
            <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                        “Can I verify who you say you are?” is the most common question used by businesses for validating customers in the real world.

“How can I trust you will handle my personal details with utmost privacy?” is the question back to these businesses from real people.
                                                                        </p>
                                                                        <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                        How do we have a decentralised system that satisfies the authentication needs of businesses and the privacy needs of individuals?

Unique IDentification Authority of India (UIDAI), an agency established by the Government of India has been successful in collecting and storing securely the personal details and biometrics of 1.25 billion residents with a unique ID, Aadhaar. It offered online, real-time authentication by multiple means (fingerprint, iris and OTP) to businesses and government agencies. The enormous data collected by associating an individual with his/her Aadhaar proved to be an enormous burden to advocates of privacy worried about commercial abuses and government overreach.

Biometrics are the unique features that identify a human being correctly almost 100% of the time. They consist of a person’s finger prints, iris prints, face prints etc. There have been multiple advantages and doubts about the effectiveness and security of maintaining such a large system centrally during the coming decades.

Per the Supreme Court order dt. Sep 26,2018, private businesses are forbidden from using online Aadhaar authentications. Fintech and telecom companies were widely using this facility and lowered their customer onboarding costs from ₹ 100 to ₹5. These lower costs contributed in extending the financial inclusion of millions of citizens who were neglected and outside the financial system for so long. These businesses need something as good as online authentications without violating the court orders.
</p>
<h4><b>What is an offline authentication system? How does it work?</b></h4>
<p style="font-family:ProximaNova-Regular;font-size:17px">
UIDAI recently introduced an offline authentication system using QR code
 and a custom QR code scanner mobile app provided by UIDAI. 
 The QR code can be generated online or downloaded as part of e-Aadhaar card after May 2018. 
 The code contains the encrypted photo and all the personal details of a person except 
 his Aadhaar number. Though it provides a quick way to validate the customer, it has its own
  drawbacks.
                                                                                </p>
                                                                                <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                                
                                                                                Even a regular QR scanner can get the personal details like name, date of birth, address from anyone’s QR code, though the facial picture can’t be decrypted. There are other problems with offline authentication that the person might be using an older QR code. While the face matching can be done, other details like current address can’t be confirmed. Typical examples include people changing their addresses and now they have two Aadhaar cards and two QR codes.
                                                                                
                                                                                </p>
                                                                                <h4><b>So, let’s come to Blockchain buzzword. How can a distributed ledger technology help in offline authentications?</b></h4>

        <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                                
        UIDAI could make available small digital signatures of 1.1 billion records available for offline authentication. What I propose is that UIDAI could potentially include an SHA256-encrypted 40-character hash using a person’s biometrics and personal details. This hash should be the only text that will accompany the facial picture in QR code. Anybody scanning this QR code using UIDAI scanner will get the person’s facial picture and decrypted hash that contains name, address and date of birth. Other QR code scanners will just show the 40-character hash which is of no use to anyone. UIDAI can periodically strengthen the encryption techniques as they become available over time.
                                                                                </p>
                                                                                <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                                
                                                                                Any fintech, telecom, logistics or any company that participates in verification processes could setup blockchain nodes in multiple cities after downloading these hashes from UIDAI. UIDAI could make the latest hashes available for download every week. These details can even be segregated by State or a range of PIN codes so that businesses can choose to host them appropriately for their verification needs. 
                                                                                </p>
                                                                                <p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                                When business agents scan the QR code, the hash retrieved will be compared real-time against the hash available in blockchain network. This ensures that the customer is using the latest Aadhaar details without compromising his privacy.    
                                                                                </p>

      
           
      <h4><b>What are the benefits?</b></h4>

<p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                        
Hosting a decentralised blockchain node on the cloud costs only a few thousand rupees per month. Companies like PayTM, Reliance Jio that have ground level agents could invest in shared blockchain nodes across the country would save millions of rupees in this offline verification model by not reverting to paper-based verification processes 
</p>

            <h4><b>What are the benefits?</b></h4>

<p style="font-family:ProximaNova-Regular;font-size:17px">
                                                                        
Hosting a decentralised blockchain node on the cloud costs only a few thousand rupees per month. Companies like PayTM, Reliance Jio that have ground level agents could invest in shared blockchain nodes across the country would save millions of rupees in this offline verification model by not reverting to paper-based verification processes 
</p>

  <h4><b>What is the future of blockchain in this authentication process?</b></h4>
  <h5><b>Enhancing Trust and Privacy</b></h5>
<p style="font-family:ProximaNova-Regular;font-size:17px">
Zero Knowledge Protocol (ZKP) is one of the best tools that support the cause of privacy and human rights advocates. It provides zero knowledge about the customer and at the same time, provides Yes/No answers to businesses’ frequent questions like “Are you above 18 or 21 years of age”, “are you a resident of a state or city or PINcode?”. Blockchain networks can be enhanced to provide answers to these basic questions in addition to the encrypted hash. People using even normal QR code scanners can validate the 40-character hash simply by checking against one of the available blockchain nodes and getting the answers to such validation questions.                                                                      
</p>
<h5><b>Transparency of Access records</b></h5>
<p style="font-family:ProximaNova-Regular;font-size:17px">
Moving to offline authentications eliminates the potential of customer data aggregation and its gross misuse by marketing companies. Currently, UIDAI centrally stores the online authentication request records and makes it available to consumers on a need basis, after verifying their Aadhaar with OTP authentication. While individuals will know where and how their data is used, privacy and human rights groups will get anonymized data regarding the usage of this data by government agencies. Anonymizing the older records (Access requests older than 3 years) and making them available in distributed blockchain networks will put an additional safeguard in the society and ensure that the personal details of individuals can never be compromised in the future.
</p>
<h5><b>Immutability and Provenance - Aadhaar access records on a blockchain</b></h5>
<p style="font-family:ProximaNova-Regular;font-size:17px">
Since Aadhaar is the largest database in the world and exposed to open, democratic processes, its success will propagate this model to other democratic countries, wanting to better their citizens’ potential and enhance their economic growth.
 </p> 
<p style="font-family:ProximaNova-Regular;font-size:17px">
Putting Aadhaar access records on a blockchain network will ensure that appropriate processes are put in place before anyone is able to access resident records. Since they are immutable, any wrongful access and its abuse will be recorded forever, and any aggrieved party can approach the courts for proper justice.
</p> 
<p style="font-family:ProximaNova-Regular;font-size:17px">
Eventually as blockchain technology matures, smart contracts can be implemented in Aadhaar system that will give the residents, control over who, when, where and how other parties can access their data. As data owners, they will have the ultimate security and peace of mind over sharing their personal data.
</p>       
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