//Operaciones con pesos
function pesos ( form ) 
{   $("#dotaPesos").keyup(function () {
    $("#insertaPeso").val($("#dotaPesos").val());
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla1000 ( form ) 
{   $("#f1000p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos1000 ( form ) 
{   $("#p1000").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla500 ( form ) 
{   $("#f500p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos500 ( form ) 
{   $("#p500").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla200 ( form ) 
{   $("#f200p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos200 ( form ) 
{   $("#p200").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla100 ( form ) 
{   $("#f100p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos100 ( form ) 
{   $("#p100").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla50 ( form ) 
{   $("#f50p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos50 ( form ) 
{   $("#p50").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla20 ( form ) 
{   $("#f20p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos20 ( form ) 
{   $("#p20").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}

function fajilla10 ( form ) 
{   $("#f10p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}  

function pesos10 ( form ) 
{   $("#p10").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}

function fajilla5 ( form ) 
{   $("#f5p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos5 ( form ) 
{   $("#p5").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}

function fajilla2 ( form ) 
{   $("#f2p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos2 ( form ) 
{   $("#p2").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}

function fajilla1 ( form ) 
{   $("#f1p").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos1 ( form ) 
{   $("#p1").keyup(function () {
    $("#totalConv").val($("#dotaPesos").val() - ($("#p1000").val() * 1000) - ($("#f1000p").val() * 100000) - ($("#f500p").val() * 50000) - ($("#p500").val() * 500) - ($("#f200p").val() * 20000) - ($("#p200").val() * 200) - ($("#f100p").val() * 10000) - ($("#p100").val() * 100) - ($("#f50p").val() * 5000) - ($("#p50").val() * 50) - ($("#f20p").val() * 2000) - ($("#p20").val() * 20) - ($("#f10p").val() * 1000) - ($("#p10").val() * 10) - ($("#f5p").val() * 500) - ($("#p5").val() * 5) - ($("#f2p").val() * 200) - ($("#p2").val() * 2) - ($("#f1p").val() * 100) - ($("#p1").val() * 1));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
}

//Operaciones con dólares
function dolares ( form ) 
{   $("#dotaDolar").keyup(function () {
    $("#insertaDolar").val($("#dotaDolar").val());
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
}

function fajilla100d ( form ) 
{   $("#f100d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares100 ( form ) 
{   $("#d100").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla50d ( form ) 
{   $("#f50d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares50 ( form ) 
{   $("#d50").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla20d ( form ) 
{   $("#f20d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares20 ( form ) 
{   $("#d20").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla10d ( form ) 
{   $("#f10d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares10 ( form ) 
{   $("#d10").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla5d ( form ) 
{   $("#f5d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares5 ( form ) 
{   $("#d5").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla2d ( form ) 
{   $("#f2d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares2 ( form ) 
{   $("#d2").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function fajilla1d ( form ) 
{   $("#f1d").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

function dolares1 ( form ) 
{   $("#d1").keyup(function () {
    $("#totalDllConv").val($("#dotaDolar").val() - ($("#f100d").val() * 10000) - ($("#d100").val() * 100) - ($("#f50d").val() * 5000) - ($("#d50").val() * 50) - ($("#f20d").val() * 2000) - ($("#d20").val() * 20) - ($("#f10d").val() * 1000) - ($("#d10").val() * 10) - ($("#f5d").val() * 500) - ($("#d5").val() * 5) - ($("#f2d").val() * 200) - ($("#d2").val() * 2) - ($("#f1d").val() * 100) - ($("#d1").val() * 1));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    });
} 

//Operaciones con euros
function euros ( form ) 
{   $("#dotaEuro").keyup(function () {
    $("#insertaEuro").val($("#dotaEuro").val());
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
}

function fajilla100e ( form ) 
{   $("#f100e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros100 ( form ) 
{   $("#e100").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla50e ( form ) 
{   $("#f50e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros50 ( form ) 
{   $("#e50").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla20e ( form ) 
{   $("#f20e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros20 ( form ) 
{   $("#e20").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla10e ( form ) 
{   $("#f10e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros10 ( form ) 
{   $("#e10").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla5e ( form ) 
{   $("#f5e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros5 ( form ) 
{   $("#e5").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla2e ( form ) 
{   $("#f2e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros2 ( form ) 
{   $("#e2").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function fajilla1e ( form ) 
{   $("#f1e").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

function euros1 ( form ) 
{   $("#e1").keyup(function () {
    $("#totalEuroConv").val($("#dotaEuro").val() - ($("#f100e").val() * 10000) - ($("#e100").val() * 100) - ($("#f50e").val() * 5000) - ($("#e50").val() * 50) - ($("#f20e").val() * 2000) - ($("#e20").val() * 20) - ($("#f10e").val() * 1000) - ($("#e10").val() * 10) - ($("#f5e").val() * 500) - ($("#e5").val() * 5) - ($("#f2e").val() * 200) - ($("#e2").val() * 2) - ($("#f1e").val() * 100) - ($("#e1").val() * 1));
    if ($("#totalEuroConv").val() < 0) { document.getElementById("totalEuroConv").style.color="#FF0000"; };
    if ($("#totalEuroConv").val() == 0) { document.getElementById("totalEuroConv").style.color="#009933"; };
    if ($("#totalEuroConv").val() > 0) { document.getElementById("totalEuroConv").style.color="#DBDB69"; };
    });
} 

//Operaciones con canadienses
function canadienses ( form ) 
{   $("#dotaCana").keyup(function () {
    $("#insertaCana").val($("#dotaCana").val());
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
}

function fajilla100c ( form ) 
{   $("#f100c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses100 ( form ) 
{   $("#c100").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla50c ( form ) 
{   $("#f50c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses50 ( form ) 
{   $("#c50").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla20c ( form ) 
{   $("#f20c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses20 ( form ) 
{   $("#c20").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla10c ( form ) 
{   $("#f10c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses10 ( form ) 
{   $("#c10").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla5c ( form ) 
{   $("#f5c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses5 ( form ) 
{   $("#c5").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla2c ( form ) 
{   $("#f2c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses2 ( form ) 
{   $("#c2").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function fajilla1c ( form ) 
{   $("#f1c").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 

function canadienses1 ( form ) 
{   $("#c1").keyup(function () {
    $("#totalCanConv").val($("#dotaCana").val() - ($("#f100c").val() * 10000) - ($("#c100").val() * 100) - ($("#f50c").val() * 5000) - ($("#c50").val() * 50) - ($("#f20c").val() * 2000) - ($("#c20").val() * 20) - ($("#f10c").val() * 1000) - ($("#c10").val() * 10) - ($("#f5c").val() * 500) - ($("#c5").val() * 5) - ($("#f2c").val() * 200) - ($("#c2").val() * 2) - ($("#f1c").val() * 100) - ($("#c1").val() * 1));
    if ($("#totalCanConv").val() < 0) { document.getElementById("totalCanConv").style.color="#FF0000"; };
    if ($("#totalCanConv").val() == 0) { document.getElementById("totalCanConv").style.color="#009933"; };
    if ($("#totalCanConv").val() > 0) { document.getElementById("totalCanConv").style.color="#DBDB69"; };
    });
} 