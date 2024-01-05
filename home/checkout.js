let contain = document.querySelector('.container-2');
let sum = document.querySelector('.box');
var pricesum = 0;


carts.forEach((item) => {
    var count = item.numberOfUnits;
    var price = item.price;
    contain.innerHTML += `<tr><td>${item.menu}<br>แป้ง : ${item.flour}
    <br>ท้อปปิ้ง : ${item.topping}</td>
    <td>${count * price}</td></tr>
            `
    pricesum += price;
})

sum.innerHTML += `แป้ง : ${pricesum}`;