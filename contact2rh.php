<?php
include("header.php");
?>
  
  <!-- Page Title
================================================== -->
  <div class="pagetitle">
    <div class="pagetitle-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Recursos humanos</h1>
          <ul class="breadcrumb">
            <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
            <li class="active"><i class="fa fa-file-text"></i>Recursos humanos</li>
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
          <h3>Estaremos honrados de atenderles</h3>
          <div class="titleline"></div>
          <!-- end .titleline -->
          <form id="commentForm" class="cmxform" method="post" action="contactRH.php">
            <fieldset>
              <label for="cname">Nombre <i class="fa fa-asterisk"></i></label>
              <input id="cname" class="form-control" name="name" minlength="2" type="text" placeholder="Nombre" required>
              <label for="cemail">Correo electrónico <i class="fa fa-asterisk"></i></label>
              <input id="cemail" class="form-control" type="email" name="email" placeholder="Correo electrónico" required>
              <label for="subject">Asunto <i class="fa fa-asterisk"></i></label>
              <input id="subject" class="form-control" type="text" name="subject" placeholder="Asunto" required>
              <label for="ccomment">Mensaje <i class="fa fa-asterisk"></i></label>
              <textarea id="ccomment" class="form-control" name="comment" placeholder="Mensaje" required></textarea>
              <label>Contra-spam 2+5= <i class="fa fa-asterisk"></i></label>
              <input class="answer form-control" name="answer" required>
              <input class="submit btn btn-theme" name="submit" type="submit" value="enviar">
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
            <p>Somos una compañía privada creada por expertos en la industria de la perforación con experiencia en diversos países tanto en el sector petrolero como geotérmico.</p><div class="mb-20"></div>
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
          <h4>Contacto </h4>
          <div class="titleline-footer"></div>
          <!-- end .titleline-footer -->
          <ul class="footer-list">
            <li><i class="fa fa-envelope"></i><br>
              <a href="contact2.php">Información general</a><br>
              <a href="contact2rh.php">Recursos humanos</a><br>
              <a href="contact2adq.php">Adquisiciones</a><br>
              <a href="contact2neg.php">Negocios</a></li>
          </ul>
        </div>
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
