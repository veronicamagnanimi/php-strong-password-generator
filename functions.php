<?php

$password = '';

if (isset($_GET['length'])) {
  $characters = '';

  if (isset($_GET['uppercase'])) {
    $characters .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  }
  if (isset($_GET['lowercase'])) {
    $characters .= 'abcdefghijklmnopqrstuvwxyz';
  }
  if (isset($_GET['numbers'])) {
    $characters .= '0123456789';
  }
  if (isset($_GET['symbols'])) {
    $characters .= '!@#$%^&*()_+-=';
  }

  if ($characters !== '') {
    for ($i = 0; $i < $_GET['length']; $i++) {
      $random1 = rand(0, strlen($characters) - 1);
      $random2 = substr($characters, $random1, 1);
      $password .= $random2;
    }
  }

}
?>