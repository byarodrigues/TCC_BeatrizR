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
          function handleSetSchedule() {
            next_hour = server.arg("hour1").toInt(); 
            next_minute = server.arg("minute1").toInt(); 
            next_hour2 = server.arg("hour2").toInt(); 
            next_minute2 = server.arg("minute2").toInt(); 
            duracaoRega = server.arg("time").toInt() * 60000; 
            console.log('Rega manual acionada');
          }
      </script>
  </body>
</html>