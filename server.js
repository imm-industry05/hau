const bodyParser = require('body-parser');
var express = require('express');
var app = express();
const server = app.listen(8000, ()=>{
    console.log('listening to port 8000');
});
const io = require('socket.io')(server);

app.use(express.static(__dirname + '/static'));
app.use(bodyParser.urlencoded({extended:true}));
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

// random color generator


app.get('/', function(request, response){
    // console.log(request.body);
    response.render('index');
});

app.post('/colors', function(request, response){
    const rgb = ['a','b','c','d','e','f','0','1','2','3','4','5','6','7','8','9'];
    let color = '#'  //this is what we'll return!
    for(var i = 0; i < 6; i++)   // 6 is total number of characters in hex
    {
        let x = Math.floor((Math.random()*16));  // 16 for hex
        color += rgb[x]; 
    }
    // console.log(color);
    console.log(request.body.value);
    io.on('connection', function(socket){
        if(request.body.value == "Dark Mode"){
            color = '#333';
            io.emit('random_color', {color: color});
        }
        else if(request.body.value == "Light Mode"){
            color = '#fff';
            io.emit('random_color', {color: color});
        }
        else{
            io.emit('random_color', {color: color});
        }
    });

    response.redirect('/');
});


