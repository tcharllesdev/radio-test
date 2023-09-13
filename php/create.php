<?php

if (isset($_POST['name']) && isset($_POST['gender'])) {
  include "../db_conn.php";

  $name = $_POST['name'];
  $gender = $_POST['gender'];

  if (empty($name)) {
      header("Location: ../index.php?ms=Name is required");
      exit;
  } else {
      if (isset($_POST['programmer'])) {
          $programmer = "YES";
      } else {
          $programmer = "NO";
      }

      // Defina o fuso horário local
      date_default_timezone_set('America/Sao_Paulo'); // Substitua 'America/Sao_Paulo' pelo fuso horário da sua localização

      // Capturar a data e hora atual
      $timestamp = date('Y-m-d H:i:s');
     

      $sql = "INSERT INTO users (name, gender, programmer, timestamp) VALUES ('$name', '$gender', '$programmer', '$timestamp')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
          $ms = "Successfully Created";
          header("Location: ../index.php?ms=$ms");
          exit;
      } else {
          $ms = "Unknown Error occurred";
          header("Location: ../index.php?ms=$ms");
          exit;
      }
  }
} else {
  header("Location: ../index.php");
  exit;
}
