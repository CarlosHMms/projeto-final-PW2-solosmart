<?php
include 'database.php';

if (!empty($_POST)) {
  $id = $_POST['id'];

  $myObj = (object) array();

  $pdo = Database::connect();

  // Seleciona a coluna user_id também
  $sql = 'SELECT * FROM esp32_table_dht11_leds_update WHERE id = ?';
  $q = $pdo->prepare($sql);
  $q->execute(array($id));
  $row = $q->fetch(PDO::FETCH_ASSOC);

  if ($row) {
    $date = date_create($row['date']);
    $dateFormat = date_format($date, "d-m-Y");

    $myObj->id = $row['id'];
    $myObj->temperature = $row['temperature'];
    $myObj->humidity = $row['humidity'];
    $myObj->status_read_sensor_dht11 = $row['status_read_sensor_dht11'];
    $myObj->LED_01 = $row['LED_01'];
    $myObj->LED_02 = $row['LED_02'];
    $myObj->ls_time = $row['time'];
    $myObj->ls_date = $dateFormat;
    $myObj->user_id = $row['user_id']; // Adicionado user_id

    $myJSON = json_encode($myObj);

    echo $myJSON;
  } else {
    echo json_encode(array("error" => "No data found"));
  }

  Database::disconnect();
}
?>