<!DOCTYPE html>
<html>

<?php	 
	$tituloPagina="Altas | Riesgos Sismicos";
	include_once ("includes/head.php"); 	  
 ?>

<body>
    <?php
  include_once ("includes/nav.php"); 
 ?>

    <!-- contacts area start -->
    <div class="contacts ptb-100" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h2 class="title tc">
                        Contact Us
                    </h2>
                    <p class="contacts_description tc">If you have any questions, please fill out the form below.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                    <div class="form">
                        <form action="../php/contact-form.php" class="form form--contacts">
                            <input type="text" class="form_field" placeholder="Name" required="">
                            <input type="text" class="form_field" placeholder="Email" required="">
                            <textarea class="form_textarea" placeholder="Message"></textarea>
                            <select name="carlist" form="carform">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="opel">Opel</option>
  <option value="audi">Audi</option>
</select>

                            <button class="button button_orange button_medium" type="submit">SUBMIT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contacts area end -->



        <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");
  
  ?>

</body>

</html>