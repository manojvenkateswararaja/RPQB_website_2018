   
   
    
<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h2 class="modal-title w-100 heading"><b>Quick Enquiry</b></h2>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body modal-guts">
          <form name="email_form" class="email_form" action="enquiryinserttable.php" id="email_form" method="POST" autocomplete="off">

            <div class="form-group">
            <label class="float-label regFormFonts"   for="exampleInputEmail1"><h3>Your Email</h3></label>
              <input type="email" class="form-control" name="email"  id="email">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
             

            </div>
            <div class="form-group">
            <label class="float-label regFormFonts"  for="exampleInputEmail1"><h3>Your Name</h3></label>
              <input type="text" class="form-control" name="f_name" id="f_name">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
            


            </div>
           
            <div class="form-group">
            <label class="float-label regFormFonts"  name="company" id="company" for="exampleInputEmail1"><h3>Company</h3></label>
              <input type="text" class="form-control" name="company" id="company" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              
            </div>
            <div class="form-group">
            <label class="float-label regFormFonts" name="phone" for="exampleInputEmail1"><h3>Phone Number</h3></label>
              <input type="text" class="form-control" name="phone" id="phone" id="exampleInputEmail1">
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
              
            </div>
            <div class="form-group">
            <label class="float-label regFormFonts" name="details" for="exampleInputEmail1"><h3>Description</h3></label>
              <input type="text" class="form-control" name="details" id="details" id="exampleInputEmail1">
              
              <span class="form-highlight"></span>
              <span class="form-bar"></span>
            
            </div>
            <div class="form-group">
            <input type="hidden" name="fld_name" id="fld_name" value="Quick Enquiry">
            </div>
            <div class="modal-footer d-flex justify-content-center">
           
              <button  type="submit" id="send_btn" name="submit"  value="submit" class="btn btn-default send_btn  buttonFonts "
                style="width: 265px; height: 61px;border-radius: 8px; background-image: linear-gradient(76deg, #06cbec, #0c7bd2);"><h3>Submit</h3></button>
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
