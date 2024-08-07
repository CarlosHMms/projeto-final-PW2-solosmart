<?php
require_once 'database.php';

if (!empty($_POST['id'])) {
  $id = $_POST['id'];

  echo "Received ID: $id\n";

  $pdo = Database::connect();
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT * FROM esp32_table_dht11_leds_update WHERE id = ?";
  $q = $pdo->prepare($sql);
  $q->execute(array($id));

  $data = $q->fetch(PDO::FETCH_ASSOC);

  if ($data) {
    // Formatação da data
    $date = date_create($data['date']);
    $dateFormat = date_format($date, "d-m-Y");

    $response = array(
      'id' => $data['id'],
      'temperature' => $data['temperature'],
      'humidity' => $data['humidity'],
      'status_read_sensor_dht11' => $data['status_read_sensor_dht11'],
      'LED_01' => $data['LED_01'],
      'LED_02' => $data['LED_02'],
      'ls_time' => $data['time'],
      'ls_date' => $dateFormat,
      'user_id' => $data['user_id'] // Incluindo user_id
    );

    echo json_encode($response);
  } else {
    echo json_encode(array("error" => "No data found"));
  }

  Database::disconnect();
} else {
  echo json_encode(array("error" => "ID not set in POST data"));
}
?>