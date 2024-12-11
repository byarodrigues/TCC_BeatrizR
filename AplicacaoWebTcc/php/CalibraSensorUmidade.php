<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>JavaScript Síncrono</title>
  </head>
  <body>
      <button>Iniciar processos...</button>
      <script>
          function calibrarSensorUmidadeSolo() {
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
            console.log('Rega manual desligada');
            regaAtiva = false;
          }
      </script>
      <form action='index.html' method='POST'>
  </body>
</html>
