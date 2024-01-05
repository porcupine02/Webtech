let Item = document.querySelector('.item');
let carts = JSON.parse(localStorage.getItem("CART")) || [];
// function disData(){
//     console.log(localStorage.getItem("CART"));
//     renderCartItems();
// }
// disData();
updateCart();

function addCart(id) {
    const item = products.find((product) => product.id == id)
    if (document.getElementById('Vanila').checked) {
        carts.push({
            ...item,
            flour: "vanila",
            numberOfUnits: 1,
            ids: Math.random(),
        })

    } else if (document.getElementById('Charcoal').checked) {

        carts.push({
            ...item,
            flour: "Charcoal",
            numberOfUnits: 1,
            ids: Math.random(),
        })

    } else if (document.getElementById('TwoTone').checked) {

        carts.push({
            ...item,
            flour: "TwoTone",
            numberOfUnits: 1,
            ids: Math.random(),
        })

    }
    // else {
    //     carts.push({
    //         ...item,
    //         numberOfUnits: 1,
    //     });
    // }
    cart.classList.add("active");
    updateCart();

}

function updateCart() {
    renderCartItems();
    // renderSubtotal();
    localStorage.setItem("CART", JSON.stringify(carts));
}

function renderCartItems() {
    Item.innerHTML = "";
    // var Vanila = document.querySelector('#Vanila').checked;
    // var Charcoal = document.querySelector('#Charcoal').checked;
    // var TwoTone = document.querySelector('#TwoTone').checked;


    carts.forEach((item) => {

        Item.innerHTML += `
                <div class="cart-item">
                <div class="item-info">
                    <img src="${item.img}" alt="" class="product-img">
                    <h4>${item.menu}</h4>
                </div>
                <div class="unit-price">
                    ${item.price} baht
                </div>
                <div class="flour1">
                    แป้ง : ${item.flour}
                </div>

                <div class="units">
                    <div class="btn minus" onclick="changeNumberOfUnits('minus', ${item.ids})">-</div>
                    <div class="number">${item.numberOfUnits}</div>
                    <div class="btn plus" onclick="changeNumberOfUnits('plus', ${item.ids})">+</div>
                    <div class="bx bxs-trash-alt cart-remove" onclick="removeItemFromCart(${item.ids})"></div>
                </div>
            </div>
                `
    })
}
function removeItemFromCart(ids) {
    carts = carts.filter((item) => item.ids != ids)
    updateCart();
}

function changeNumberOfUnits(action, ids) {
    carts = carts.map((item) => {

        let numberOfUnits = item.numberOfUnits;

        if (item.ids == ids) {
            if (action == "minus" && numberOfUnits > 1) {
                numberOfUnits--;
            }
            else if (action == "plus") {
                numberOfUnits++;
            }
        }
        return {
            ...item,
            numberOfUnits,
        };
    });
    updateCart();
}
