<?php 
function generate_pw($lenght) {
    $data = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!%&.;,-"@+*';

    if($lenght >= 1) {
        $random_pw = substr(str_shuffle($data), 0, $lenght);
        return $random_pw;
    } else {
        return $random_pw = "Errore!!! devi per forza inserire un numero maggiore di 0!!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strong password generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container pt-5">
        <h1 class="text-center">Strong Password Generator</h1>
        <h2 class="text-center">Genera una password sicura</h2>
        <form action="index.php" method="GET">
            <div class="d-flex justify-content-between">
                <label for="pw-lenght">Lunghezza password: </label>
                <input type="text" id="pw-lenght" name="pw-lenght">
            </div>

            <button type="submit" class="btn btn-primary"> Invia </button>
        </form>

        <h3> La tua nuova password è: <?php echo generate_pw($_GET['pw-lenght'])?> </h3>
    </div>
    
</body>
</html>