<?php

if (isset($_post['submit'])) {

  $card_title = $_post['card_title'];
  $card_description = $_post['card_description'];
 



  $$card_image = $_FILES['card_image']['name'];
  

  $card_image =  $_FILES['card_image']['tmp_name'];
  

 
    move_uploaded_file($_image1, "/partial/img/$_image");
   
    $insert_card = "INSERT INTO `insert category` (`card_title`, `card_description`, `card_image`) VALUES ('$card_title', '$card_description ', '$card_image')";
    $result = mysqli_query($conn, $insert_card);
    if ($result) {
      echo 'your data has  been inserted';
    } else {
      echo "you have not inserted the product" ;
    }
  }


?>|