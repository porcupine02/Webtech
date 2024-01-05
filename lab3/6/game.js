var point = 1;

function play1() {
    if (point == 0) {
        document.getElementById('block1').innerHTML = "X";
    }
    else {
        document.getElementById('block1').innerHTML = "O";
    }
    return scroll();
}

function play2() {
    if (point == 0) {
        document.getElementById('block2').innerHTML = "X";
    }
    else {
        document.getElementById('block2').innerHTML = "O";
    }
    return scroll();
}
function play3() {
    if (point == 0) {
        document.getElementById('block3').innerHTML = "X";
    }
    else {
        document.getElementById('block3').innerHTML = "O";
    }
    return scroll();
}
function play4() {
    if (point == 0) {
        document.getElementById('block4').innerHTML = "X";
    }
    else {
        document.getElementById('block4').innerHTML = "O";
    }
    return scroll();
}
function play5() {
    if (point == 0) {
        document.getElementById('block5').innerHTML = "X";
    }
    else {
        document.getElementById('block5').innerHTML = "O";
    }
    return scroll();
}
function play6() {
    if (point == 0) {
        document.getElementById('block6').innerHTML = "X";
    }
    else {
        document.getElementById('block6').innerHTML = "O";
    }
    return scroll();
}
function play7() {
    if (point == 0) {
        document.getElementById('block7').innerHTML = "X";
    }
    else {
        document.getElementById('block7').innerHTML = "O";
    }
    return scroll();
}
function play8() {
    if (point == 0) {
        document.getElementById('block8').innerHTML = "X";
    }
    else {
        document.getElementById('block8').innerHTML = "O";
    }
    return scroll();
}
function play9() {
    if (point == 0) {
        document.getElementById('block9').innerHTML = "X";
    }
    else {
        document.getElementById('block9').innerHTML = "O";
    }
    return scroll();
}


function scroll() {
    if (point == 0) {
        document.getElementById('turn').innerHTML = "Turn : O";
        point++;
    }
    else {
        document.getElementById('turn').innerHTML = "Turn : X"
        point--;
    }
    return check();
}

function check() {
    var sit1 = document.getElementById('block1').value;
    var sit2 = document.getElementById('block2').value;
    var sit3 = document.getElementById('block3').value;
    var sit4 = document.getElementById('block4').value;
    var sit5 = document.getElementById('block5').value;
    var sit6 = document.getElementById('block6').value;
    var sit7 = document.getElementById('block7').value;
    var sit8 = document.getElementById('block8').value;
    var sit9 = document.getElementById('block9').value;
    // if (sit1 == sit2 == sit3) {
    //     if (point == 1) {
    //         alert("X Win");
    //     }
    //     else {
    //         alert("O Win");
    //     }
    // }

    // if ((sit1 == "O") && (sit2 == "O") && (sit3 == "O")) {
    //     alert("O Win");
    // }
}

