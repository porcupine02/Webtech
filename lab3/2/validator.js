/** File : validator.js **/
function validateForm() {
    let idcard = document.forms.myForm.idcard.value;
    if (idcard.length != 13) {
        alert("idcard must be 13 number");
        return false;
    }
    let bname = document.forms.myForm.BeforName.value;
    if (bname == "000") {
        alert("beforname must be selected");
        return false;
    }
    let fname = document.forms.myForm.FirstName.value;
    //let fname = document.forms["myForm"]["FirstName"].value;
    if (fname.length < 3) {
        alert("Firstname must be filled out");
        return false;
    }

    let lname = document.forms.myForm.LastName.value;
    if (lname.length < 3) {
        alert("Lastname must be filled out");
        return false;
    }

    let address = document.forms.myForm.Address.value;
    if (address.length < 3) {
        alert("Address must be filled out");
        return false;
    }

    let tom = document.forms.myForm.tombon.value;
    if (tom.length < 3) {
        alert("Tombon must be filled out");
        return false;
    }


    let post = document.forms.myForm.post.value;
    if (post.length < 5) {
        alert("Post must be filled out");
        return false;
    }


    let country = document.forms.myForm.province.value;
    if (country == "") {
        alert("Province must be selected");
        return false;
    }


}