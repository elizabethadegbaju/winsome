<?php require 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact us	</title>
	<!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
    <meta property="og:title" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    
    <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style type="text/css">
		.row{
			color:#DAA520!important;
			font-size: 20px;
    }
		.form-control{
			margin: 20px !important;
			font-size: 14px !important;
			padding: 10px !important;
		}
    .card:hover .card-title-wrap {
      background-color: #DAA520!important;
    }
    .card{
      border: none!important;
      border-radius: 0 !important;
      -moz-border-radius: 0 !important;
    }
    .arrow{
        cursor: pointer;
        position: relative;
        bottom: -2rem;
        left: 50%;
        margin-left:-20px;
        width: 40px;
        height: 40px;
      }
    .bounce {
        animation: bounce 2s infinite;
      }
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
          transform: translateY(0);
        }
        40% {
          transform: translateY(-30px);
        }
        60% {
          transform: translateY(-15px);
        }
      }
      input[type = button]{
        cursor: pointer;
      }
	</style>
</head>

<body>
<section class="team" id="team" style="background: rgba(255,255,255,.6)">
      <div class="container">
<!--       	<p>
      		<h2 class="text-center" style="color:#DAA520!important">
          		Meet our team
        	</h2>
        </p>
 -->
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <div class="card">
              <a href="#"><img alt="" class="team-img" src="img/president.jpg">
              <div class="card-title-wrap">
                <span class="card-title">Victoria Adegbaju</span> 
                <span class="card-text">Principal Consultant</span>
              </div>

              <div class="team-over">
                <h4 class="hidden-md-down">
                  Connect with me
                </h4>

                <nav class="social-nav">
                  <a href="https://twitter.com/VictoriaAdegba" target="_blank"><i class="fa fa-twitter"></i></a> 
                  <a href="https://www.facebook.com/victoria.b.adegbaju/" target="_blank"><i class="fa fa-facebook"></i></a> 
                  <a href="https://www.linkedin.com/in/victoria-bolajoko-adegbaju-5a4a3a16/" target="_blank"><i class="fa fa-linkedin"></i></a>
                  <a href="mailto:vicba2005@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a>
                </nav>

                <p>
                  Lorem ipsum dolor sit amet, eu sed suas eruditi honestatis.
                </p>
              </div></a>
            </div>
          </div>
      	</div>
        <div class="arrow bounce" >
          <a href="#contact" class=""><h1 style="color: #DAA520"><i class="fas fa-chevron-down"></i></h1></a>
        </div>
  	</div>
    </section>
    <!-- /Team -->
    <!-- @component: footer -->

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="section-title" style="color: #DAA520!important; font-family: Jazz LET, fantasy">Contact Us</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-3 offset-lg-2">
            <div>
              <div>
                <br><br>
                <i class="fa fa-map-marker"></i> Shop Address
                <p style="color: rgba(255,255,255,.6);">18, Seidu Ajibowu Street,<br>Off Olowu Street, Ikeja Lagos</p>
              </div>
              
              <div>
                <i class="fa fa-envelope"></i> E-mail
                <p style="color: rgba(255,255,255,.6);">info@winsome.com.ng</p>
              </div>
              
              <div>
                <i class="fa fa-phone"></i> Telephone
                <p style="color: rgba(255,255,255,.6);">07031508731<br>08151213058</p>
              </div>
              
            </div>
          </div>
          
          <div class="col-lg-5">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage">Message not sent. Please retry.</div>
              <form action="#" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="4" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" style="background-color:#DAA520!important"><a>Send Message</a></button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/custom.js"></script>
    <!-- <script src="contactform/contactform.js"></script> -->
</body>
</html>
<?php require 'footer.php'; ?>

<script type="text/javascript">
  $(document).on('click', 'a[href^="#contact"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  });
</script>