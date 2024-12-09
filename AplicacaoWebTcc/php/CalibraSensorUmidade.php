soil_humidity = 50;
void calibrarSensorUmidadeSolo() 
    if (aux == 0){
      Serial.println("Insira o sensor em solo seco e aguarde...");
      delay(10000); 
      leituraSeca = analogRead(SOIL_HUMIDITY_PIN);
      Serial.println("Leitura seca concluida");
      delay(1000); 
      
      Serial.println("Insira o sensor em solo úmido e aguarde...");
      delay(10000);
      leituraUmida = analogRead(SOIL_HUMIDITY_PIN);
      Serial.println("Leitura umida concluida");
      delay(1000);
  
      Serial.println("Calibração concluída.");
      aux = 1;
    }
  