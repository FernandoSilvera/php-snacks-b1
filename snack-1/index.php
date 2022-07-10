<!-- Creare un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$matches = [
  [
    'homeTeam' => 'L.A. Lakers',
    'awayTeam' => 'Golden State Warriors',
    'homePoints' => 105,
    'awayPoints' => 100,
  ],
  [
    'homeTeam' => 'Boston Celtics',
    'awayTeam' => 'Toronto Raptors',
    'homePoints' => 89,
    'awayPoints' => 98,
  ],
  [
    'homeTeam' => 'Miami Heat',
    'awayTeam' => 'Chicago Bulls',
    'homePoints' => 75,
    'awayPoints' => 108,
  ],
  [
    'homeTeam' => 'Dallas Mavericks',
    'awayTeam' => 'Brooklyn Nets',
    'homePoints' => 88,
    'awayPoints' => 92,
  ],
  [
    'homeTeam' => 'San Antonio Spurs',
    'awayTeam' => 'Cleveland Cavaliers',
    'homePoints' => 90,
    'awayPoints' => 97,
  ],
]
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
  <main>
    <div class="container py-5 text-center">
      <?php
      for ($i = 0; $i < count($matches); $i++) { 
        $currentMatch = $matches[$i];
      ?>
        <p><?php echo $currentMatch["homeTeam"] . " - " . $currentMatch["awayTeam"] . " | " . $currentMatch["homePoints"] . "-" . $currentMatch["awayPoints"] ?></p>
      <?php } ?>
    </div>
  </main>
</body>