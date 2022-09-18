//Access the canvas of html using specified id
const canvas = document.getElementById('tetris');
//Draws context, which in this case the canvas
//Canvas is where the tetris matrix is drawn
const context = canvas.getContext('2d');

//Increases the draw size of context by a factor of 20
context.scale(20,20);

//Changes the color and shape of the matrix


//An array that contains all the arrays for how the tetriminoes will be rendered
//1 = A block is rendered in the matrix, 0 for otherwise
const matrix = [
    [0,0,0],
    [1,1,1], //T-Piece
    [0,1,0],
];

function collide (arena,player){
    const [m, o] =[player.matrix, player.pos];
    for (let y = 0; y < m.length; ++y){
        for (let x = 0; x < m[y].length; ++x){
            if (m[y][x] !== 0 &&  //checks player tetrimino on y and x and continues when it is not 0
                (arena[y+ o.y] && //checks if the area, row and column, around the tetrimino is not 0
                arena[y+ o.y][x+o.x]) !== 0){
                    return true; //returns true if all the above are met
                }
        }
    }
    return false;
}

function createMatrix(w,h){
    const matrix = [];
    while(h--){
        matrix.push(new Array(w).fill(0));
    }return matrix;
}

//General draw function for both the tetrimino, the matrix itself, and blocks in the matrix
function draw(){
    context.fillStyle = '#000';
    context.fillRect(0,0, canvas.width, canvas.height);
    
    drawMatrix(arena, {x: 0, y:0});
    drawMatrix(player.matrix, player.pos);
}

//Function that generates the pieces into the matrix
function drawMatrix (matrix, offset){
    //Checks each row in the matrix if it's 1 or 0
    matrix.forEach((row,y) => {
        //If it's 1, a block is generated on that location, and nothing when otherwise
        row.forEach((value, x) => {
          if(value !==0) {
              context.fillStyle = '#A000F0';
              context.fillRect (x + offset.x,
                                y + offset.y,
                                1,1);
           }
        });  
    });
}

//Function that allows tetriminoes to stick to other blocks or the bottom of the arena
function merge(arena, player){
    player.matrix.forEach((row, y) => {
        row.forEach((value,x) => {
            if (value !==0) {
                arena[y + player.pos.y][x + player.pos.x] = value;
            }
        });
    });
}

//Stores the player's tetrimino position data
const arena = createMatrix(10,24);


const player ={
    pos:{x:5, y:5},
    matrix:matrix,
}

//Value that increments slowly by adding deltaTime in the update function
//When this variable goes higher than dropInterval is when the tetrimino drops by 1 unit
let dropCounter = 0;
//Influences how fast Tetriminoes drop in milliseconds
let dropInterval = 1000;

function playerMove(dir){
    player.pos.x += dir;
    if (collide (arena, player)){
        player.pos.x -= dir;
    }
}

//Function that drops the tetrimino when called
function playerDrop(){
    player.pos.y++;
    if (collide(arena,player)){
        player.pos.y--;
        merge(arena, player);
        player.pos.y = 0;
    }
    dropCounter = 0;
}

//Function that continuously updates the position of the tetrimino
let lastTime = 0;
function update(time = 0){
    const deltaTime = time-lastTime;
    lastTime = time;

    dropCounter += deltaTime;
    if (dropCounter > dropInterval){  
        playerDrop();
    }

    //console.log(deltaTime);
    draw();
    requestAnimationFrame(update);
}



//Catches and interprets the player's inputs into the controls
//DAS is already built in. It takes 1 second for it to kick in
document.addEventListener('keydown', event => {
    if (event.keyCode == 37){ //Move left
        playerMove(-1);
    }else if (event.keyCode == 39){ //Move Right
        playerMove(+1);
    }else if (event.keyCode == 40){
        playerDrop();
    }
    console.log(event);
})
//When this is called, the script will continuously update itself
update();