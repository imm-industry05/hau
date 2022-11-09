<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BONTEA | HOME</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type ="text/css" href = "style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main-content"></div>
    <div class="title"></div>
    <div class="box">
        <h1> BONTEA MILKTEA INVENTORY</h1>
        
        <h2> CATEGORIES </h2>
            <select id = "Categories" name = "Categories">
                <option value = "Flavors"> Flavors</option>
                <option value = "Add-ons"> Add-ons</option>
                <option value = "Cups"> Cups</option>
                <option value = "Base Cream"> Base Cream</option>
                <option value = "Fructose"> Fructose</option>
            </select>
        <h2> ITEMS</h2>
            <select id= "Items" name = "Items">
                <optgroup label = "Flavors"></optgroup>
                <option>Dark Choco</option>
                <option>Cookies & Cream</option>
                <option>Ube Macapuno</option>
                <option>Taro</option>
                <option>Milky Choco</option>
                <option>Caramel Machiatto</option>
                <option>Salted Caramel</option>
        
                <optgroup label = "Add-ons"></optgroup>
                <option>Nata</option>
                <option>Crash Oreo</option>
                <option>Fruit Jelly</option>
                <option>Coffee Jelly</option>
                <option>Cream puff</option>
                <option>Cream cheese</option>
                <option>Popping boba</option>

                <optgroup label = "Cups"></optgroup>
                <option>750ml</option>
                <option>1L</option>

                <optgroup label = "Base Cream"></optgroup>
                <option>Class A</option>
                <option>Class B</option>  
                
                <optgroup label = "Fructose"></optgroup>
                <option>Can</option>
                <option>Galon</option>            
        </select>
        <h2> QUANTITY</h2>
        <input name = "Quantity" type="number" > </input>
        <h2> PRICE </h2>
        <input name = "Price" type="number" > </input>

        <button type="submit" id = register>SUBMIT</button>
        </div>

<script> 
    document.addEventListener('DOMContentLoaded', () => {
        document
        .getElementById('Categories')
        .addEventListener('input', handleSelect);
        
    });

    function handleSelect(ev){
        let select = ev.target;
        console.log(select.value);
    }

    function handleData(ev){
        let theInput = ev.target;
    }

</script>


        
    




    <footer>
        <div class="footer-bottom"> 
            <a href = "edit.html"> <h2>Advanced |<a href="index.php"> Logout</a></h2>

        </div>
            
    </footer>
    
    
</body>
</html>