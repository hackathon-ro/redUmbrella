// Require HTTP module (to start server) and Socket.IO
var http = require('http');
var io = require('socket.io');
var fs = require('fs');    

// Start the server at port 8888
var server = http.createServer(function(req, res){ 

    // Send HTML headers and message
    res.writeHead(200,{
        'Content-Type': 'text/html'
    }); 
    res.end('<h1>Hello Socket Lover!</h1>');
});
server.listen(8888);

// Create a Socket.IO instance, passing it our server
var socket = io.listen(server);
var socketClients = [];
// Add a connect listener
socket.on('connection', function(client){	
    socketClients.push(client);
    client.on('disconnect',function(){
        console.log('Server has disconnected');
    });

});

fs.watch('/var/scripts/sensor_readings.txt', {
    persistent:true
}, function(event,filename) {
    if(event == 'change'){
        fs.readFile("/var/scripts/sensor_readings.txt", "utf8", function(error, data) {
            
	    var channelData = data.split(" ");
            
	    if(channelData.length == 8){
                var channelValues = [];
                for(var i in channelData){
                    channelValues[i] = (channelData[i]*100)/1024;
                }
		
                for(var i in socketClients){
                    console.log(channelValues);
                    socketClients[i].emit('newData', channelValues);
                }
            }
            
        });

    }
    
});

