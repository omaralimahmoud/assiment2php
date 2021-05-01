<?php 
require_once ("function.php");
if (isset($_POST['submit'])) {
    
    $name= $_POST['name'];
    $des= $_POST['dec'];
    $price= $_POST['price'];
    //echo $name . "<br>";
    ///echo $des . "<br>";
    //echo $price ."<br>";
      $errors=[];
      if (empty($name) ) {
          $errors[]= "the name is required";
      }elseif (!is_string($name) || is_numeric($name)) {
          $errors[]=" the input must be string";
      } elseif (strlen($name)<5 ||strlen($name) >255 ) {
           $errors[]= "must be min 5 max 255 ";
      }

      if (!is_string($des) || is_numeric($des)) {
            $errors[]="must be des string";
      }
      if (empty($price)) {
           $errors[]="the pricce is rqquired";
      }elseif (!is_numeric($price)) {
           $errors[]= "the price must be number";
      }elseif ($price<0) {
          $errors[]="must be number 0>";
      }




      if (empty($errors)) {
            echo "Name:    $name <br>";
           echo " Dscrption  $des <br>";
           echo "price";
           
           getPriceWithDiscount ($price);

      }else
      {
          print_r($errors);
      }


}
