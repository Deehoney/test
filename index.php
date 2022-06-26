<!DOCTYPE html>
<html lang="en">
<head>
<title>Photos Library</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Photos Gallery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#nature">Nature</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#architeture">Architeture</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#travel">Travel</a></li>
          </ul>
      </ul>
    </div>
  </div>
</nav>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/arc 5.jpg" class="d-block w-100" alt="Achieteture">
      <div class="carousel-caption d-none d-md-block">
        <h3>Architeture</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/nature1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Nature</h3>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/travel1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h3>Travel</h3>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<a id="nature">
<section class="my-4">
    <div class="py-4">
       <h2 class="text-center">Nature</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature 3.jpg" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature 4.jpg" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/nature2.jpg" alt="" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>
<a id="architeture">
<section class="my-4">
    <div class="py-4">
       <h2 class="text-center">Architeture</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/arc1.webp" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/arc2.jpg" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/arc2.jpg" alt="" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>
<a id="travel">
<section class="my-4">
    <div class="py-4">
       <h2 class="text-center">Travel</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel 5.jpg" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel7.jpg" alt="" class="img-fluid pb-3">
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/travel 6.jpg" alt="" class="img-fluid pb-3">
            </div>
        </div>
    </div>
</section>
</a>
 <!-- Contact us section -->
 <a id="contact">
<section class="my-4">
    <div class="py-4">
       <h2 class="text-center">Contact Us </h2>
    </div>
 <div class="w-50 m-auto">
  <form action="about.php" method="post">
     <div class="form-group">
      <label> Name: </label>
      <input type="text" name="name" class="form-control">
     </div>

     <div class="form-group">
      <label> Email: </label>
      <input type="email" name="email" class="form-control">
     </div>
     <div class="form-group">
      <label> Number: </label>
      <input type="tel" name="number" class="form-control">
     </div>
     <br>
     <div>
     <button type="submit" class="btn btn-success">Submit</button>
     <div>
  </form>
</div>
</section>
</a>
<a id="about">
<section class="my-4">
    <div class="py-4">
       <h2 class="text-center">About</h2>
    </div>
<div class="container-fluid">
</div>
<h3 class= "text-center"> DEEHONEY MEDIA</h3><br>
<div class="container-fluid">
        <div class="row">
                <img src="images/man_holding_camera.jpg" alt="" class="img-fluid">
            </div>
<p class = "text-center"><b> I am a passionate photographer intrested in working any type of job be it Birthday shoot, Pre- wedding shoot, wedding dhoot or any type of shoot, I am a full time freelancer with an experience of 6 years  </b></p>
</section>
</a>

<!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              <label class="form-label" for="form5Example21">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
      I am a passionate photographer intrested in working any type of job be it Birthday shoot, Pre- wedding shoot, wedding dhoot or any type of shoot, I am a full time freelancer with an experience of 6 years
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#" class="text-white">Home</a>
            </li>
            <li>
              <a href="#nature" class="text-white">Nature</a>
            </li>
            <li>
              <a href="#architeture" class="text-white">Architeture</a>
            </li>
            <li>
              <a href="#travel" class="text-white">Travel</a>
            </li>
            <li>
              <a href="#contact" class="text-white">Contact Us</a>
            </li>
            <li>
              <a href="#about" class="text-white">About Us</a>
            </li>

          </ul>
        </div>
        <!--Grid column-->

       
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-white" >Deehoney</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>