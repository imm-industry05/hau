
var saveGame = localStorage.getItem('goldMinerSave')
var gameData = {
  gold: 0,
  goldPerClick: 1,
  goldPerClickCost: 10,
  lastTick: Date.now()
}

function update(id, content) {
  document.getElementById(id).innerHTML = content;
}

function mineGold() {
  gameData.gold += gameData.goldPerClick
  update("goldMined", gameData.gold + " Gold Mined")
}

function buyGoldPerClick() {
  if (gameData.gold >= gameData.goldPerClickCost) {
    gameData.gold -= gameData.goldPerClickCost
    gameData.goldPerClick += 1
    gameData.goldPerClickCost *= 2
    update("goldMined", gameData.gold + " Gold Mined")
    update("perClickUpgrade", "Upgrade Pickaxe (Currently Level " + gameData.goldPerClick + ") Cost: " + gameData.goldPerClickCost + " Gold")
  }
}

function tab(tab) {
  document.getElementById("mineGoldMenu").style.display = "none"
  document.getElementById("shopMenu").style.display = "none"
  document.getElementById(tab).style.display = "inline-block"
}
tab("mineGoldMenu")

var mainGameLoop = window.setInterval(function() {
  diff = Date.now() - gameData.lastTick;
  gameData.lastTick = Date.now()
  gameData.gold += gameData.goldPerClick * (diff / 1000)
  update("goldMined", gameData.gold + " Gold Mined")
}, 1000)

var saveGameLoop = window.setInterval(function() {
  localStorage.setItem('goldMinerSave', JSON.stringify(gameData))
}, 15000)

function format(number, type) {
	let exponent = Math.floor(Math.log10(number))
	let mantissa = number / Math.pow(10, exponent)
	if (exponent < 3) return number.toFixed(1)
	if (type == "scientific") return mantissa.toFixed(2) + "e" + exponent
	if (type == "engineering") return (Math.pow(10, exponent % 3) * mantissa).toFixed(2) + "e" + (Math.floor(exponent / 3) * 3)
}

update("perClickUpgrade", "Upgrade Pickaxe (Currently Level " + format(gameData.goldPerClick, "scientific") + ") Cost: " + format(gameData.goldPerClickCost, "scientific") + " Gold")

if (typeof saveGame.gold !== "undefined") gameData.gold = saveGame.gold;
if (typeof saveGame.goldPerClick !== "undefined") gameData.goldPerClick = saveGame.goldPerClick;
if (typeof saveGame.goldPerClickCost !== "undefined") gameData.goldPerClickCost = saveGame.goldPerClickCost;
if (typeof saveGame.lastTick !== "undefined") gameData.lastTick = saveGame.lastTick;