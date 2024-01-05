let check = 1;
function changeLanguage() {
    let la1 = document.getElementById("name");
    let la2 = document.getElementById("lastname");
    let la3 = document.getElementById("country");
    let btchange = document.getElementById("btchange");
    if (check == 1) {
        let countries = [
            "Select a country",
            "Thailand",
            "Vietnam",
            "Lao",
            "Malaysia",
            "Singapore",
            "Philippines",
            "Myanmar",
            "Cambodia",
            "Brunei",]
        fname = document.createTextNode("Name : ");
        la1.innerText = "";
        la1.appendChild(fname);

        sname = document.createTextNode("Surname : ");
        la2.innerText = "";
        la2.appendChild(sname);

        country = document.createTextNode("Country : ");
        la3.innerText = "";
        la3.appendChild(country);

        bt = document.createTextNode("change to Thai");
        btchange.innerText = "";
        btchange.appendChild(bt);
        check = 0;


        let coun = document.getElementById("incountry");
        coun.innerText = countries;

        for (i = 0; i < 9; i++) {
            let opt = document.createElement("option");
            let optxt = document.createTextNode(countries[i]);
            opt.appendChild(optxt);
            coun.appendChild(opt);
        }
    }
    else {
        let countries = [
            "เลือกประเทศ",
            "ไทย",
            "เวียดนาม",
            "ลาว",
            "มาเลย์เซีย",
            "สิงคโปร์",
            "ฟิลิปปินส์",
            "เมียนมาร์",
            "กัมพูชา",
            "บรูไน",]
        fname = document.createTextNode("ชื่อ : ");
        la1.innerText = "";
        la1.appendChild(fname);

        sname = document.createTextNode("นามสกุล : ");
        la2.innerText = "";
        la2.appendChild(sname);

        country = document.createTextNode("ประเทศ : ");
        la3.innerText = "";
        la3.appendChild(country);

        bt = document.createTextNode("เป็นเป็นภาษาอังกฤษ");
        btchange.innerText = "";
        btchange.appendChild(bt);

        let coun = document.getElementById("incountry");
        coun.innerText = countries;

        for (i = 0; i < 9; i++) {
            let opt = document.createElement("option");
            let optxt = document.createTextNode(countries[i]);
            opt.appendChild(optxt);
            coun.appendChild(opt);
        }
        check = 1;
    }
}
