// BCS2243 WEB ENGINEERING [HOT]
// Student ID: CB20033
// Student Name: AHMAD ZHAFRAN FARUQI BIN ZAINAL ABIDIN
// Section: 02B
// Lecturer name: DR. NOORLIN MOHD ALI

function checkBalance() {

    var land = document.getElementById("textbox2").value;
    var interest = document.getElementById("textbox4").value;
    var cash = document.getElementById("textbox6").value;
    var bill = document.getElementById("textbox8").value;
    var machinery = document.getElementById("textbox10").value;
    var loan = document.getElementById("textbox12").value;
    var investment = document.getElementById("textbox14").value;
    var equipment = document.getElementById("textbox16").value;
    var stock = document.getElementById("textbox18").value;
    var inventory = document.getElementById("textbox20").value;
    var earning = document.getElementById("textbox22").value;

    var asset = +land + +cash + +machinery + +investment + +equipment + +inventory;
    var liability = +interest + +bill + +loan + +stock + +earning;

    document.getElementById("textbox23").value = asset.toFixed(2);
    document.getElementById("textbox24").value = liability.toFixed(2);

    if (document.getElementById("textbox23").value == document.getElementById("textbox24").value) {
        document.getElementById("demo").innerHTML = (
            "Good! Your assets and liability/equity are balance."
        );
    }

    else {
        document.getElementById("demo").innerHTML = (
            "<span class='error'>Sorry, your asset and liability/equity are inbalance! Please check again, your total assets should equal with total liability/equity.</span>"
        );
    }

}

function checkInstallment() {

    var purpose = document.getElementById("purpose").value;
    var price = document.getElementById("price").value;
    var term = document.getElementById("term").value;

    var ratePercent = document.getElementById("rate").value;
    var rate = (+ratePercent / 100) / 12;

    var payment = document.getElementById("payment").value;

    document.getElementById("loanAmount").value = +price - +payment;
    var loanAmount = document.getElementById("loanAmount").value;

    var paymentMonthly = (+loanAmount * rate) / (1 - Math.pow(1 + rate, -(+term * 12)));
    var paymentTotal = paymentMonthly * (+term * 12);
    var interestTotal = paymentTotal - +loanAmount;

    document.getElementById("paymentMonthly").value = paymentMonthly.toFixed(2);
    document.getElementById("paymentTotal").value = paymentTotal.toFixed(2);
    document.getElementById("interestTotal").value = interestTotal.toFixed(2);

}