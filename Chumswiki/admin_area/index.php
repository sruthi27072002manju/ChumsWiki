<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard </title>
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css-->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg bg-info navbar-light bg-info">
        <div class="container-fluid p-0">
        <img src="../Images/logo.png"  alt=" " class="logo">
        <nav class="navbar navbar-expand-lg">
        <ul class="navbar-nav">
        <li class="nav-item">
          <a  href="#"  class="nav-link " >Welcome Guest</a>
        </li>
     </ul>
 </nav>
</div>
</nav>

<!--second child-->
<div class="bg-light">
    <h3 class="text-center p-2">Manage details</h3>
</div>
<!--third child-->
<div class="row">
    <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
<div class="px-5">
    <a href="#"> <img src ="../Images/pd1.jpeg" class="admin_image"></a>
    <p class="text-light text-center ">Admin Name</p>
</div>
<div class="button text-center">
    <button class= my-3><a href="insert_products.php" class="nav-link text-light bg-info my-1">Insert products</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">View producsts</a></button>
    <button class= my-3><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">View categories</a></button>
    <button class= my-3><a href="index.php?insert_brands" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">All orders</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">All payments</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1">List users</a></button>
    <button class= my-3><a href="" class="nav-link text-light bg-info my-1"> Logout</a></button>
</div>
    </div>
</div>


<!--fourth-->
<div class="container my-3">
    <?php
    if(isset($_GET['insert_category'])){
        include('insert_categories.php');
    }
    ?>
    <?php
    if(isset($_GET['insert_brands'])){
        include('insert_brands.php');
    }
    ?>
</div>


 <!--bootstrap js link-->  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>