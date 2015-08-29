//Operaciones con pesos
function pesos ( form ) 
{   $("#dotaPesos").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val())  - ($("#f1000p").val() * 100000) - ($("#p1000").val() * 1000)) - ($("#f500p").val() * 1000)) - ($("#p500").val() * 1000));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla1000 ( form ) 
{   $("#f1000p").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val())  - ($("#f1000p").val() * 100000) - ($("#p1000").val() * 1000)) - ($("#f500p").val() * 1000)) - ($("#p500").val() * 1000));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos1000 ( form ) 
{   $("#p1000").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val())  - ($("#f1000p").val() * 100000) - ($("#p1000").val() * 1000)) - ($("#f500p").val() * 1000)) - ($("#p500").val() * 1000));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function fajilla500 ( form ) 
{   $("#f500p").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val())  - ($("#f1000p").val() * 100000) - ($("#p1000").val() * 1000)) - ($("#f500p").val() * 1000)) - ($("#p500").val() * 1000));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 

function pesos500 ( form ) 
{   $("#p500").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val())  - ($("#f1000p").val() * 100000) - ($("#p1000").val() * 1000)) - ($("#f500p").val() * 1000)) - ($("#p500").val() * 1000));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 