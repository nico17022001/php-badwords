<?php 
$name = $_GET['email'];
$censura = $_GET['censura'];
$newText = str_replace($censura, '***', $name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pagina atterraggio</title>
</head>
<body>
  <div>
    <h2>La tua email con la sua lunghezza</h2>
    <ul>
      <li>Email: <?php echo $name ?></li>
      <li>Lunghezza Emaul: <?php echo strlen($name) ?> </li>
    </ul>
  </div>

  <div>
    <h2>La tua email con la censura</h2>
    <ul>
      <li>Email: <?php echo $newText ?></li>
      <li>Lunghezza nuova Email: <?php echo strlen($newText) ?> </li>
    </ul>
  </div>

</body>
</html>