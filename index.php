<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <title>E-commerce Project</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/332a215f17.js" crossorigin="anonymous"></script>
   </head>
  <body>
    <!--Nav-->
    <nav class="navbar navbar-expand-sm navbar-dark bg-black">
        <div class="container">
          <img src="images/Unknown.png" class="bruh">
          <a href="#" class="navbar-brand">Health Bears</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a href="#"class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Services</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Products</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">About</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link"><i class="fas fa-shopping-cart fa-2x"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--End of NAv-->
      <!-- SLIDER -->
      <section id="main">
        <div id="Carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
            <li data-target="#Carousel" data-slide-to="1"></li>
            <li data-target="#Carousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">dog shelter</h1>
                  <p class="lead">What Do Animal Shelters Do? At professionally run facilities, frightened animals are reassured, sick and injured animals receive treatment or a peaceful end to their suffering, and the animals' living quarters are kept clean and dry.</p>
                  <a href="#" class="btn btn-color slide-btn btn-lg">Sign Up Now</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-2">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block mb-5">
                  <h1 class="display-3 h-color">adoption</h1>
                  <p class="lead">Submit an application for adoption. Go through an interview with one of the shelter's counselors and meet rescue dogs. If you pass the interview and the pooch you chose is the right fit for your family, you might need to pay a small adoption fee before bringing them home.</p>
                  <a href="#" class="btn btn-color slide-btn btn-lg">Learn More</a>
                </div>
              </div>
            </div>
    
            <div class="carousel-item carousel-image-3">
              <div class="container">
                <div class="carousel-caption d-none d-sm-block text-right mb-5">
                  <h1 class="display-3 h-color">having a fun time</h1>
                  <p class="lead">“With proper positive training and a little time and patience, dogs can learn to remain calm in exciting situations,”</p>
                  <a href="#" class="btn btn-color slide-btn btn-lg">Learn More</a>
                </div>
              </div>
            </div>
          </div>
    
          <a href="#Carousel" data-slide="prev" class="carousel-control-prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
    
          <a href="#Carousel" data-slide="next" class="carousel-control-next">
            <span class="carousel-control-next-icon"></span>
          </a>
        </div>
      </section>
      <!--End of slider-->
      <!--Service Section==========-->
      <section class="services py-5 text-center">
          <div class="container">
              <div class="row">
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                      <span class="service-icon">
                          <i class="fas fa-dog fa-2x"></i>                            
                      </span>
             <h5 class="font-weight-bold text-uppercase">Loving Dogs</h5>
             <p class="text-capitalize">Every dog in this shelter is sure to love you back, just have to find thhe right connection</p>
                  </div>
                  <!--end of Service=-->
                  <!--Single Service-->
                  <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-home fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">Certified Shelter</h5>
           <p class="text-capitalize">We are a certified shelter with the right needs to serve you the right dog</p>
                </div>
                <!--end of Service=-->
                <!--Single Service-->
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <span class="service-icon">
                        <i class="fas fa-user-shield fa-2x"></i>                            
                    </span>
           <h5 class="font-weight-bold text-uppercase">Safe and Friendly</h5>
           <p class="text-capitalize">We make sure these dogs stay safe and fed well, we wouldn't want a sad dog.</p>
                </div>
                <!--end of Service=-->
              </div>
          </div>
      </section>
      <!---End of Service Section=======-->
 <!-- Product section -->
 <section id="products" class="products py-5">
  <div class="container">
    <!-- section title -->
    <div class="row">
      <div class="col-10 mx-auto col-sm-6 text-center">
        <h1 class="text-capitalize product-title">Take a look at our newest dogs</h1>
      </div>
    </div>
    <!-- end section title -->
     <!-- Product items -->
    <div class="row product-items" id="product-items">
     
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="images/Unknown-8.jpeg" class="card-img-top product-img" alt="">
            </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="store-item-name"></h5>
              <span><i class="fas fa-dollar-sign"></i>350</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="images/Unknown-6.jpeg" class="card-img-top product-img" alt="">
        </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"> </h5>
              <span><i class="fas fa-dollar-sign"></i>350</span>
            </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
      <!-- single items -->
      <div class="col-10 col-sm-6 col-lg-4 mx-auto my-3">
        <div class="card single-item">
          <div class="img-container">
            <img src="images/Unknown-3.jpeg" class="card-img-top product-img" alt="">
          </div>
          <div class="card-body">
            <div class="card-text d-flex justify-content-between text-capitalize">
              <h5 id="item-name"></h5>
              <span><i class="fas fa-dollar-sign"></i>750</span>
           </div>
          </div>
        </div>
      </div>
      <!-- end of single item -->
    </div>
    <!-- end of store items -->
  </div>
</section>
<!-- end of store section -->
  <!---End of Product Section===-->
  <!---About Section=====-->
  <section id="about-sec">
     <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 text-center">
          <img src="images/Unknown-10.jpeg" width="450" height="150" 
          class="img-fluid watch-img">
        </div>
        <div class="col-lg-7 text-lg-right  text-center text-color about-text">
          <h1 >About Company</h1>
          <p class="text">We believe that people should have that one best friend that always stays by your side. we give it our all to make sure this happens.</p>
        </div>
      </div>
      </div>
      </section>
      <!---End of About Section---->
      
      <!--Contact us Section-->
       <!--Contact US-->
    <section class="contact py-5">
      <div class="container">
          <h2 class="section-heading">Contact Us</h2>
          <form class="col-lg-6 offset-lg-3">
              <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" id="message" placeholder="Type your message" row="5">
                  
              </textarea>
              </div>
              <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="check">
                  <label class="form-check-label" for="check">Subscribe to newsletter</label>
              </div>
              <div class="text-center">
                  <button class="btn btn-lg btn-color cont-btn">Submit</button>
              </div>
          </form>
      </div>
  </section>
  <!--End of Contact Section-->
    <!--Footer-->
    <footer class="footer mt-5">
      <div class="text-center py-5">
          <h2 class="py-3">Animals have voices too.</h2>
         <div class="mx-auto heading-line"></div>
       </div>
      <div class="container">
          <div class="row mb-3">
              <div class="col-lg-8 offset-lg-2 text-center">
                  <p>Follow us and help us spread the word. </p>
                  <div class="justify-content-center">
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-twitter fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                    
                    </div>
             </div>
          </div>
          <div class="copyright text-center py-3 border-top text-light">
            <p>&copy; Copy Right Time Value</p>
              
          </div>
      </div>

  </footer>



 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>