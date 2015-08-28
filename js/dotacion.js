//Operaciones con pesos
function pesos ( form ) 
{   $("#dotaPesos").keyup(function () {
    $("#totalConv").val(parseFloat($("#dotaPesos").val()));
    $("#totalConv").val(parseFloat($("#dotaPesos").val()) - $("#p1000").val());
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#DBDB69"; };
    });
} 
