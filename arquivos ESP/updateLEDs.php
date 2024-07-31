<?php
require 'database.php';

if (!empty($_POST)) {
  // Coleta dos dados enviados via POST
  $id = $_POST['id'];
  $lednum = $_POST['lednum'];
  $ledstate = $_POST['ledstate'];
  $user_id = 1; // Defina o ID do usuário conforme necessário

  // Validação básica dos parâmetros
  if (!in_array($lednum, ['LED_01', 'LED_02'])) {
    die('LED number is invalid.');
  }
  if (!in_array($ledstate, ['ON', 'OFF'])) {
    die('LED state is invalid.');
  }

  // Conecta ao banco de dados
  try {
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Atualiza o estado do LED e também o user_id
    $sql = "UPDATE esp32_table_dht11_leds_update SET $lednum = ?, user_id = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($ledstate, $user_id, $id));
  } catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
  } finally {
    Database::disconnect();
  }
}
?>