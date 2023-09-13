<?php
if (
    isset($_POST['gender']) &&
    isset($_POST['renda']) &&
    isset($_POST['dor']) &&
    isset($_POST['mudar']) &&
    isset($_POST['terapia'])
) {
    include "../db_conn.php";

    $gender = $_POST['gender'];
    $renda = $_POST['renda'];
    $dor = $_POST['dor'];
    $mudar = $_POST['mudar'];
    $terapia = $_POST['terapia'];

    // Defina o fuso horário local
    date_default_timezone_set('America/Sao_Paulo'); // Substitua 'America/Sao_Paulo' pelo fuso horário da sua localização

    // Capturar a data e hora atual
    $timestamp = date('Y-m-d H:i:s');

    $sql = "INSERT INTO users (gender, renda, dor, mudar, terapia, timestamp) 
            VALUES ('$gender', '$renda', '$dor', '$mudar', '$terapia', '$timestamp')";
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
} else {
    header("Location: ../index.php");
    exit;
}
?>
