void updateSensorsValue() 
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
  
    // Conversão do valor do sensor de umidade do solo para umidade percentual
    soil_humidity = map(soil_humidity, leituraSeca, leituraUmida, 0, 100);
  
  //  Serial.print("Temp: ");
  //  Serial.print(air_temperature);
  //  Serial.print(" Hum: ");
  //  Serial.print(air_humidity);
  //  Serial.print(" Soil: ");
  //  Serial.println(soil_humidity);
  