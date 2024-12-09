void LigarRega() 
    //  Serial.print("Verificando condição de rega: ");
    //  Serial.print(current_hour);
    //  Serial.print(":");
    //  Serial.print(current_minute);
    //  Serial.print(" - ");
    //  Serial.print(next_hour);
    //  Serial.print(":");
    //  Serial.println(next_minute);
    
      // Verifica se esta na hora de ligar a rega
    if ((current_hour == next_hour && current_minute == next_minute || 
         current_hour == next_hour2 && current_minute == next_minute2) && !regaAtiva) {
        Serial.println("Rega ligada");
        digitalWrite(RELE1_PIN, LOW);
        delay(2000);
        digitalWrite(RELE2_PIN, LOW);
        tempoInicioRega = millis(); // Registra o tempo de início da rega
        regaAtiva = true;
        last_hour = current_hour;
        last_minute = current_minute;
      }
    
      // Verifica se a rega deve ser desligada após a duração especificada
      if (regaAtiva && millis() - tempoInicioRega >= duracaoRega) {
        Serial.println("Rega desligada");
        digitalWrite(RELE2_PIN, HIGH);
        delay(2000);
        digitalWrite(RELE1_PIN, HIGH); 
        regaAtiva = false;
      }
    