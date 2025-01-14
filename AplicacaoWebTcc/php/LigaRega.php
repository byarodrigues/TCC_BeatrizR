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
          function LigarRega() {
            console.log('Verificando condição de rega: ');
            console.log('current_hour');
            console.log(':');
            console.log('current_minute');
            console.log(' - ');
            console.log('next_hour');
            console.log(':');
            console.log('next_mintute');
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
            if (regaAtiva && millis() - tempoInicioRega >= duracaoRega) {
              Serial.println("Rega desligada");
              digitalWrite(RELE2_PIN, HIGH);
              delay(2000);
              digitalWrite(RELE1_PIN, HIGH); 
              regaAtiva = false;
            }
          }
      </script>
  </body>
</html>
