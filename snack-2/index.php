<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

$name = key_exists("name", $_GET) ? $_GET["name"] : "";
$email = key_exists("email", $_GET) ? $_GET["email"] : "";
$age = key_exists("age", $_GET) ? $_GET["age"] : "";
$validEmail = false;
$validData = false;

if (strpos($email, ".") !== false && strpos($email, "@") !== false) {
  $validEmail = true;
}

if (!is_nan($age) && strlen($name) >= 4 && $validEmail) {
  $validData = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
  <main>
    <div class="container py-5 text-center">
      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" value="<?php echo $name ?>">
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" value="<?php echo $email ?>" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="text" class="form-control" value="<?php echo $age ?>" id="age">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

        <?php 
        if ($validData) { ?>
          
          <div class="alert alert-success mt-4" role="alert">
            Accesso Riuscito
          </div>
        
        <?php } else { ?>
        
          <div class="alert alert-danger mt-4" role="alert">
            Accesso Negato
          </div>

        <?php } ?>
      </form>
    </div>
  </main>
</body>