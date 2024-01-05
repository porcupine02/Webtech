function createcard() {
    let name = document.forms.Form.name.value;
    document.getElementById("dataname").innerHTML = name;

    let phone = document.forms.Form.phone.value;
    document.getElementById("dataphone").innerHTML = "Call : " + phone;

    let email = document.forms.Form.email.value;
    document.getElementById("dataemail").innerHTML = email;

    let company = document.forms.Form.company.value;
    document.getElementById("datacompany").innerHTML = company;

    document.getElementById("bg").style.backgroundImage = "url('https://media.discordapp.net/attachments/1012344674410823791/1012728730122203217/2.png')";
}


function validator() {
    let name = document.forms.Form.name.value;
    let phone = document.forms.Form.phone.value;
    let email = document.forms.Form.email.value;
    let company = document.forms.Form.company.value;

    if (name.length <= 3) {
        alert("pleses enter your fullname");
    }
    else if (phone.length != 10) {
        alert("plese enter your phone number");
    }
    else if (email.length <= 10) {
        alert("please enter your E-mail");
    }
    else if (company.length <= 3) {
        alert("please enter your company");
    }
    createcard();
}