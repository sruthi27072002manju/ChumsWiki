<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products-Admin Dashboard</title>
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
<body class="bg-light">
<div class="container mt-3">
    <h1 class="text-center">Insert Products</h1>
    <!--form-->
    <form action=""  method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_title" class="form-label">Product title</label>
            <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter the product title" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_Description" class="form-label">Product_Description</label>
            <input type="text" name="product_Description" id="product Description" class="form-control" placeholder="Enter the product Description" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_Keywords" class="form-label">Product_Keywords</label>
            <input type="text" name="product_Keywords" id="product Keywords" class="form-control" placeholder="Enter the product Keywords" autocomplete="off" required="required">
        </div>
        <!--categories-->
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="procuct_categories" id="" class="form-select">
                <option value="">select a category</option>
                <option value="">Mensural cups</option>
                <option value="">Reusable cotton pads</option>
                <option value="">Mensural Sponge</option>
                <option value="">Mensural disc</option>
                <option value="">Overnight Reusable Pad Panties</option>
            </select>
    </form>
</div>
<!--brands-->
<div class="form-outline mb-4 w-50 m-auto">
            <select name="procuct_brands" id="" class="form-select">
                <option value="">select a brand</option>
                <option value="">Noraa</option>
                <option value="">Heyday</option>
                <option value="">Carmesi</option>
                <option value="">Pee safe</option>
                <option value="">Saathi</option>
                <option value="">Everteen</option>
                <option value="">Aandi</option>
                <option value="">Puraganics</option>
                <option value="">Vivanion </option>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      

            </select>
    </form>
</div>

<div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image" class="form-label">Product image1 </label>
            <input type="file" name="product_image" id="product_image1" class="form-control"  required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_image2" class="form-label">Product image2</label>
            <input type="file" name="product_image2" id="product_image2" class="form-control"  required="required">
        </div>

        <div class="form-outline mb-4 w-50 m-auto">
            <label for="product_price" class="form-label">Product Price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter the product price" autocomplete="off" required="required">
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-info px-3" value="Insert Products">
        </div>
    
</body>
</html>