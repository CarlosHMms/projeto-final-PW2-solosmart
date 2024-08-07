<?php
require_once 'database.php';

if (!empty($_POST)) {
    // Verifica se todos os dados necessários estão presentes
    $required_keys = ['id', 'temperature', 'humidity', 'status_read_sensor_dht11', 'led_01', 'led_02', 'user_id'];
    foreach ($required_keys as $key) {
        if (!isset($_POST[$key])) {
            die("Missing $key in POST data.");
        }
    }

    // Coleta dos dados enviados via POST
    $id = $_POST['id'];
    $temperature = $_POST['temperature'];
    $humidity = $_POST['humidity'];
    $status_read_sensor_dht11 = $_POST['status_read_sensor_dht11'];
    $led_01 = $_POST['led_01'];
    $led_02 = $_POST['led_02'];
    $user_id = $_POST['user_id'];

    date_default_timezone_set("America/Sao_Paulo");
    $tm = date("H:i:s");
    $dt = date("Y-m-d");

    echo "Received Data: id=$id, temperature=$temperature, humidity=$humidity, status_read_sensor_dht11=$status_read_sensor_dht11, led_01=$led_01, led_02=$led_02, user_id=$user_id\n";

    // Conecta ao banco de dados
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Atualiza os dados na tabela de atualização
    $sql = "UPDATE esp32_table_dht11_leds_update SET temperature = ?, humidity = ?, status_read_sensor_dht11 = ?, time = ?, date = ?, user_id = ? WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($temperature, $humidity, $status_read_sensor_dht11, $tm, $dt, $user_id, $id));
    Database::disconnect();

    // Gera um novo ID para a inserção na tabela de registros
    $id_key;
    $board = $_POST['id'];
    $found_empty = false;

    // Conecta ao banco de dados novamente
    $pdo = Database::connect();

    while ($found_empty == false) {
        $id_key = generate_string_id(10);

        $sql = 'SELECT * FROM esp32_table_dht11_leds_record WHERE id="' . $id_key . '"';
        $q = $pdo->prepare($sql);
        $q->execute();

        if (!$data = $q->fetch()) {
            $found_empty = true;
        }
    }

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insere os dados na tabela de registros
    $sql = "INSERT INTO esp32_table_dht11_leds_record (id, board, temperature, humidity, status_read_sensor_dht11, LED_01, LED_02, time, date, user_id) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $q = $pdo->prepare($sql);
    $q->execute(array($id_key, $board, $temperature, $humidity, $status_read_sensor_dht11, $led_01, $led_02, $tm, $dt, $user_id));

    Database::disconnect();

    echo "Data inserted successfully\n";
}

// Função para gerar um ID único
function generate_string_id($strength = 16)
{
    $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $input_length = strlen($permitted_chars);
    $random_string = '';
    for ($i = 0; $i < $strength; $i++) {
        $random_character = $permitted_chars[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
    return $random_string;
}
?>