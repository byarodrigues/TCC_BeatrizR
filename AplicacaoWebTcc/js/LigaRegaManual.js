
void ligarRegaManual() 
  Serial.println("Rega manual ligada")
  digitalWrite(RELE1_PIN, LOW)
  delay(2000)
  digitalWrite(RELE2_PIN, LOW)
  regaAtiva = true
  tempoInicioRega = millis()
  last_hour = current_hour
  last_minute = current_minute


void handleLigarRegaManual() 
  ligarRegaManual(); 
  server.sendHeader("Location", "/"); 
  server.send(303); 
