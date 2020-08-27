<?php
include "Database/dbController.php";
?>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="Sport">
        <div class="w3-quarter" >
            <img src="./w3images/9inch.jpg" alt="Pant" style="width: 70%" id="1">
            <h5 >XL Women Short</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            10 €
        </div>
        <div class="w3-quarter">
            <img src="./w3images/sp.jpg" alt="Pant" style="width:70%" id="2">
            <h5> Pant-Black</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            15€
        </div>
        <div class="w3-quarter">
            <img src="./w3images/JoggerPant.jpg" alt="Pant" style="width:70%" id="3">
            <h5>jogger pant</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            25€
        </div>
        <div class="w3-quarter">
            <img src="./w3images/legging.jpg" alt="Pullover" style="width:70%" id="4">
            <h5>Pocket Leggings-Black</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            20€
        </div>
    </div>

    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
        <div class="w3-quarter">
            <img src="./w3images/CaprisBlack.jpg" alt="Capris" style="width:70%" id="5">
            <h5>Pocket Capris-Cobalt</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            15€
        </div>
        <div class="w3-quarter">
            <img src="./w3images/Short.jpg" alt="Short" style="width:70%" id="6">
            <h5>Supersize Pocket Shorts</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            10€
        </div>
        <div class="w3-quarter">
            <img src="./w3images/top.jpg" alt="Capris" style="width:70%" id="7">
            <h5>Supersize Top Black</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            15€
        </div>
        <div class="w3-quarter">
            <img src="./w3images/topp.jpg" alt="Capris" style="width:70%" id="8">
            <h5>Supersize Top 9inch Black</h5>
            <label for="articleQuantity">Choose a quantity:</label>
            <select class="articleQuantity">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            <b></b>
            <button class="addToCart">Add to Shopping Cart</button>
            <p></p>
            10€

        </div>
    </div>
    <script>

        let  saveID = document.getElementById('1');
        function load_document(){

        let id = document.getElementsByClassName("addToCart").value;
        let xmlhttp = new XMLHttpRequest();
        let url = "php/rest.php/Json" + newId;
        xmlhttp.onreadystatechange = function (e) {
            if (this.readyState == 4 && this.status == 200) {
                //console.log("message"+obj.message);
                alert("Updated successful");
            }
        };
        xmlhttp.open("GET", url, true);
        xmlhttp.send(JSON.stringify(obj));
        alert("Updated! Please reload the page");
        }
    </script>
