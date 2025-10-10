<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/icon-font.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fancybox.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/odometer.min.css">
  <link rel="stylesheet" href="css/swiper.min.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <title>Contact Form </title>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <meta name="description" content="Contact Form">
</head>

<body>
  <aside class="side-widget">
    <div class="inner">
      <!-- Logo Menu Mobile -->
      <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="Image"></a> </div>
      <div class="hide-mobile">
        <div class="or">
          <h2 class="h2-baslik-anasayfa-ozel1"> Contact Information </h2>
        </div>
        <div class="bosluk2dt"></div>
        <div class="iconsv"><i class="flaticon-call"></i></div>
        <address class="address">
          <p><a href="#"> +91 9944430300</a>
          <div class="bosluk2dt"></div>
          <div class="iconsv"><i class="flaticon-email"></i></div>
          <a href="#">mail@galaxyconsultancy.org</a>
          <div class="bosluk2dt"></div>
          <div class="iconsv"><i class="flaticon-location"></i></div>
          <a href="#"> 25, Gandhi Road,Vandavasi <br> Tiruvannamalai Dt - 604 408</a>
          <div class="bosluk2dt"></div>
          <div class="or">
            <a href="#"><img src="img/facebook1.png" alt=""></a>
            <a href="#"><img src="img/instagram1.png" alt=""></a>
            <a href="#"><img src="img/twitter1.png" alt=""></a>
            <a href="#"><img src="img/google1.png" alt=""></a>
          </div>
          </p>
        </address>
      </div>
      <div class="show-mobile">
        <div class="site-menu">
          <ul class="menueffect">
            <li><a href="index.html">Home</a></li>
            <li><a href="about-us.html">About Us</a></li>
            <!-- <li><a href="crypto-currency-charts.html">Crypto Currency Charts</a></li> -->
            <li><a href="blog.html">Services</a></li>
            <li><a href="contact-us.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <small>© 2022 - Cryptoce</small>
    </div>
  </aside>
  <nav class="navbar">
    <div class="container">
      <!-- Logo Menu Desktop -->
      <div class="logo"> <a href="index.html"><img src="img/logo.png" alt="Image"></a> </div>
      <div class="site-menu">
        <ul class="menueffect">
          <li><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
          <!-- <li><a href="crypto-currency-charts.html">Crypto Currency Charts</a></li> -->
          <li><a href="blog.html">Services</a></li>
          <li><a href="contact-us.html">Contact</a></li>
        </ul>
      </div>
      <!-- <div class="hamburger-menu"> <span></span> <span></span> <span></span> </div>
      <div class="navbar-button"> <a href="#">Join Crypto ICO</a> </div> -->
    </div>
  </nav>
  <header class="page-header wow fadeInUp" data-wow-delay="0.5s" data-background="img/page-header.jpg">
    <div class="container">
      <h2>
        <?php
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['telefon']) && isset($_POST['message'])) {
          $ad = $_POST['name'];
          $email = $_POST['email'];
          $telefon = $_POST['telefon'];
          $mesaj = $_POST['message'];

          if (empty($ad) || empty($email) || empty($telefon) || empty($mesaj)) {
            echo 'Please do not leave blank';
          } else {
            $toEmail = 'example@example.com';
            $emailSubject = 'New email from your contant form';
            echo 'Thank you.';
          }
        } else {
          echo 'Please use the form';
        }
        ?>
      </h2>
      <div class="bosluk333"></div>
      <p>Here you can return to the</p><br>
      <p><a href="index.html" class="custom-button"><strong>Home Page </strong></a> </p>
    </div>
    <!-- end container -->
  </header>
  <main>
  </main>
  <!--Footer Alanı-->
  <footer class="footer">
    <!--footer menu-->
    <div class="tablo-footer">
      <div class="ozel">
        <div class="tablo--1-ve-5 wow fadeInUp" data-wow-delay="0.3s">
          <img src="img/logo-footer.png" alt="Image">
        </div>
        <div class="tablo--1-ve-1 wow fadeInUp" data-wow-delay="0.4s">
          <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> Quick Links </h2>
          <div class="footer__menu wow fadeInUp" data-wow-delay="0.5s">
            <ul class="footer__list">
              <li class="footer__item"><a href="index.html" class="footer__link">Home Page</a></li>
              <li class="footer__item"><a href="about-us.html" class="footer__link">About Us</a></li>
              <!-- <li class="footer__item"><a href="crypto-currency-charts.html" class="footer__link">Crypto Currency Charts</a></li> -->
              <li class="footer__item"><a href="blog.html" class="footer__link">Services</a></li>
              <li class="footer__item"><a href="contact-us.html" class="footer__link">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="tablo--1-ve-1 wow fadeInUp" data-wow-delay="0.6s">
          <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> Address </h2>
          <p class="footer__sosyal">
          <p class="footer-support">25, Gandhi Road,Vandavasi<br>Tiruvannamalai Dt - 604 408</p>
        </div>
        <div class="tablo--1-ve-1 wow fadeInUp" data-wow-delay="0.7s">
          <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> Support </h2>
          <p class="footer__sosyal">
          <p class="footer-support">mail@galaxyconsultancy.org</p>
        </div>
        <!-- <div class="tablo--1-ve-1 wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="h2-baslik-footer h-yazi-margin-kucuk"> Follow Us </h2> 
                        <p class="footer__sosyal">
                            <p class="footer-support">
                                <div class="footer-social">
                                    <i class="flaticon-facebook"></i>&nbsp;&nbsp;&nbsp;
                                    <i class="flaticon-instagram"></i>&nbsp;&nbsp;&nbsp;
                                    <i class="flaticon-twitter"></i>
                                </div>
                    </div>    -->
      </div>
    </div>
    <div class="ozel-copyright wow fadeInUp" data-wow-delay="0.9s">
      <div class="footer__copyright">
        &copy; 2022 - Galaxy Consultancy - All Rights Reserved.
      </div>
    </div>
    <div id="top" style="cursor: pointer;">
      <img width="50" height="50" src="img/go-top.png" alt="" />
    </div>
    <script src="js/team.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fancybox.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/odometer.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/pointer.js"></script>
    <!--Cursor Script-->
    <script>
      init_pointer({

      })
    </script>
    <script>
      $(document).ready(function() {
        $('#btn_Gonder').click(function() {

          //alert("test");

          var isim = $('#txt_isim').val();
          var eposta = $('#txt_eposta').val();
          var telefon = $('#txt_telefon').val();
          var mesaj = $('#txt_mesaj').val();
          var json_data = {};
          json_data.isim = isim;
          json_data.eposta = eposta;
          json_data.telefon = telefon;
          json_data.mesaj = mesaj;
          $.ajax({
            url: "form/Contact-Form-Send.php",
            method: "post",
            data: json_data,
            success: function(response) {
              if (response == "Success") {
                alert("Mesajınız Gönderildi.");
              } else if (response == "Failed") {
                alert("Mesajınız Gönderilemedi. Lütfen Tekrar Deneyiniz.");
              }
              console.log(response);
              if (response.trim() == "Success") console.log("Success");
              else
                console.log("Failed :  " + response);
            }
          });
        });
      });
    </script>
  </footer>
</body>

</html>