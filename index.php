<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>
<!-- <base  target="_blank"> -->    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Winsome Beauty Collections</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <style type="text/css">
      .overlay {
        padding: 5rem 0;
        text-align: center;
        background: rgba(0, 0, 0, 0);
      }
      .portfolio-item{
        padding: 20px!important;
        border-color: #DAA520!important;
        border-width: 10px!important;
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
    </style>
  </head>

  <body>

    <!-- Page Content -->
  <div class="overlay">
    <div class="container">
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4" style="background-color: rgba(255,255,255,.6)!important; margin-right: -90px !important; margin-left: -90px!important; margin-top: -50px!important">
        <h1 class="display-3" align="center"><img src="img/logo.png" width="70%"></h1>
        <p class="lead" align="center"><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.<br></p>
        <div class="arrow bounce" >
          <a href="#portfolio" class=""><h1 style="color: black"><i class="fas fa-chevron-down"></i></h1></a>
        </div>
      </header>

      <!-- Products Grid -->
    <section class="bg-light display-3" id="portfolio" style="margin-top: 80px; padding-top: 100px;">
          <div class="display-3" align="center">
            <h2 class="section-heading">Skin Care Products</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxitonesoap.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxitone Herbal Soap</h4>
              <p class="text-muted">Gives a brighter, smoother and even-toned skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxitonesoap.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiglow Herbal soap</h4>
              <p class="text-muted">For a glowing, smoother, even and younger-looking skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxiwhitesoap.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiwhite Herbal Soap</h4>
              <p class="text-muted">Naturally whitens, while leaving the skin smoother and even.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxicream2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxitone Body Lotion</h4>
              <p class="text-muted">Gives a brighter, smoother and even-toned skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxicream2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiglow Body Lotion</h4>
              <p class="text-muted">For a glowing, smoother, even and younger-looking skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxicream2.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiwhite Body Lotion</h4>
              <p class="text-muted">Naturally whitens, gives smoother and even skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxiglowoil.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiglow Body Oil</h4>
              <p class="text-muted">For glowing skin, anti-ageing, anti-wrinkles.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxiwhiteoil.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxiwhite Body Oil</h4>
              <p class="text-muted">Naturally whitens, anti-ageing, anti-wrinkles, younger-looking skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Stretch Marks Gel</h4>
              <p class="text-muted">Clears and prevents stretch marks.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Body Spray</h4>
              <p class="text-muted">Last for minimum of 24 hours.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-light display-3" id="portfolio" style="margin-top: 80px; padding-top: 100px;">
          <div class="display-3" align="center">
            <h2 class="section-heading">Hair Care Products</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/hairoil.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Hair Magic Oil</h4>
              <p class="text-muted">Restores damaged hair within three weeks, prevents breakage/loss, treats dandruff, stimulates growth.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Hair Nutrients</h4>
              <p class="text-muted">Contains major nutrients to provide you with healthy hair. Prevents breakage/loss, treats dandruff, stimulates growth.</p>
            </div>
          </div><div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Hair Conditioner</h4>
              <p class="text-muted">Moisturizes, smoothens, conditions and prevents loss of the hair.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/shampoo.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Herbal Treatment Shampoo</h4>
              <p class="text-muted">Moisturizes, smoothens, thickens, and prevents loss of hair.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/soapmix.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Bathing Soap</h4>
              <p class="text-muted">Short text here</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal16">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/lotion.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Body Cream</h4>
              <p class="text-muted">Short text should be entered here</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal17">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Product</h4>
              <p class="text-muted">Short text goes here</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal18">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Product</h4>
              <p class="text-muted">Short text goes here</p>
            </div>
          </div><div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal19">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/shampoo.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Shampoo</h4>
              <p class="text-muted">Short text here</p>
            </div>
          </div>
        </div>
      </section>
      <section class="bg-light display-3" id="portfolio" style="margin-top: 80px; padding-top: 100px;">
          <div class="display-3" align="center">
            <h2 class="section-heading">Facial Care Products</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal20">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/treatmentsoap.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Organic Treatment Soap</h4>
              <p class="text-muted">Clears pimples, acne, heat rash, eczema etc. within three days.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal21">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Exfoliating Scrub</h4>
              <p class="text-muted">Gives a brighter skin as it eliminates dead cells.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal22">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Dark Circles Gel</h4>
              <p class="text-muted">Treats dark circles, eye bags etc.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal23">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/turmeric.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Facial Treatment Cream</h4>
              <p class="text-muted">Treats sunburn, darks pots, wrinkles, finelines. Gives a glowing skin.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal24">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/products/maxispotremover.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Maxi Spot-remover</h4>
              <p class="text-muted">Clears pimples/acne and their scars, dark spots, finelines.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal25">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-2x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/turmeric.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Face Cream</h4>
              <p class="text-muted">Short text here</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
</div>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxitone Herbal Soap</h2>
                  <p class="item-intro text-muted">Gives a brighter, smoother and even-toned skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxitonesoap.jpg" alt="">
                  <p>Directions: To be used twice daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Black soap, Honey, Turmeric etc.</li>
                    <li>Sizes available: 360g</li>
                    <li>Category: Skin care products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiglow Herbal Soap</h2>
                  <p class="item-intro text-muted">For a glowing, smoother, even-toned and younger-looking skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxitonesoap.jpg" alt="">
                  <p>Directions: To be used twice daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Black soap, Honey, Turmeric, Essential oils etc.</li>
                    <li>Sizes available: 360g</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiwhite Herbal Soap</h2>
                  <p class="item-intro text-muted">Naturally whitens, while leaving the skin smoother and even.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxiwhitesoap.jpg" alt="">
                  <p>Directions: To be used twice daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Black soap, Turmeric, Honey etc.</li>
                    <li>Sizes available: 360g</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxitone Body Lotion</h2>
                  <p class="item-intro text-muted">Gives a brighter, smoother and even-toned skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxicream2.jpg" alt="">
                  <p>Directions: Use twice daily</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Rosewater, Glycerine, Carrot oil etc.</li>
                    <li>Sizes available: 250ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiglow Body Lotion</h2>
                  <p class="item-intro text-muted">For a glowing, smoother, even and younger-looking skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxicream2.jpg" alt="">
                  <p>Directions: Use twice daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Rosewater, Glycerine, Essential Oils etc.</li>
                    <li>Sizes available: 200ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiwhite Body Lotion</h2>
                  <p class="item-intro text-muted">Naturally whitens, gives smoother and even skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxicream2.jpg" alt="">
                  <p>Directions: Use twice daily.</p>
                  <ul class="list-inline">
                    <li>Main Ingredients: Rosewater, Glycerine, Carrot oil, Gluta thione etc.</li>
                    <li>Sizes Available: 250ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiglow Body Oil</h2>
                  <p class="item-intro text-muted">For glowing skin, anti-ageing, anti-wrinkles.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxiglowoil.jpg" alt="">
                  <p>Directions: Use daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Argan oil, Jojoba oil, Coconut oil, Essential oils etc.</li>
                    <li>Sizes available: 200ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxiwhite Body Oil</h2>
                  <p class="item-intro text-muted">Naturally whitens, anti-ageing, anti-wrinkles, younger-looking skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxiwhiteoil.jpg" alt="">
                  <p>Directions: Use daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Argan oil, Jojoba oil, Carrot oil, Essential oils etc.</li>
                    <li>Sizes available: 200ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Stretch Marks Gel</h2>
                  <p class="item-intro text-muted">Clears and prevents stretch marks.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/.jpg" alt="">
                  <p>Directions: Use to massage affected areas daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Aloe vera, Olive oil, Essential oils etc.</li>
                    <li>Client: Window</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Body Spray</h2>
                  <p class="item-intro text-muted">Last for minimum of 24 hours.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/.jpg" alt="">
                  <p>Directions: Use as required</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Fragrance</li>
                    <li>Sizes available: 100ml</li>
                    <li>Category: Skin Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Hair Magic Oil</h2>
                  <p class="item-intro text-muted">Restores damaged hair within three weeks, prevents breakage/loss, treats dandruff, stimulates growth.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/hairoil.jpg" alt="">
                  <p>Directions: Use to massage scalp daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Coconut oil, Jojoba oil, Castor oil, Moringa, Essentiial oils etc.</li>
                    <li>Sizes available: 200ml</li>
                    <li>Category: Hair Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Hair Nutrients</h2>
                  <p class="item-intro text-muted">Contains major nutrients to provide you with healthy hair. Prevents breakage/loss, treats dandruff, stimulates growth.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/.jpg" alt="">
                  <p>Directions: Use to massage scalp daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Coconut oil, Jojoba oil, Castor oil, Moringa, Essential oils etc.</li>
                    <li>Sizes available: 200g, 165g, 100g</li>
                    <li>Category: Hair Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Herbal Treatment Shampoo</h2>
                  <p class="item-intro text-muted">Moisturizes, smoothens, thickens, and prevents loss of hair.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/shampoo.jpg" alt="">
                  <p>Directions: Apply mildly to wet hair. Massage to scalp and rinse.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Aloe vera, Mint, Menthol, Vitamin E, Essential oils etc.</li>
                    <li>Sizes available: 500ml, 250ml</li>
                    <li>Category: Hair Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal18" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal19" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal20" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Organic Treatment Soap</h2>
                  <p class="item-intro text-muted">Clears pimples, acne, heat rash, eczema etc. within three days.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/treatmentsoap.jpg" alt="">
                  <p>Directions: Apply to wet face and leave on for 5-10 minutes then wash off. Use twice daily.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Black soap, Tea tree oil, Cinnamon, Honey etc.</li>
                    <li>Sizes available: 150g</li>
                    <li>Category: Facial Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal21" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Exfoliating Scrub</h2>
                  <p class="item-intro text-muted">Gives a brighter skin as it eliminates dead cells.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Directions: Apply to wet face and leave on for 10-20 minutes then rinse off with water. Use twice a week.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Turmeric, Honey, Coffee ground, Cinnamon, Essential oils etc.</li>
                    <li>Sizes available: 250g</li>
                    <li>Category: Facial Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal22" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Dark Circles Gel</h2>
                  <p class="item-intro text-muted">Treats dark circles, eye bags etc.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/.jpg" alt="">
                  <p>Directions: Use before sleep.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Aloe vera, essential oils.</li>
                    <li>Sizes available: 30g</li>
                    <li>Category: Facial Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal23" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Facial Treatment Cream</h2>
                  <p class="item-intro text-muted">Treats sunburn, darks pots, wrinkles, finelines. Gives a glowing skin.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/turmeric.jpg" alt="">
                  <p>Directions: Apply daily before bed. Wash face before use.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Turmeric, Essential oils, Miracle powder etc.</li>
                    <li>Sizes available: 30g</li>
                    <li>Category: Facial Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal24" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Maxi Spot-remover</h2>
                  <p class="item-intro text-muted">Clears pimples/acne and their scars, dark spots, finelines.</p>
                  <img class="img-fluid d-block mx-auto" src="img/products/maxispotremover.jpg" alt="">
                  <p>Directions: Apply before bed at night. Wash face before use.</p>
                  <ul class="list-inline">
                    <li>Main ingredients: Zinc, Stearic acid, E wax etc.</li>
                    <li>Sizes available: 30ml</li>
                    <li>Category: Facial Care Products</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModal25" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" type="button" style="background-color: #DAA520;">
                    <a href="form.php" style="color: white; text-decoration: none;"><i class="fa fa-shopping-cart"></i>
                     Order Product</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </body>

</html>
<?php require 'footer.php'; ?>

<script type="text/javascript">
  $(document).on('click', 'a[href^="#portfolio"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
  });
</script>