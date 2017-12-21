var express = require('express');
var app = express();
var mustacheExpress = require('mustache-express');

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

app.listen(3000, function () {
    console.log('Example app listening on port 3000!');
});
