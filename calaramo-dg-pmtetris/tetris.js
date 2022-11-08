//Access the canvas of html using specified id
const canvas = document.getElementById('tetris');
//Draws context, which in this case the canvas
//Canvas is where the tetris matrix is drawn
const context = canvas.getContext('2d');

//Increases the draw size of context by a given factor
context.scale(20,20);

//Function for clearing filled lines
let linesLeft = 10;
function arenaSweep() {
    let rowCount = 1;
    outer: for (let y = arena.length -1; y > 0; --y) {
        for (let x = 0; x < arena[y].length; ++x) {
            if (arena[y][x] === 0) {
                continue outer;
            }
        }

        const row = arena.splice(y, 1)[0].fill(0);
        linesLeft -= 1;
        arena.unshift(row);
        ++y;

        if (linesLeft <= 0){
            dropInterval -= 50;
            if (dropInterval < 50){
                dropInterval = 50;
            } 
            level += 1;
            console.log(dropInterval);
            linesLeft = 10;
        }
        
        console.log(linesLeft);
        player.score += (rowCount * 10) + ((level-1)*10);
        rowCount *= 2;
    }
}

//Function that checks for arena or block collision when called
function collide(arena, player) {
    const m = player.matrix;
    const o = player.pos;
    for (let y = 0; y < m.length; ++y) {
        for (let x = 0; x < m[y].length; ++x) {
            if (m[y][x] !== 0 && //checks player tetrimino on y and x and continues when it is not 0
               (arena[y + o.y] && //checks if the area's row and column around the tetrimino is not 0
                arena[y + o.y][x + o.x]) !== 0) {
                return true; //returns true if all the above are met
            }
        }
    }
    return false;
}

//Function where arena data is stored
function createMatrix(w, h) {
    const matrix = [];
    while (h--) {
        matrix.push(new Array(w).fill(0));
    }
    return matrix;
}

//A function that when called, returns the array data for the requested piece
function createPiece(type)
{
    if (type === 'I') { // I piece
        return [
            [0, 1, 0, 0],
            [0, 1, 0, 0],
            [0, 1, 0, 0],
            [0, 1, 0, 0],
        ];
    } else if (type === 'L') { // L Piece
        return [
            [0, 2, 0],
            [0, 2, 0],
            [0, 2, 2],
        ];
    } else if (type === 'J') { // J Piece
        return [
            [0, 3, 0],
            [0, 3, 0],
            [3, 3, 0],
        ];
    } else if (type === 'O') { // O Piece
        return [
            [4, 4],
            [4, 4],
        ];
    } else if (type === 'Z') { // Z Piece
        return [
            [5, 5, 0],
            [0, 5, 5],
            [0, 0, 0],
        ];
    } else if (type === 'S') { // S Piece
        return [
            [0, 6, 6],
            [6, 6, 0],
            [0, 0, 0],
        ];
    } else if (type === 'T') { // T Piece
        return [
            [0, 7, 0],
            [7, 7, 7],
            [0, 0, 0],
        ];
    }
}

//7 Bag piece generation
function drawMatrix(matrix, offset) {
    matrix.forEach((row, y) => {
        row.forEach((value, x) => {
            if (value !== 0) {
                context.fillStyle = colors[value];
                context.fillRect(x + offset.x,
                                 y + offset.y,
                                 1, 1);
            }
        });
    });
}

//General draw function for both the tetrimino, the matrix itself, and blocks in the matrix
function draw() {
    context.fillStyle = '#000000';
    context.fillRect(0, 0, canvas.width, canvas.height);

    drawMatrix(arena, {x: 0, y: 0});
    drawMatrix(player.matrix, player.pos);
}

function merge(arena, player) {
    player.matrix.forEach((row, y) => {
        row.forEach((value, x) => {
            if (value !== 0) {
                arena[y + player.pos.y][x + player.pos.x] = value;
            }
        });
    });
}

//A function that allows the player to rotate tetriminoes
//Works by transposing all rows to columns and then reversing the order in each row
function rotate(matrix, dir) {
    for (let y = 0; y < matrix.length; ++y) {
        for (let x = 0; x < y; ++x) { //Loop that transposes each value of the array in the tetrimino
            [
                matrix[x][y],
                matrix[y][x],
            ] = [
                matrix[y][x],
                matrix[x][y],
            ];
        }
    }

    if (dir > 0) {
        matrix.forEach(row => row.reverse());
    } else {
        matrix.reverse();
    }
}

//A function that is called whenever the player drops a tetrimino to the board
//whenever a piece is dropped, it will merge to the board and then
//checks if a line is cleared
//if a line is cleared ---
//the total score and level is updated
function playerDrop() {
    player.pos.y++;
    if (collide(arena, player)) {
        player.pos.y--;
        merge(arena, player);
        playerReset();
        arenaSweep();
        updateScore();
        updateLevel();
    }
    dropCounter = 0;
}

//Fucntion that offsets the player's piece on the chosen direction
//Prevents the players from clipping outside the board by detecting if there is a collision with the walls
function playerMove(offset) {
    player.pos.x += offset;
    if (collide(arena, player)) {
        player.pos.x -= offset;
    }
}

//7 Bag piece generation
let pieces = 'ILJOTSZ';
function playerReset() {
    selectedPiece = pieces[pieces.length * Math.random() | 0];
    player.matrix = createPiece(selectedPiece);
    pieces = pieces.replace(selectedPiece, '');

    if (pieces == ''){
        pieces = 'ILJOTSZ';
    } 

    player.pos.y = 0;
    player.pos.x = (arena[0].length / 2 | 0) -
                   (player.matrix[0].length / 2 | 0);

    if (collide(arena, player)) {
        arena.forEach(row => row.fill(0));
        recordedData.score = player.score;
        recordedData.level = level;

        updateName();
        updateTop();
        updateScore();
        updateLevel();
        submitScore()

        pieces = 'ILJOTSZ';
        player.score = 0;
        level = 1;
        dropInterval = 1000;

        console.log(recordedData);
        console.log(player);
    }
}

//supplemental function for the keyboard input handler function
function playerRotate(dir) {
    const pos = player.pos.x;
    let offset = 1;
    rotate(player.matrix, dir); 
    while (collide(arena, player)) {
        player.pos.x += offset;
        offset = -(offset + (offset > 0 ? 1 : -1));
        if (offset > player.matrix[0].length) {
            rotate(player.matrix, -dir);
            player.pos.x = pos;
            return;
        }
    }
}

//Value that increments slowly by adding deltaTime in the update function
//When this variable goes higher than dropInterval is when the tetrimino drops by 1 unit
let dropCounter = 0;
//Influences how fast Tetriminoes drop in milliseconds
let dropInterval = 1000;

//Function that continuously updates the position of the tetrimino
let lastTime = 0;
function update(time = 0) {
    const deltaTime = time - lastTime;

    dropCounter += deltaTime;
    if (dropCounter > dropInterval) {
        playerDrop();
    }

    lastTime = time;

    draw();
    requestAnimationFrame(update);
}

function updateScore() {
    if (player.score > recordedData.score){
        recordedData.score = player.score;
    }
    document.getElementById('score').innerText = player.score;
}

let level = 1;
function updateLevel() {
    if (level > recordedData.level){
        recordedData.level = level;
    }
    document.getElementById('level').innerText = level;
}

let topScore = 0;
function updateTop(){
    if (topScore < player.score){
        topScore = player.score;
    }
    document.getElementById('top').innerText = topScore;
}

function updateName() {
    if (document.getElementById("name").value == ''){
        recordedData.name = "unknown";
    } else {
        recordedData.name = document.getElementById("name").value;
    }
}

function submitScore()
{
    document.getElementById("playername").value = recordedData.name;
    document.getElementById("playerscore").value = recordedData.score;
    document.getElementById("playerlevel").value = recordedData.level;
    document.getElementById("playerform").submit(); 
}

//Keyboard handler
//Catches and interprets the player's inputs into the controls
//DAS is already built in. It takes 1 second for it to kick in
document.addEventListener('keydown', event => {
    if (event.keyCode === 37) {
        playerMove(-1);
    } else if (event.keyCode === 39) {
        playerMove(1);
    } else if (event.keyCode === 40) {
        playerDrop();
    } else if (event.keyCode === 90) {
        playerRotate(-1);
    } else if (event.keyCode === 88) {
        playerRotate(1);
    } else if (event.keyCode === 32) {
        merge(arena, player);
        playerReset();
    } 
});

const colors = [
    null,
    '#00F0F0',
    '#F0A000',
    '#0000F0',
    '#F0F000',
    '#F00000',
    '#00F000',
    '#A000F0',
];

const arena = createMatrix(12, 20);

const recordedData = {
    score: 0,
    level: 0,
    name: null,
};

const player = {
    pos: {x: 0, y: 0},
    matrix: null,
    score: 0,
};

playerReset();
updateScore();
updateLevel();
updateTop();
update();