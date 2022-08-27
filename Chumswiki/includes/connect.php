<?php 

$con=mysqli_connect('localhost','root','','mystore');
if(!$con){
    
    die(mqsqli_error($con));
}

?>