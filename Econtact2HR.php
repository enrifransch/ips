<?php
include("Eheader.php");
?>
  
  <!-- Page Title
================================================== -->
  <div class="pagetitle">
    <div class="pagetitle-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Human resources</h1>
          <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="Eindex.php">Home</a></li>
            <li class="active"><i class="fa fa-file-text"></i>Human resources</li>
          </ul>
        </div>
        <!-- end .col-md-12 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
    </div>
    <!-- end .pagetitle-overlay --> 
  </div>
  <!-- end .pagetitle -->
  <div class="mb-100"></div>
  <!-- end .mb-100 --> 
  

  
  <!-- Contact Form
================================================== -->
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="contactform">
          <h3>We will be honoured to serve you</h3>
          <div class="titleline"></div>
          <!-- end .titleline -->
          <form id="commentForm" class="cmxform" method="post" action="contactHR.php">
            <fieldset>
              <label for="cname">Name <i class="fa fa-asterisk"></i></label>
              <input id="cname" class="form-control" name="name" minlength="2" type="text" placeholder="Name" required>
              <label for="cemail">Email <i class="fa fa-asterisk"></i></label>
              <input id="cemail" class="form-control" type="email" name="email" placeholder="Email" required>
              <label for="subject">Subject <i class="fa fa-asterisk"></i></label>
              <input id="subject" class="form-control" type="text" name="subject" placeholder="Subject" required>
              <label for="ccomment">Message <i class="fa fa-asterisk"></i></label>
              <textarea id="ccomment" class="form-control" name="comment" placeholder="Message" required></textarea>
              <label>Anti-spam 2+5= <i class="fa fa-asterisk"></i></label>
              <input class="answer form-control" name="answer" required>
              <input class="submit btn btn-theme" name="Submit" type="submit" value="enviar">
            </fieldset>
          </form>
          <div id="message"></div>
          <!-- end #message --> 
        </div>
        <!-- end .contactform --> 
        
      </div>
      <!-- end .col-md-8 -->
      
     
      
    </div>
    <!-- end .row --> 
  </div>
  <!-- end .container -->
  
  <div class="mb-100"></div>
  <!-- end .mb-100 -->

  
  <!-- Footer
================================================== -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="footer-about"> <a href="index.php"><img src="images/logo-footer.png" alt="" /></a>
            <p>We are a private company created by experts in the drilling industry with experience in various countries both in the oil and geothermal sector.</p><div class="mb-20"></div>
            <!-- end .mb-20 -->
            <ul class="social-icons social-color">
              <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- end .footer-about --> 
        </div>
        <!-- end .col-md-3 -->

     
       <div class="col-md-3">
          <h4>Contact Us </h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="footer-list">
            <li><i class="fa fa-envelope"></i><br>
              <a href="Econtact2.php">General Information</a><br>
              <a href="Econtact2HR.php">Human Resources</a><br>
              <a href="Econtact2adq.php">Acquisitions</a><br>
              <a href="Econtactneg.php">Business</a></li>
          </ul>
        </div>
        <!-- end .col-md-3 --> 
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </footer>
  <!-- end #footer --> 
  
  <!-- Copyright
================================================== -->
  <div id="copyright">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="copyright">&copy; 2016 IPS. All Rights Reserved.</div>
          <!-- end .copyright --> 
        </div>
        <!-- end .col-md-8 -->

        
      </div>
      <!-- end .row --> 
    </div>
    <!-- end .container --> 
  </div>
  <!-- end #copyright --> 
  
  <a href="#" class="back-to-top">Back to Top</a> </div>
<!-- end #boxed-layout --> 

<!-- Java Script
================================================== --> 
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/jquery-migrate-1.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script> 
<script src="js/plugins.js"></script> 
<script src="js/custom.js"></script> 
<!-- <script src="js/localization/messages_fr.js"></script> --> 


</body>
</html>
