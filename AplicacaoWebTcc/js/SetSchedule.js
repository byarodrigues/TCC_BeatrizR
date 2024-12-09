void handleSetSchedule() 
    if (server.hasArg("hour1") && server.hasArg("minute1") && server.hasArg("hour2") && server.hasArg("minute2") && server.hasArg("time")) {
      next_hour = server.arg("hour1").toInt(); 
      next_minute = server.arg("minute1").toInt(); 
      next_hour2 = server.arg("hour2").toInt(); 
      next_minute2 = server.arg("minute2").toInt(); 
      duracaoRega = server.arg("time").toInt() * 60000; 
    }
    server.sendHeader("Location", "/");
    server.send(303); 
  