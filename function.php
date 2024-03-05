<?php
require 'config.php';
if(isset($_POST['action'])){
    if($_POST['action']=="insert"){
        insert();
    }else if($_POST['action']=="edit"){
     edit();
    }else{
        delete();
    }
}
function insert(){
    global $conn;
     $name = $_POST['product_name'];
     $weight = $_POST['weight'];
     $certification =  $_POST['certification'];
     $price = $_POST['price'];
     $int_date = $_POST['int_date'];
     $exp_date = $_POST['exp_date'];

   $query = "INSERT INTO product_details VALUES('$name','$weight','$certification','$price','$int_date','$exp_date','');";
       mysqli_query($conn,$query);
       echo "DATA INSERTED SUCCESSFULLY";
}
function edit(){
  global $conn;

  $id = $_POST['id'];
  $name = $_POST['product_name'];
  $weight = $_POST['weight'];
  $certification = $_POST['certification'];
  $price = $_POST['price'];
  $int_date = $_POST['int_date'];
  $exp_date = $_POST['exp_date'];

  $query = "UPDATE product_details SET name='$name',weight='$weight',cert_details='$certification',price=$price,intro_date='$int_date',exp_data='$exp_date' WHERE product_id=$id;";
  
  mysqli_query($conn,$query);

  echo "DATA UPDATED SUCCESSFULLY";

}
function delete(){
  global $conn;
  $id = $_POST['action'];
  $query = "DELETE FROM product_details WHERE product_id=$id";
  mysqli_query($conn,$query);
  echo "DELETED SUCCESSFULLY";

}
?>