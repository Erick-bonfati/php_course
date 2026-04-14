<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php

$valor = true;

if(true):
   $valor = 1;
elseif(false):
  $valor = 2;
else:
  $valor = 3;
endif;

?>

<?php if($valor): ?>
  <p>O valor é verdadeiro</p>
<?php else: ?>
  <p>O valor é falso</p>
<?php endif; ?>
