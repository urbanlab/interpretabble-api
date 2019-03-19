const dotenv = require('dotenv');
dotenv.config();
console.log(`Your port is ${process.env.API_PORT}`); // 8626

var express = require('express'),
  app = express(),
  port = process.env.PORT || process.env.API_PORT,
  mongoose = require('mongoose'),
  Task = require('./api/models/itemModel'), //created model loading here
  bodyParser = require('body-parser');


 
app.use(function (req, res, next) {

  // Website you wish to allow to connect
  res.setHeader('Access-Control-Allow-Origin', '*');
  // Request headers you wish to allow
  res.setHeader('Access-Control-Allow-Headers', 'X-Requested-With,content-type');

  bodyParser.urlencoded({ extended: true });
  bodyParser.json();

  // Pass to next layer of middleware
  next();
});

 
  
// mongoose instance connection url connection
mongoose.Promise = global.Promise;
mongoose.connect(process.env.MONGO_DB_HOST, {useNewUrlParser: true}); 


var routes = require('./api/routes/itemRoutes'); //importing route
routes(app); //register the route


app.listen(port);


console.log('Interpretabble RESTful API server started on: ' + port);


app.use(function(req, res) {
    res.status(404).send({url: req.originalUrl + ' not found'});
  });
