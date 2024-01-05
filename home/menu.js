let showMenu = document.querySelector('.contain');

function addToCart(value) {
    showMenu.innerHTML = "";

    products.forEach((product) => {
        if (product.id == value) {
            // showMenu.innerHTML += `
            //     <div class="menu-container">
            //         <div class="picmenu">
            //             <!-- left container -->
            //             <img src="${product.img}" width="70%">
            //             <br>
            //             <label for="name">${product.menu}</label>
            //             <br><br>
            //             <label for="detail">${product.description}</label>
            //         </div>
            //         <div class="optionmain">
            //             <!-- right container -->
            //             แป้งเครป
            //             <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png" onclick="swax(1)" width="20px" align="right" id="drop1" class="dropdown">
            //             <hr>
            //             <div id="flour">
            //                 <input type="checkbox" class="form-check-input">วนิลา<br>
            //                 <input type="checkbox" class="form-check-input">ชาโคล<br>
            //                 <input type="checkbox" class="form-check-input">ทูโทน<br>
            //             </div>`

            if (value <= 15) {
                //crap
                showMenu.innerHTML += `<div class="menu-container">
                <div class="picmenu">
                    <!-- left container -->
                    <img src="${product.img}" width="70%">
                    <br>
                    <label for="name">${product.menu}</label>
                    <br><br>
                    <label for="detail">${product.description}</label>
                </div>
                <div class="optionmain">
                    <!-- right container -->
                    แป้งเครป
                    <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png" onclick="swax(1)" width="20px" align="right" id="drop1" class="dropdown">
                    <hr>
                    <div id="flour">
                        <input type="radio" name="flour" class="form-check-input" id="Vanila">วนิลา<br>
                        <input type="radio" name="flour" class="form-check-input" id="Charcoal">ชาโคล<br>
                        <input type="radio" name="flour" class="form-check-input" id="TwoTone">ทูโทน<br>
                    </div>
                        <br>
                        ท้อปปิ้ง
                        <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png" width="20px" align="right" onclick="swax(2)" class="dropdown" id="drop2">
                        <hr>
                        <div id="topping">
                            <input type="radio" name="topping" class="form-check-input" id="cheess">ชีส<br>
                            <input type="radio" name="topping" class="form-check-input" id="">carpppp<br>
                            <input type="radio" name="topping" class="form-check-input" id="">carpppp<br>
                            <input type="radio" name="topping" class="form-check-input" id="">carpppp<br>
                        </div>
                        <div id="count">
                            <br>
                            จำนวน
                        </div>
                        <div id="add">
                            <button class="bt" onclick="addCart(${product.id})">เพิ่ม</button>
                        </div>
                    </div>
                </div>
            `;
            } else if (value <= 20) {
                // combo set
                showMenu.innerHTML += `<div class="menu-container">
                <div class="picmenu">
                    <!-- left container -->
                    <img src="${product.img}" width="70%">
                    <br>
                    <label for="name">${product.menu}</label>
                    <br><br>
                    <label for="detail">${product.description}</label>
                </div>
                <div class="optionmain">
                    <!-- right container -->
                    ความหวาน
                    <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png"
                        onclick="swax(1)" width="20px" align="right" id="drop1" class="dropdown">
                    <hr>
                    <div id="flour">
                        <input type="checkbox" class="form-check-input">หวานมาก<br>
                        <input type="checkbox" class="form-check-input">หวานปกติ<br>
                        <input type="checkbox" class="form-check-input">หวานน้อย<br>
                    </div>
                    <div id="count">
                        <br>
                        จำนวน
                    </div>
                    <div id="add">
                        <button class="bt" onclick="addCart()">เพิ่ม</button>
                    </div>
                </div>
            </div>
            `;

            } else if (value <= 30) {
                // beverage
                showMenu.innerHTML += `
                <br>
                ท้อปปิ้ง
                <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png" width="20px" align="right" onclick="swax(2)" class="dropdown" id="drop2">
                <hr>
                <div id="topping">
                    <input type="checkbox" class="form-check-input">drinkkkkkkk<br>
                    <input type="checkbox" class="form-check-input">drinkkkkkkk<br>
                    <input type="checkbox" class="form-check-input">drinkkkkkkk<br>
                    <input type="checkbox" class="form-check-input">drinkkkkkkk<br>
                </div>
                <div id="count">
                    <br>
                    จำนวน
                </div>
                <div id="add">
                    <button class="bt" onclick="addCart()">เพิ่ม</button>
                </div>
            </div>
        </div>

    `;

            } else {
                // tokyo
                showMenu.innerHTML += `
                <br>
                ท้อปปิ้ง
                <img src="https://media.discordapp.net/attachments/892267785244254229/1033705703786958868/bleach.png" width="20px" align="right" onclick="swax(2)" class="dropdown" id="drop2">
                <hr>
                <div id="topping">
                    <input type="checkbox" class="form-check-input">tokyooo <br>
                    <input type="checkbox" class="form-check-input">tokyooo <br>
                    <input type="checkbox" class="form-check-input">tokyooo <br>
                    <input type="checkbox" class="form-check-input">tokyooo <br>
                </div>
                <div id="count">
                    <br>
                    จำนวน
                </div>
                <div id="add">
                    <button class="bt" onclick="addCart()">เพิ่ม</button>
                </div>
            </div>
        </div>
    `;

            }
        }

    })
}


var count1 = 0;
var count2 = 0;

function swax(a) {
    if (a == 1) {
        if (count1 == 0) {
            document.getElementById('drop1').style.transform = 'rotate(180deg)';
            document.getElementById('flour').style.display = "none";
            count1 = 1;
        } else if (count1 == 1) {
            document.getElementById('drop1').style.transform = 'rotate(360deg)';
            document.getElementById('flour').style.display = "block";
            count1 = 0;
        }
    }
    if (a == 2) {
        if (count2 == 0) {
            document.getElementById('drop2').style.transform = 'rotate(180deg)';
            document.getElementById('topping').style.display = "none";
            count2 = 1;
        } else if (count2 == 1) {
            document.getElementById('drop2').style.transform = 'rotate(360deg)';
            document.getElementById('topping').style.display = "block";
            count2 = 0;
        }
    }
}

