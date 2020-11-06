"use strict";

function loadCartFromCookie(){
    const cookieArray = document.cookie.split(";");
    for(let i = 0; i < cookieArray.length; i++){
        var nameValue = cookieArray[i].split("=");
        if(nameValue[0].trim() === "cart"){
            return decodeCart(nameValue[1]);
        }
    }
    return {};
}

function decodeCart(cookieCart){
    const decoded = decodeURIComponent(cookieCart);
    const cartObject = JSON.parse(decoded);
    return cartObject;
}

function encodeCart(cart){
    const cartJSON = JSON.stringify(cart);
    const encodedCart = encodeURIComponent(cartJSON);
    return encodedCart;
}

function saveCartToCookie(cart){
    const encodedCart = encodeCart(cart);
    const maxAge = 60*60*24*7;
    document.cookie = "cart=" + encodedCart + ";max-age=" + maxAge;
}

function findProduct(productArray, productId){
    const productIndex = findProductIndex(productArray, productId);
    if(productIndex === -1)
        return null;
    else
        return productArray[productIndex];
}

function findProductIndex(productArray, productId){
    for(let i = 0; i < productArray.length; i++){
        if(productArray[i][0] == productId){
            return i;
        }
    }
    return -1;
}

function addToCart(productId, shopId){
    let cart = loadCartFromCookie();
    if(!cart.hasOwnProperty(shopId))
        cart[shopId] = [];
    if(findProduct(cart[shopId], productId) === null){
        cart[shopId].push([productId, 1]);
    }
    saveCartToCookie(cart);
}

function changeNumberInCart(productId, shopId, newNumber){
    let cart = loadCartFromCookie();
    let product = findProduct(cart[shopId], productId);
    product[1] = newNumber;
    saveCartToCookie(cart);
}

function deleteFromCart(productId, shopId){
    let cart = loadCartFromCookie();
    const productIndex = findProductIndex(cart[shopId], productId);
    cart[shopId].splice(productIndex, 1);
    saveCartToCookie(cart);
}

function clearCart(shopId){
    let cart = loadCartFromCookie();
    delete cart[shopId];
    saveCartToCookie(cart);
}

function buttonAddClick(event){
    let button = event.target;
    const productId = button.dataset.productId;
    addToCart(productId, shopId);
    button.textContent = "W koszyku";
    button.disabled = true;
}

function buttonDeleteClick(event){
    let button = event.target;
    const productId = button.dataset.productId;
    deleteFromCart(productId, shopId);
    window.location.reload();
}

function cartNumberChange(event){
    let textInput = event.target;
    const productId = textInput.dataset.productId;
    const newNumber = parseInt(textInput.value);
    if(!isNaN(newNumber) && newNumber > 0){
        changeNumberInCart(productId, shopId, newNumber);
    }
    window.location.reload();
}

function addListenerToClass(className, eventType, eventListener){
    let elements = document.getElementsByClassName(className);
    for(let i = 0; i < elements.length; i++){
        elements[i].addEventListener(eventType, eventListener);
    }
}

function disableButtonsForAddedProducts(){
    let elements = document.getElementsByClassName("button-add-cart");
    let cart = loadCartFromCookie();
    let shopCart = cart[shopId];
    for(let i = 0; i < elements.length; i++){
        let productId = elements[i].dataset.productId;
        if(findProduct(shopCart, productId) !== null){
            elements[i].disabled = true;
            elements[i].textContent = "W koszyku";
        }
    }
}

function setupCartButtons(){
    addListenerToClass("button-add-cart", "click", buttonAddClick);
    addListenerToClass("button-delete-cart", "click", buttonDeleteClick);
    addListenerToClass("input-number-in-cart", "change", cartNumberChange);
    disableButtonsForAddedProducts();
}

document.addEventListener("DOMContentLoaded", setupCartButtons);