<?php

require_once('connect.php');
$q="INSERT INTO `series` (`id`, `title`, `date_insert`, `cat_id`) VALUES (NULL, NULL, NULL, NULL);";
for ($i=1; $i <= 9; $i++) { 
      $r=mysqli_query($dbc,$q);
      if($r){
        echo $i." ok</br>";
      }else{
          echo mysqli_error($dbc);
      }
}