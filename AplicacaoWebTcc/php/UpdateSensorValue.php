<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>JavaScript Síncrono</title>
  </head>
  <body>
      <button>Carregar horários</button>
      <script>
          function updateSensorsValue() {
            air_humidity = dht.readHumidity();
            air_temperature = dht.readTemperature();
            soil_humidity = analogRead(SOIL_HUMIDITY_PIN);
            
            if (isnan(air_humidity) || isnan(air_temperature)) {
              Serial.println("Falha na leitura do DHT!")
              return
            }
          
            datetime_now = rtc.now()
            current_hour = now.hour()
            current_minute = now.minute()
            console.log('Temp:');
            console.log('air_temp');
            console.log('Hum:');
            console.log('air_humidity');
            console.log('Soil');
            console.log('soil_humidity');
          }
      </script>
  </body>
</html>
