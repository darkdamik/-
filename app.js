const express = require('express')
const app = express()
const pool = require('./pool')
app.use(function(req, res, next){
    res.header('Access-Control-Allow-Origin','*');
    next();
})
app.get('/check', function (req, res) {
  pool.query('select * from users',function(error, result){
    if(error){
        res.send(error)
    }
    else 
    {
        res.send(result)
    }
})
})


app.listen(3000)

