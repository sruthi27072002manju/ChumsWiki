<?php 
include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--FONT-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
 <!--navbar-->
 <div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg bg-info navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./About.html">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./awareness.html">Awareness</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Store</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./Calender/Calender.html">Calender</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--Second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

    </ul>
</nav>

<!--third child-->
<div class="bg-light">
    <h3 class="text-center">ChumsWiki </h3>
    <p class="text-center">A Sustainable Commerce Site for menstruation days with guided facts despite of diversity.</p>
</div>

<!--fourth child-->
<div class="row">
    <div class="col-md-10">
         <!--Products-->
         <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
            <img src="./Images/pd1.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Noraa</h5>
                <p class="card-text-center">Noraa is a homegrown organic and sustainable feminine hygiene brand.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://noraa.in/?utm_source=Google_Ads&utm_medium=g&utm_campaign=16228418552&gclid=CjwKCAjw3qGYBhBSEiwAcnTRLmc6tx2NObivIfQPL-pjeIxgVs4qkTgmz0X9YAA0YVqVt3m52VtXTRoCgK4QAvD_BwE" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
            <img src="./Images/pd2.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Heyday</h5>
                <p class="card-text">Made from pure organic plant-based fibers, Heyday’s pads and panty liners are biodegradable..</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://heydaycare.com/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./Images/pd3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Carmesi</h5>
                <p class="card-text">Carmesi is known for its period cramp relieving roll-on, but the brand also makes completely natural sanitary pads made of corn and bamboo</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://mycarmesi.com/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
            <img src="./Images/pd4.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Pee Safe</h5>
                <p class="card-text-center">Pee Safe’s 100% organic cotton, biodegradable sanitary pads are also made entirely of bamboo pulp along with organic cotton.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://www.peesafe.com/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./Images/pd5.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Saathi</h5>
                <p class="card-text">Saathi sanitary napkins using highly-absorbent banana fibre and are comfortable for the user as well, and do not cause rashes or chronic illnesses.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://saathipads.com/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./Images/pd6.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Everteen</h5>
                <p class="card-text">Everteen sanitary pads feature a 100 per cent cotton top, biodegradable polymer gel, sterilised air-laid paper, a negative ion anti-bacterial strip and medical-grade non-toxic glue.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://everteen.in/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-2">
            <div class="card">
            <img src="./Images/pd9.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Anandi</h5>
                <p class="card-text-center">Aakar is a social enterprise that enables women in rural India to produce and distribute the affordable and 100 per cent compostable Anandi sanitary napkins within their communities.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://www.aakarinnovations.com/anandi" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./Images/pd7.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Purganics</h5>
                <p class="card-text">Purganics chose cotton because it is a naturally sustainable, hypoallergenic material, which is also pH compatible with delicate vaginal skin.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="https://www.pureganics.in/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
            <div class="col-md-4 mb-2">
            <div class="card">
                <img src="./Images/pd8.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Vivanion</h5>
                <p class="card-text">Apart from being 100 per cent bio-degradable, Vivanion pads suppresses bacteria growth and odour, improves blood circulation, immunity against infections and reproductive health.</p>
                <a href="#" class="btn btn-info">Add to cart</a>
                <a href="http://www.vivanion.in/" class="btn btn-secondary">View More</a>
            </div>
            </div>
            </div>
        </div>


   

</div>


   
<div class="col-md-2 bg-secondary p-0 ">
        <!--sidenav-->
        <!--Brands to be displayed-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Delivery Brands</h4></a>
            </li>
            <li class="nav-item ">
                <a href="" class="nav-link text-light"><h4>Noraa</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Heyday</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Carmesi</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Pee safe</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Saathi</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Everteen</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Aandi</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Puraganics</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Vivanion</h4></a>
            </li>
        </ul>
        <!--categories to be displayed-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Mensural cups</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Reusable cotton pads</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Mensural Sponge</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Mensural disc</h4></a>
            </li>
            <li class="nav-item ">
                <a href="#" class="nav-link text-light"><h4>Overnight Reusable Period Panties</h4></a>
            </li>
           
        </ul>
    </div>
</div>




<!--last child-->
<div class="bg-info p-3 text-center"><p>All rights reserved @ IHF040-2022</p></div>
 </div>  




<!--BOOTSTRAP JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>