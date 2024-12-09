<html>
  <head>
    <title>Controle do Viveiro</title>
      <meta charset='UTF-8'>
      <link rel="stylesheet" type="text/css" href="css/style.css" />
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
      <script src="php/CalibraSensorUmidade.php"></script>
  </head>
  <body>
    <div class='container'>
      <h1>Controle   do Viveiro de Mudas</h1>
        <div class='section'>
          <h2>Sensores</h2>
          <p>Temperatura do ar: " + <?php echo($_GET["air_temperature"]");?> + " °C</p>
          <p>Umidade do ar: " + echo("Umidade do ar: " . $_GET["air_humidity"] . " %. "); + " % </p>
          <p>Umidade do solo: " + <?php echo("Umidade do solo: " . $_GET["soil_humidity"] . " %.);?> + "% </p>
        </div>

        <div class='section'>
          <h2>Horários</h2>
          <p>Hora atual: " + String(current_hour) + ":" + String(current_minute) + "</p>
          <p>Horário das regas: " + String(next_hour) + ":" + String(next_minute) + " e " + String(next_hour2) + ":" + String(next_minute2) + "</p>
          <p>Horário da última rega: " + String(last_hour) + ":" + String(last_minute) + "</p>
        </div>

        <div class='section'>
          <h2>Controle de Rega</h2>
          <p>Rega ativa: " + String(regaAtiva ? "Sim" : "Não") + "</p>
          <p>Duração da rega: " + String(duracaoRega / 60000) + " minutos</p>
        </div>

        <div class='section'>
          <h2>Configuração</h2>
          <form action='php/SetSchedule.php' method='GET'>
              Primeiro horário de rega: <input type='number' name='hour1' min='0' max='23' value='" + String(next_hour) + "'><br>
              Primeiro minuto de rega: <input type='number' name='minute1' min='0' max='59' value='" + String(next_minute) + "'><br>
              Segundo horário de rega: <input type='number' name='hour2' min='0' max='23' value='" + String(next_hour2) + "'><br>
              Segundo minuto de rega: <input type='number' name='minute2' min='0' max='59' value='" + String(next_minute2) + "'><br>
              Tempo de rega (minutos): <input type='number' name='time' min='1' value='" + String(duracaoRega / 60000) + "'><br>
            <input type='submit' value='Atualizar horário de rega'>
          </form>
        </div>

        <div class='section'>
          <h2>Rega Manual</h2>
          <form action='php/LigaRegaManual.php' method='POST'>
          <input type='submit' value='Ligar Rega Manual'> 
          </form>
          <form action='php/DesligaRegaManual.php' method='POST'>
          <input type='submit' value='Desligar Rega Manual'> 
          </form>
        </div>
        
        <div class="section">
          <h2>Imagem referente ao setor 3 do viveiro de produção de mudas do IFMG campus bambuí.</h2>
          <img
            src="img/viveiro.jpg"
            alt="Imagem referente ao setor 3 do viveiro de produção de mudas do IFMG campus bambuí."
            width="400"
            height="341" />     
        </div>        
    </div>
  </body>
</html>
