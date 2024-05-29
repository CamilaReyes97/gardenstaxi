<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pdateTime = $_POST['pdateTime'];
    $pickup = $_POST['pickup'];
    $ddateTime = $_POST['ddateTime'];
    $dropoff = $_POST['dropoff'];
    $airline = $_POST['airline'];
    $flight = $_POST['flight'];
    $passengers = $_POST['passengers'];
    $comments = $_POST['comments'];

     // Formatear la fecha y la hora
     $pdate = date('D, d-M-Y', strtotime($pdateTime));
     $ptime = date('h:i A', strtotime($pdateTime));
     $ddate = date('D, d-M-Y', strtotime($ddateTime));
     $dtime = date('h:i A', strtotime($ddateTime));
 
     $msj = "
     <html>
     <head>
         <style>
             body {
                 font-family: Arial, sans-serif;
             }
             .container {
                 width: 100%;
                 max-width: 600px;
                 margin: 0 auto;
                 text-align: center;
                 color: #333;
             }
             .header {
                 background-color: #f2f2f2;
                 padding: 20px;
                 border-bottom: 2px solid #ddd;
             }
             .header img {
                 width: 150px;
                 height: auto;
             }
             .title {
                 font-size: 24px;
                 margin: 20px 0;
                 color: #333;
             }
             table {
                 width: 100%;
                 border-collapse: collapse;
                 margin: 20px 0;
             }
             th, td {
                 border: 1px solid #ddd;
                 padding: 8px;
                 text-align: left;
             }
             th {
                 background-color: #f2f2f2;
                 color: #333;
             }
             tr:nth-child(even) {
                 background-color: #f9f9f9;
             }
         </style>
     </head>
     <body>
         <div class='container'>
             <div class='header'>
                 <img src='path/to/logo.png' alt='Company Logo'>
                 <div class='title'>Company Name</div>
             </div>
             <table>
                 <tr>
                     <th>Customer Name</th>
                     <td>$name</td>
                 </tr>
                 <tr>
                     <th>Customer Phone</th>
                     <td>$phone</td>
                 </tr>
                 <tr>
                     <th>Customer Email</th>
                     <td><a href='mailto:$email'>$email</a></td>
                 </tr>
                 <tr>
                     <th>Pick-up Date</th>
                     <td>$pdate</td>
                 </tr>
                 <tr>
                     <th>Pick-up Time</th>
                     <td>$ptime</td>
                 </tr>
                 <tr>
                     <th>Pick Up Address</th>
                     <td>$pickup</td>
                 </tr>
                 <tr>
                     <th>Drop-Off Date</th>
                     <td>$ddate</td>
                 </tr>
                 <tr>
                     <th>Drop-Off Time</th>
                     <td>$dtime</td>
                 </tr>
                 <tr>
                     <th>Drop-Off Address</th>
                     <td>$dropoff</td>
                 </tr>
                 <tr>
                     <th>Airline</th>
                     <td>$airline</td>
                 </tr>
                 <tr>
                     <th>Flight No</th>
                     <td>$flight</td>
                 </tr>
                 <tr>
                     <th>No of Passengers</th>
                     <td>$passengers</td>
                 </tr>
                 <tr>
                     <th>Comments</th>
                     <td>$comments</td>
                 </tr>
             </table>
         </div>
     </body>
     </html>";

    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = SMTP::DEBUG_OFF; // Deshabilitar el debug para producción
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pruebas.webs97@gmail.com'; // Reemplaza con tu correo de Gmail
        $mail->Password = 'zaeoaodkprnudzzd'; // Reemplaza con tu contraseña de aplicación
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar STARTTLS
        $mail->Port = 587; // Usar el puerto 587 para STARTTLS

        $mail->setFrom('pruebas.webs97@gmail.com', 'Booking'); // Reemplaza con tu correo de Gmail y nombre
        $mail->addAddress('camila.reyesber97@gmail.com', 'To'); // Reemplaza con el destinatario deseado

        $mail->isHTML(true);
        $mail->Subject = 'New Booking!';
        $mail->Body = $msj;

        $mail->send();
        $respuesta = 'Thank you for your Booking!';
    } catch (Exception $e) {
        $respuesta = 'Something is wrong. Error: ' . $mail->ErrorInfo;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <title>Garden Taxi-Home</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAiE9h6mdCX6o8D_0TU2FrANdAfYMpBge8&libraries=places"></script>
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-tale-seo-agency.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/index.css">
    
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 582 Tale SEO Agency

https://templatemo.com/tm-582-tale-seo-agency

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Pre-Header Area Start ***** -->
  <div class="pre-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-sm-9">
          <div class="left-info">
            <ul class="letternav">
              <li><a href="#" ><i class="fa fa-phone letternav"></i>+1 1234 5678</a></li>
              <li><a href="#"><i class="fa fa-envelope letternav"></i>infocompany@email.com</a></li>
              <li><a href="#"><i class="fa fa-map-marker letternav"></i>1616 N Florida Mango Rd, WPB</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3">
          <div class="social-icons">
            <ul class="letternav">
              <li><a href="#"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Pre-Header Area End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky "  >
    <div >
        <div class="row" >
            <div class="col-12">
                <nav class="main-nav barra " style="background-color: black !important;">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="max-width: 112px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav main-nav " style="padding-bottom: 30px ;">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="#services">Services</a></li>
                      <li class="scroll-to-section"><a href="#projects">Projects</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Pages</a>
                          <ul class="sub-menu">
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">FAQs</a></li>
                          </ul>
                      </li>
                      <li class="scroll-to-section"><a href="#infos">Infos</a></li>
                      <li class="scroll-to-section"><a href="#contact">Contact</a></li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="caption header-text">
            <h6>Gardens Taxi </h6>
            <div class="line-dec"></div>
            <h4>Dive <em>Gardens</em> Taxi <span style="color: #F4BC33">Yellow Cab</span></h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident alias harum fuga iusto pariatur odit velit ullam commodi odio ratione distinctio ipsum quae dignissimos eius ipsa, sapiente perspiciatis necessitatibus assumenda.</p>
            <div class="main-button scroll-to-section" ><a href="#services">Discover More</a></div>
            <span>or</span>
            <div class="second-button"><a href="faqs.html">Check our FAQs</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services" style="position: relative; top:-150px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-heading">
                <h2>We Provide <em>Different Services</em> &amp;
                  <span>Transportation</span> For Your Needs</h2>
                  <div class="line-dec"></div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-01.png" alt="discover SEO" class="templatemo-feature">
                </div>
                <h4>Seamless Airport Transfers</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-02.png" alt="data analysis" class="templatemo-feature">
                </div>
                <h4>Hotel-to-Anywhere Transportation</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-03.png" alt="precise data" class="templatemo-feature">
                </div>
                <h4>Office Process Transport Solutions</h4>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="service-item">
                <div class="icon">
                  <img src="assets/images/services-04.png" alt="SEO marketing" class="templatemo-feature">
                </div>
                <h4>Event Transportation </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="projects section" id="projects" style="position: relative; top:-150px">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h2>Discover Our <em>Locations</em></h2>
            <div class="line-dec"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
          </div>
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-features owl-carousel">
            <div class="item">
              <img src="assets/images/projects-01.jpg" alt="">
              <div class="down-content">
                <h4>Top-Notch SUV Rentals in West Palm Beach</h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Reliable Transportation Services </h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>Your Go-To for West Palm Beach Transfers</h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-04.jpg" alt="">
              <div class="down-content">
                <h4>Effortless Commutes in West Palm Beach</h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-02.jpg" alt="">
              <div class="down-content">
                <h4>Premier Event Transport in West Palm Beach</h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
            <div class="item">
              <img src="assets/images/projects-03.jpg" alt="">
              <div class="down-content">
                <h4>West Palm Beach Airport Shuttle Excellence</h4>
                <a href="#"><i class="fa fa-link" style="color: #F4BC33 !important"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="infos section" id="infos" style="position: relative; top:-180px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main-content">
            <div class="row">
              <div class="col-lg-6">
                <div class="left-image">
                  <img src="assets/images/left-infos.jpg" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="section-heading">
                  <h2>More <em>About Us</em> &amp; What <span>We Offer</span></h2>
                  <div class="line-dec"></div>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo consectetur quisquam possimus porro in non esse earum soluta. Error repellat repudiandae hic explicabo unde omnis eos quam. Molestias, dolores sit.</p>
                </div>
                <div class="skills">
                  <div class="skill-slide marketing">
                    <div class="fill"></div>
                    <h6>Service</h6>
                    <span>100%</span>
                  </div>
                  <div class="skill-slide digital">
                    <div class="fill"></div>
                    <h6>Puntuality</h6>
                    <span>100%</span>
                  </div>
                  <div class="skill-slide media">
                    <div class="fill"></div>
                    <h6>Pricing</h6>
                    <span>100%</span>
                  </div>
                </div>
                <p class="more-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doers eiusmod tempor incididunt ut labore et dolore dolor dolor sit amet, consectetur adipiscing elit, sed doers eiusmod.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact" style="position: relative; top:-150px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="contact-us-content">
            <div class="row">
              <div class="col-lg-4">
                <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7128.793306527835!2d-80.0779227!3d26.6997724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d8d638ee542c8d%3A0x4a37f94244ff1692!2s1616%20N%20Florida%20Mango%20Rd%2C%20West%20Palm%20Beach%2C%20FL%2033409!5e0!3m2!1sen!2sus!4v1716942104758!5m2!1sen!2sus" width="100%" height="670" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <div class="col-lg-8">
                
    <?php
    if (isset($respuesta)) {
        echo '<div class="alert alert-info" role="alert" style="background:#F4BC33 !important">' . $respuesta . '</div>';
    }
    ?>
                <form id="contact-form" action="" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-heading">
                        <h2><em>Contact Us</em> &amp; Book <span>Now</span></h2>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="name" id="name" placeholder="Full Name" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                        <input type="text" name="phone" id="phone" placeholder="Phone number" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-mail" required="">
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <label for="inputPDateTime" class="form-label">Pick-up Date & Time</label>
                        <input type="datetime-local" name="pdateTime" id="pdateTime" placeholder="Pick-up Date & Time" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <label for="inputPickup" class="form-label">Pick Up Address</label>
                        <input type="text" name="pickup" id="inputPickup"  autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <label for="inputPDateTime" class="form-label">Drop-Off Date & Time</label>
                        <input type="datetime-local" name="ddateTime" id="inputDDateTime" placeholder="Pick-up Date & Time" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-6">
                      <fieldset>
                      <label for="inputPickup" class="form-label">Drop-Off Address</label>
                        <input type="text" name="dropoff" id="inputDropoff"  autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      <fieldset>
                        <input type="text" name="airline" id="inputAirline" placeholder="Airline (If App)" autocomplete="on" >
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      <fieldset>
                        <input type="text" type="text" name="flight" id="inputFlight"  placeholder="Flight No (If Appe)" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-4">
                      <fieldset>
                        <input type="text" type="text" name="passengers" id="inputPassengers"  placeholder="No of Passengers" autocomplete="on" required>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <textarea name="comments" id="inputComments" placeholder="Additional information"></textarea>
                      </fieldset>
                    </div>
                    <div class="col-lg-12">
                      <fieldset>
                        <button type="submit" name="submit" class="orange-button">Book Now</button>
                      </fieldset>
                    </div>
                  </div>
                </form>
                <div class="more-info">
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="info-item">
                      <i class="fa fa-phone" style="color: white !important"></i>
                        <h4><a href="#">010-020-0340</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-envelope" style="color: white !important"></i>
                        <h4><a href="#">info@company.com</a></h4>
                        <h4><a href="#">hello@company.com</a></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="info-item">
                        <i class="fa fa-map-marker" style="color: white !important"></i>
                        <h4><a href="#">1616 N Florida Mango Rd, West Palm Beach, FL 33414</a></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2025 <a href="#">Gardens Taxi</a>. All rights reserved. 
        
        <br>Design: <a href="https://templatemo.com" target="_blank">Camila Reyes</a></p>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
        function initAutocomplete() {
            const inputPickup = document.getElementById('inputPickup');
            const inputDropoff = document.getElementById('inputDropoff');

            const autocompletePickup = new google.maps.places.Autocomplete(inputPickup);
            const autocompleteDropoff = new google.maps.places.Autocomplete(inputDropoff);
        }

        google.maps.event.addDomListener(window, 'load', initAutocomplete);
    </script>

  </body>

</html>
