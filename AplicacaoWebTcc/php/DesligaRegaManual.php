void desligarRegaManual() 
  Serial.println("Rega manual desligada");
  digitalWrite(RELE2_PIN, HIGH); 
  delay(2000);
  digitalWrite(RELE1_PIN, HIGH);   
  regaAtiva = false;


void handleDesligarRegaManual() 
    desligarRegaManual(); 
    server.sendHeader("Location", "/"); 
    server.send(303); 
    <form action='js/DesligaRegaManual.js' method='POST'>
