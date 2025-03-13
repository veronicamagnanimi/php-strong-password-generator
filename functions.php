<?php  
 if (isset($_GET['length'])) {

   $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=';
   $password = '';

   for ($i = 0; $i < $_GET['length']; $i++) {
    $random1 = rand(0, strlen($characters) -1);
    $random2 = substr($characters, $random1, 1);
    $password .= $random2;
   }

 }
   ?>