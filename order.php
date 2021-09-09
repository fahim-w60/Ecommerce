<?php
include("db.php");
require_once 'session.php';

      $cus_id= $_SESSION['id'];

      $cart = $_SESSION['cart'];
          $sub=0;
      foreach ($cart as $key => $value) {


      $status = 'pending';

      $name= $value['name'];
      $price = $value['price'];
      $quantity =$value['qty'];
      $sub += ($value['price'] * $value['qty']);

  





$amount =  $sub;
  $query=  "INSERT INTO `myorder`( `cust_id`,`name`,`price`,`quantity`, `amount`,`date`,`status`) VALUES ('$cus_id','$name','$price','$quantity','$amount',NOW(),'$status')";



      mysqli_query($db, $query);

  }






         unset($_SESSION['cart']);
           header("refresh:0;url=myprofile.php");



 ?>
