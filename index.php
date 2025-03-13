<?php
require_once './functions.php'; 

if ($password != '') {

    session_start();
    $_SESSION['password'] = $password;
    header('Location: ./result.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <h1 class="text-center my-3">Password Generator</h1> <hr>
    <form method="GET">
        <div class="d-flex flex-column align-items-center justify-content-center ">
            <label for="length">Inserisci i caratteri minimi</label>
            <input type="number" name="length" id="length" min="5" placeholder="Minimo 5 caratteri">
            <button class="btn btn-secondary mt-3">Genera</button>
        </div>
    </form>

   <div class="text-center">
    <?php
    if($password != "") {
        ?>
    <h3 class="text-center mt-3">Password generata di <?php echo $_GET['length']  ?> caratteri:</h3>
    <h4><?php echo $password ?></h4>
    <?php 
    }
    ?>
    </div>
</body>

</html>