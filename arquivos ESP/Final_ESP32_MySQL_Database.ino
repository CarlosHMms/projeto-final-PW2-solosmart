#include <WiFi.h>
#include <HTTPClient.h>
#include <Arduino_JSON.h>
#include <DHT.h>

// DHT sensor settings (DHT11)
#define DHTPIN 15
#define DHTTYPE DHT11
DHT dht11_sensor(DHTPIN, DHTTYPE);

// Defines the Digital Pin of the "On Board LED"
#define ON_Board_LED 2 
#define LED_01 13 
#define LED_02 12 

// SSID and Password of your WiFi router
const char* ssid = "esp32";
const char* password = "123456789";

// Variables for HTTP POST request data
String postData = "";
String payload = "";

// Variables for DHT11 sensor data
float send_Temp;
int send_Humd;
String send_Status_Read_DHT11 = "";

void control_LEDs() {
  Serial.println("---------------control_LEDs()");
  JSONVar myObject = JSON.parse(payload);

  if (JSON.typeof(myObject) == "undefined") {
    Serial.println("Parsing input failed!");
    Serial.println("Payload:");
    Serial.println(payload);
    Serial.println("---------------");
    return;
  }

  // Convertendo JSONVar para string antes da comparação
  String led01State = JSONVarToString(myObject["LED_01"]);
  String led02State = JSONVarToString(myObject["LED_02"]);

  // Controlando LED_01
  if (led01State == "ON") {
    digitalWrite(LED_01, HIGH);
    Serial.println("LED 01 ON");
  } else if (led01State == "OFF") {
    digitalWrite(LED_01, LOW);
    Serial.println("LED 01 OFF");
  }

  // Controlando LED_02
  if (led02State == "ON") {
    digitalWrite(LED_02, HIGH);
    Serial.println("LED 02 ON");
  } else if (led02State == "OFF") {
    digitalWrite(LED_02, LOW);
    Serial.println("LED 02 OFF");
  }

  Serial.println("---------------");
}

// Função para converter JSONVar para String
String JSONVarToString(JSONVar var) {
  if (JSON.typeof(var) == "string") {
    return (String)var;
  } else {
    return "";
  }
}


void get_DHT11_sensor_data() {
  Serial.println("-------------get_DHT11_sensor_data()");
  
  send_Temp = dht11_sensor.readTemperature();
  send_Humd = dht11_sensor.readHumidity();

  if (isnan(send_Temp) || isnan(send_Humd)) {
    Serial.println("Failed to read from DHT sensor!");
    send_Temp = 0.00;
    send_Humd = 0;
    send_Status_Read_DHT11 = "FALHA";
  } else {
    send_Status_Read_DHT11 = "SUCESSO";
  }
  
  Serial.printf("Temperature : %.2f °C\n", send_Temp);
  Serial.printf("Humidity : %d %%\n", send_Humd);
  Serial.printf("Status Read DHT11 Sensor : %s\n", send_Status_Read_DHT11);
  Serial.println("-------------");
}

void setup() {
  Serial.begin(115200);

  pinMode(ON_Board_LED, OUTPUT);
  pinMode(LED_01, OUTPUT);
  pinMode(LED_02, OUTPUT);

  digitalWrite(ON_Board_LED, HIGH);
  digitalWrite(LED_01, HIGH);
  digitalWrite(LED_02, HIGH);

  delay(2000);

  digitalWrite(ON_Board_LED, LOW);
  digitalWrite(LED_01, LOW);
  digitalWrite(LED_02, LOW);

  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  Serial.println("Connecting");

  int connecting_process_timed_out = 20 * 2;
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    digitalWrite(ON_Board_LED, HIGH);
    delay(250);
    digitalWrite(ON_Board_LED, LOW);
    delay(250);

    if (connecting_process_timed_out > 0) connecting_process_timed_out--;
    if (connecting_process_timed_out == 0) {
      delay(1000);
      ESP.restart();
    }
  }

  digitalWrite(ON_Board_LED, LOW);

  Serial.println();
  Serial.print("Successfully connected to : ");
  Serial.println(ssid);

  dht11_sensor.begin();
  delay(2000);
}

void loop() {
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    int httpCode;

    postData = "id=esp32_01";
    payload = "";

    digitalWrite(ON_Board_LED, HIGH);
    Serial.println("---------------getdata.php");
    http.begin("http://192.168.1.15/ESP32_MySQL_Database/Final/getdata.php");
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");

    httpCode = http.POST(postData);
    payload = http.getString();

    Serial.print("httpCode : ");
    Serial.println(httpCode);
    Serial.print("payload  : ");
    Serial.println(payload);

    http.end();
    digitalWrite(ON_Board_LED, LOW);

    control_LEDs();

    delay(1000);

    get_DHT11_sensor_data();

    String LED_01_State = (digitalRead(LED_01) == HIGH) ? "ON" : "OFF";
    String LED_02_State = (digitalRead(LED_02) == HIGH) ? "ON" : "OFF";

    postData = "id=esp32_01";
    postData += "&temperature=" + String(send_Temp);
    postData += "&humidity=" + String(send_Humd);
    postData += "&status_read_sensor_dht11=" + send_Status_Read_DHT11;
    postData += "&led_01=" + LED_01_State;
    postData += "&led_02=" + LED_02_State;
    payload = "";

    digitalWrite(ON_Board_LED, HIGH);
    Serial.println("---------------updateDHT11data_and_recordtable.php");
    http.begin("http://192.168.1.15/ESP32_MySQL_Database/Final/updateDHT11data_and_recordtable.php");
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");

    httpCode = http.POST(postData);
    payload = http.getString();

    Serial.print("httpCode : ");
    Serial.println(httpCode);
    Serial.print("payload  : ");
    Serial.println(payload);

    http.end();
    digitalWrite(ON_Board_LED, LOW);

    delay(5000);
  }
}
