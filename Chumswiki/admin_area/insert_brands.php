<?php
include('../includes/connect.php');
if(isset($_POST['insert_category'])){
    $category_title=$_POST['cat_title'];
    //Select data frpm database
    $select_query="Select * from 'categories' where category_title='$Brand_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0){
        echo "<script>alert('This category is present inside the database')</script>";
    }else{
    $insert_query="insert into 'categories' (Category_title) values ('$category_title')";
    $result=mysqli_query($con,$insert_query);
    if($result){
        echo "<script>alert('category has been inserted successfully') </script>";
    }
}

}
?>
<h2 class="text-center">Insert Brands</h2>







<form action="" method="post" class="mb-2">
<div class="input-group w-90 mb-2">
  <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
  <input type="text" class="form-control" name="bat_title "placeholder="Insert brands" aria-label="Brands" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2">
 
  <input type="submit" class="bg-info" name="Insert_cat " value="Insert categories" aria-label="Brand_title" aria-describedby="basic-addon1 "class="bg-info">


</div>
</form>