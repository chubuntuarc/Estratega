//Operaciones con pesos
function pesos ( form ) 
{   $("#dotaPesos").keyup(function () {
    $("#pesos").val(parseFloat($("#dotaPesos").val()));
    $("#totalConv").val(parseFloat($("#pesos").val()) - parseFloat($("#pesos1000P").val()));
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 
