<?php session_start();
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
    <div class="text-center">
    <h2 class="mt-3">Password generata</h2><hr>
    <h3><?php echo $_SESSION['password']  ?></h3>
    <p><a href="./index.php">Torna a generatore password</a></p>
    </div>
</body>
</html>