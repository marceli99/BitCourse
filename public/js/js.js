function json() {
    var xmlhttp = new XMLHttpRequest();
    var url = "/data";

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            var myArr = JSON.parse(this.responseText);
            myFunction(myArr);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();

    function myFunction(data) {
        document.getElementById("usd").innerHTML = data['usd'] + " $";
        document.getElementById("pln").innerHTML = data['pln'] + " PLN";
        document.getElementById("eur").innerHTML = data['eur'] + " EUR";
        document.getElementById("gbp").innerHTML = data['gbp'] + " GBP";
        document.getElementById("jpy").innerHTML = data['jpy'] + " JPY";
        document.getElementById("chf").innerHTML = data['chf'] + " CHF";
        if (data['yesterday'] >= 0) {
            document.getElementById("yesterday").innerHTML = "<span class=' high '>" + data['yesterday'] + "</span>";
        } else {
            document.getElementById("yesterday").innerHTML = "<span class=' low '>" + data['yesterday'] + "</span>";
        }
        if (data['weekago'] >= 0) {
            document.getElementById("weekago").innerHTML = "<span class=' high '>" + data['weekago'] + "</span>";
        } else {
            document.getElementById("weekago").innerHTML = "<span class=' low '>" + data['weekago'] + "</span>";
        }
        if (data['monthago'] >= 0) {
            document.getElementById("monthago").innerHTML = "<span class=' high '>" + data['monthago'] + "</span>";
        } else {
            document.getElementById("monthago").innerHTML = "<span class=' low '>" + data['monthago'] + "</span>";
        }
        if (data['yearago'] >= 0) {
            document.getElementById("yearago").innerHTML = "<span class=' high '>" + data['yearago'] + "</span>";
        } else {
            document.getElementById("yearago").innerHTML = "<span class=' low '>" + data['yearago'] + "</span>";
        }
    }
}

window.setInterval(function () {
    var date = new Date();
    var second = date.getSeconds();
    document.getElementById("updated").innerHTML = second;
    if (second === 0) {
        json();
    }
}, 1000);
var xmlhttp = new XMLHttpRequest();
var url = "/data";

xmlhttp.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
        var myArr = JSON.parse(this.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(data) {
    document.getElementById("usd").innerHTML = data['usd'] + " $";
    document.getElementById("pln").innerHTML = data['pln'] + " PLN";
    document.getElementById("eur").innerHTML = data['eur'] + " EUR";
    document.getElementById("gbp").innerHTML = data['gbp'] + " GBP";
    document.getElementById("jpy").innerHTML = data['jpy'] + " JPY";
    document.getElementById("chf").innerHTML = data['chf'] + " CHF";
    if (data['yesterday'] >= 0) {
        document.getElementById("yesterday").innerHTML = "<span class=' high '>" + data['yesterday'] + "</span>";
    } else {nwm
        document.getElementById("yesterday").innerHTML = "<span class=' low '>" + data['yesterday'] + "</span>";
    }
    if (data['weekago'] >= 0) {
        document.getElementById("weekago").innerHTML = "<span class=' high '>" + data['weekago'] + "</span>";
    } else {
        document.getElementById("weekago").innerHTML = "<span class=' low '>" + data['weekago'] + "</span>";
    }
    if (data['monthago'] >= 0) {
        document.getElementById("monthago").innerHTML = "<span class=' high '>" + data['monthago'] + "</span>";
    } else {
        document.getElementById("monthago").innerHTML = "<span class=' low '>" + data['monthago'] + "</span>";
    }
    if (data['yearago'] >= 0) {
        document.getElementById("yearago").innerHTML = "<span class=' high '>" + data['yearago'] + "</span>";
    } else {
        document.getElementById("yearago").innerHTML = "<span class=' low '>" + data['yearago'] + "</span>";
    }
}

window.setInterval(function () {
    var date = new Date();
    var second = date.getSeconds();
    document.getElementById("updated").innerHTML = second;
    if (second === 0) {
        json();
    }
}, 1000);