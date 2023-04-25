<?php

function getRandomStr($n) {
  $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $randomString = '';
  for ($i = 0; $i < $n; $i++) {
    $index = rand(0, strlen($char) - 1);
    $randomString .= $char[$index];
  }
  return $randomString;
}

function valida($post){
  $errors = array();
  if (empty($post)) {
    array_push($errors, 'Ingrese cantidad.');
  } elseif ($post < 0) {
    array_push($errors, 'Ingrese una cantidad mayor a cero.');
  } elseif ($post === 0) {
    array_push($errors, 'Ingrese una cantidad diferente a cero.');
  }
  return $errors;
}

if (!empty($_POST['trigger']) && $_POST['trigger'] == 'usrinput'){
  $errors = valida($_POST['cantidad']);
  if (count($errors) == 0){
    $usr = array();
    $cant = $_POST['cantidad'];
    $i = 0;
    $kill = false;
    while(!$kill){
      $rand = getRandomStr(1);
      $elemento = "unico_$rand";
      $existingElement = array_search($elemento, array_keys($usr));
      if ($i == $cant) {
        $kill = true;
      } else {
        if ($existingElement == false) {
          $randkey = getRandomStr(3);
          $usr += ["$elemento" => $randkey];
          $i++;
        }
      }
    }
    $data = array(
      'success'  => true,
      'array' => $usr
    );
  } else {
    $data = array(
      'errors' => $errors
    );
  }
  echo json_encode($data);
}
?>
