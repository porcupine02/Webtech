let shopContent = document.querySelector('.shop-content');
let cart = document.querySelector('.cart');
let cartIcon = document.querySelector('.cart-icon');
let closeCart = document.querySelector('#close-cart');


cartIcon.onclick = () => {
    cart.classList.add("active");
}

closeCart.onclick = () => {
    cart.classList.remove("active");
}


function categoryProducts(value) {
    shopContent.innerHTML = "";
    // btnColor(value);

    products.forEach((product) => {
        if (value == product.category) {
            shopContent.innerHTML += `
        <div class="product-box">
            <img src="${product.img}" class="product-img">
            <h1 class="product-title">${product.menu}</h1>
            <span class="price">${product.price} baht</span>
            <i class="bx bx-shopping-bag add-cart" onclick="addToCart(${product.id})"></i>
        </div>
        `;
        }
        else if (value == "") {
            shopContent.innerHTML += `
        <div class="product-box">
            <img src="${product.img}" class="product-img">
            <h1 class="product-title">${product.menu}</h1>
            <span class="price">${product.price} baht</span>
            <i class="bx bx-shopping-bag add-cart" onclick="addToCart(${product.id})"></i>
        </div>
            `;
        }
    })
}
function allProducts() {
    products.forEach((product) => {
        shopContent.innerHTML += `
        <div class="product-box">
            <img src="${product.img}" class="product-img">
            <h1 class="product-title">${product.menu}</h1>
            <span class="price">${product.price}</span>
            <i class="bx bx-shopping-bag add-cart" onclick="addToCart(${product.id})"></i>
        </div>
    `
    });
}

allProducts(
);



