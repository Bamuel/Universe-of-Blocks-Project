var http = require('http');
http.createServer(function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/plain'});
  res.end('Hello World\n');
}).listen(1337, '127.0.0.1');
console.log('This project has been created by @edgar_sanou');
console.log('Starting server...');
console.log('Server running at http://127.0.0.1:1337/');