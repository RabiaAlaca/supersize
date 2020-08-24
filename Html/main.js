document.addEventListener("DOMContentLoaded", function(event) {

    const maxQuantity = 8; // the maximum number of products that can be added to the shopping cart


    class ProductsClass {
        constructor(itemTitle, itemPrice, itemNumber) {
            this.itemTitle = itemTitle;
            this.itemPrice = itemPrice;
            this.itemNumber = itemNumber;

        }
        addProductToScreen() {itemTitle, itemPrice, itemNumber
            // this method should ensure that a product is displayed in the mainProductScreen
            var mainProductScreen =document.getElementById("mainProductScreen");
            var articleProduct=document.createElement("article");
            articleProduct.setAttribute("class", "articleProduct");
            articleProduct.setAttribute("id", this.itemNumber);

            var header=document.createElement("header");
            var heading2=document.createElement("h2");
            heading2.setAttribute("class", "itemTitle");
            heading2.textContent=this.itemTitle;
            header.appendChild(heading2);
            articleProduct.appendChild(header);

            var image=document.createElement("img");
            image.setAttribute("src", this.bookCover);
            image.setAttribute("alt", this.bookTitle+" Cover");
            articleProduct.appendChild(image);

            var quantity=document.createElement("span");
            quantity.textContent="Quantity: ";
            articleProduct.appendChild(quantity);

            var select=document.createElement("select");
            select.setAttribute("class", "articleQuantity");
            for(var i=1;i<=maxQuantity;i++)
            {
                var option=document.createElement("option");
                option.setAttribute("value", i);
                option.textContent=i;
                select.appendChild(option);
            }
            articleProduct.appendChild(select);

            var addToCart=document.createElement("button");
            addToCart.setAttribute("class", "addToCart");
            addToCart.textContent="Add to Shopping Cart";
            articleProduct.appendChild(addToCart);

            var para=document.createElement("p");
            para.textContent="";
            articleProduct.appendChild(para);

            var price=document.createElement("span");
            price.setAttribute("class", "itemPrice");
            price.textContent=this.itemPrice+" €";
            articleProduct.appendChild(price);


            articleProduct.getElementsByClassName("addToCart")[0].addEventListener('click', addToCartButtonClicked); //adding event listener with remove <button>
            mainProductScreen.appendChild(articleProduct);
        }
    }

    class ShoppingCart {
        constructor(shoppingCartHeading) {
            this.shoppingCartHeading = shoppingCartHeading; // Heading of the shopping cart
            this.items = []; // Array of items which are in the shopping cart
            this.sum = 0; // Sum of all items in the shopping cart

            // Add Heading tag (h2) and content to shoppingCartBox
            this.shoppingCartBox = document.getElementById("shoppingCart");
            this.heading = document.createElement("h2");
            this.shoppingCartTitle = document.createTextNode(this.shoppingCartHeading);
            this.heading.appendChild(this.shoppingCartTitle);
            this.shoppingCartBox.appendChild(this.heading);

            // Add Unordered List tag (ul) to shoppingCartBox
            this.unorderedList = document.createElement("ul");
            this.shoppingCartBox.appendChild(this.unorderedList);

            // Add divBox to shoppingCartBox
            this.divPriceSum = document.createElement("div");
            this.divPriceSum.setAttribute("id", "priceSum");
            this.divPriceSum.textContent = "Sum: " + this.sum + " €";
            this.shoppingCartBox.appendChild(this.divPriceSum);

        }

        updateProductInShoppingCart(itemTitle, itemPrice, articleQuantity, itemNumber) {

            var itemTitle=itemTitle;
            var itemPrice=itemPrice;
            var articleQuantity=articleQuantity;
            var totalProductPrice=itemPrice*articleQuantity;
            var itemNumber=itemNumber;
            var itemID="shoppingCartProduct_"+itemNumber;

            var updateItem=document.getElementById(itemID);
            var delPrice=updateItem.getElementsByClassName('productPriceInCart')[0].innerText;
            this.sum=this.sum-delPrice;

            updateItem.getElementsByClassName('productsQuantityInCart')[0].innerText=articleQuantity;

            updateItem.getElementsByClassName('productPriceInCart')[0].innerText=totalProductPrice;

            this.showSum(totalProductPrice);
        }

        deleteBookFromShoppingCart(totalProductPrice) {

            var totalProductPrice=totalProductPrice;
            this.sum=this.sum-totalBookPrice;
            this.sum=Math.round(this.sum * 100) / 100;

            var divPriceSum=this.divPriceSum;
            var shoppingCartBox=this.shoppingCartBox;

            divPriceSum.textContent = "Sum: " + this.sum + " €";
            shoppingCartBox.appendChild(this.divPriceSum);
        }

        addBookToShoppingCart(itemTitle, itemPrice, articleQuantity, itemNumber) {

            var itemTitle=itemTitle;
            var itemPrice=itemPrice;
            var articleQuantity=articleQuantity;
            var totalBookPrice=bookPrice*articleQuantity;
            var itemNumber=itemNumber;


            for (var i=0;i<this.items.length;i++)
            {
                if(this.items[i]==itemTitle)
                {
                    this.updateProductInShoppingCart(itemTitle, itemPrice, articleQuantity, itemNumber);
                    return;
                }
            }

            var shoppingCartBox=this.shoppingCartBox;
            var unorderedList=this.unorderedList;

            var cartItems=document.createElement("article");
            cartItems.setAttribute("class", "shoppingCartProduct");
            cartItems.setAttribute("id", "shoppingCartProduct_"+itemNumber);
            var cartProductContent=`
      <span class="cartProductContent">
        <span class="itemTitleInCart">${itemTitle}</span>
        <span hidden class="productUnitPriceInCart">${itemPrice}</span> 
        <span class="productsQuantityInCart">${articleQuantity}</span> 
        Pcs 
        <span class="productUnitPriceInCart">${totalProductPrice}</span> 
        €
      </span>
      <button class="removePrdoductButtons">X</button>
      `;
            cartItems.innerHTML=cartProductContent;
            unorderedList.appendChild(cartItems);
            shoppingCartBox.appendChild(unorderedList);

            this.products.push(itemTitle);

            this.showSum(totalProductPrice);
            cartItems.getElementsByClassName("removeProductButtons")[0].addEventListener('click', removeCartItem); //adding event listener with add to cart <button>
        }
        showSum(totalProductPrice)
        {
            var totalProductPrice=totalProductPrice;
            this.sum=this.sum+totalProductPrice;
            this.sum=Math.round(this.sum * 100) / 100;
            var divPriceSum=this.divPriceSum;
            var shoppingCartBox=this.shoppingCartBox;

            divPriceSum.textContent = "Sum: " + this.sum + " €";
            shoppingCartBox.appendChild(this.divPriceSum);
        }
    }


    const shoppingCart = new ShoppingCart("Shopping Cart");
    let product = [];
    // hier muss etwas anderen
    product[0] = new ProductsClass("Html5: Up And Running", "img/HTML5_Up_And_Running.jpg", 24.80, "If you don't know about the new features available in HTML5, now's the time to find out. The latest version of this markup language is going to significantly change the way you develop web applications, and this book provides your first real look at HTML5's new elements and attributes.", "978-0596806026");
    product[1] = new ProductsClass("HTML5 Pocket Reference", "img/HTML5_Pocket_Reference.jpg",15.90,"Need help finding the right HTML5 element or attribute for your web page or application? HTML5 Pocket Reference is the classic reference that web designers and developers have been keeping close at hand for more than thirteen years.", "978-1449363352");

    for(let i = 0; i < product.length; i++)
    {
        product[i].addProductToScreen();
    }

    var addToCartButtons = document.getElementsByClassName('addToCart')
    for (var i = 0; i < addToCartButtons.length; i++) {
        var button = addToCartButtons[i];
        button.addEventListener('click', addToCartButtonClicked);
    }

    var removeProductButtons = document.getElementsByClassName('removeProductButtons')
    for (var i = 0; i < removeProductButtons.length; i++) {
        var button = removeProductButtons[i]
        button.addEventListener('click', removeCartItem)
    }

    function addToCartButtonClicked(event) {
        var button=event.target;
        var productItem=button.parentElement;
        var itemTitle=bookItem.getElementsByClassName('bookTitle')[0].innerText;
        var itemPrice=bookItem.getElementsByClassName('bookPrice')[0].innerText.replace(" €", '');
        var articleQuantity=productItem.getElementsByClassName('articleQuantity')[0].value;
        var itemNumber=productItem.getElementsByClassName('isbn')[0].innerText.replace("ISBN-13: ", '');// hier auch

        shoppingCart.addProductToShoppingCart(itemTitle, itemPrice, articleQuantity, itemNumber);
    }

    function removeCartItem(event) {
        var buttonClicked = event.target;
        var parentElement=buttonClicked.parentElement;
        var cartProductContent=parentElement.getElementsByClassName('cartProductContent')[0];
        var productPriceInCart=cartProductContent.getElementsByClassName('productPriceInCart')[0].innerText;
        buttonClicked.parentElement.remove();
        shoppingCart.deleteProductFromShoppingCart(productPriceInCart);
    }
});
