<!DOCTYPE html>
<html lang="es-mx" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>Creador de seriales no repetidos</title>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <?php require('app/control.php'); ?>
</head>
<body>
  <form id="dataSend" method="post">
    <label for="cantidad">¿Cuántos elementos agregar?</label>
    <input id="cant" type="number" name="cantidad">
    <input type="hidden" name="trigger" value="usrinput">
    <button id="boton" type="submit" name="add-usr">Enviar</button>
  </form>
  <div class="resultado">
    <div id="error"></div>
    <div id="elementos"></div>
  </div>
</body>
<script type="text/javascript" src="app/script.js"></script>
</html>
