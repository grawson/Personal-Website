var express = require('express');
var app = express();
var mustacheExpress = require('mustache-express');

// Red shift deployment
var server_port = process.env.OPENSHIFT_NODEJS_PORT || 8080;
var server_ip_address = process.env.OPENSHIFT_NODEJS_IP || '127.0.0.1';

// Setup mustache templating
app.engine('mustache', mustacheExpress());
app.set('view engine', 'mustache');
app.set('views', __dirname + '/_view');

// Serve static files
app.use("/css", express.static(__dirname + '/_style/css'));
app.use("/_view", express.static(__dirname + '/_view'));
app.use("/_script", express.static(__dirname + '/_script'));
app.use("/_assets", express.static(__dirname + '/_assets'));
app.use("/bower_components", express.static(__dirname + '/bower_components'));


app.get('/', function (req, res) {
    res.render('home/home', {});
});

app.listen(server_port, server_ip_address, function () {
    console.log( "Listening on " + server_ip_address + ", port " + server_port )
});
