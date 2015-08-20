//Convertir valores
//En base al input de pesos en operaciones
function pesos ( form ) 
{   $("#pesosConv").keyup(function () {
    $("#divisaConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2)); 
    $("#subtotal").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalDllConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2));
    $("#dolaresInsertar").val($("#divisaConv").val());
    $("#cambioInsertar").val($("#tipoCambioConv").val());
    $("#pesosInsertar").val($("#pesosConv").val());
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; };  
    $("#totalConv").val(parseFloat($("#subtotal").val()) + parseFloat($("#fajillaC50").val()) + parseFloat($("#fajillaP1").val()) + parseFloat($("#fajillaP2").val()) + parseFloat($("#fajillaP5").val()) + parseFloat($("#fajillaP10").val()) + parseFloat($("#fajillaP20").val()) + parseFloat($("#fajillaP50").val()) + parseFloat($("#fajillaP100").val()) + parseFloat($("#fajillaP200").val()) + parseFloat($("#fajillaP500").val()) + parseFloat($("#fajillaPMill").val()) + parseFloat($("#pesoValMil").val()) + parseFloat($("#pesoVal500").val()) + parseFloat($("#pesoVal200").val()) + parseFloat($("#pesoVal100").val()) + parseFloat($("#pesoVal50").val()) + parseFloat($("#pesoVal20").val()) + parseFloat($("#pesoVal10").val()) + parseFloat($("#pesoVal5").val()) + parseFloat($("#pesoVal2").val()) + parseFloat($("#pesoVal1").val()) + parseFloat($("#pesoVal05").val()));    
    $("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    $("#totalConvS").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalConvS").val() < 0) { document.getElementById("totalConvS").style.color="#FF0000"; };
    if ($("#totalConvS").val() == 0) { document.getElementById("totalConvS").style.color="#009933"; };
    if ($("#totalConvS").val() > 0) { document.getElementById("totalConvS").style.color="#DBDB69"; };
    });
} 

//En base al input de tipo de cambio en operaciones

function cambio ( form ) 
{$("#tipoCambioConv").keyup(function () {
    $("#pesosConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#divisaConv").val($("#pesosConv").val() / $("#tipoCambioConv").val()); 
    $("#subtotal").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalDllConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2));
    $("#dolaresInsertar").val($("#divisaConv").val());
    $("#cambioInsertar").val($("#tipoCambioConv").val());
    $("#pesosInsertar").val($("#pesosConv").val());
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; };  
    $("#totalConv").val(parseFloat($("#subtotal").val()) + parseFloat($("#fajillaC50").val()) + parseFloat($("#fajillaP1").val()) + parseFloat($("#fajillaP2").val()) + parseFloat($("#fajillaP5").val()) + parseFloat($("#fajillaP10").val()) + parseFloat($("#fajillaP20").val()) + parseFloat($("#fajillaP50").val()) + parseFloat($("#fajillaP100").val()) + parseFloat($("#fajillaP200").val()) + parseFloat($("#fajillaP500").val()) + parseFloat($("#fajillaPMill").val()) + parseFloat($("#pesoValMil").val()) + parseFloat($("#pesoVal500").val()) + parseFloat($("#pesoVal200").val()) + parseFloat($("#pesoVal100").val()) + parseFloat($("#pesoVal50").val()) + parseFloat($("#pesoVal20").val()) + parseFloat($("#pesoVal10").val()) + parseFloat($("#pesoVal5").val()) + parseFloat($("#pesoVal2").val()) + parseFloat($("#pesoVal1").val()) + parseFloat($("#pesoVal05").val()));    
    $("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    $("#totalConvS").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalConvS").val() < 0) { document.getElementById("totalConvS").style.color="#FF0000"; };
    if ($("#totalConvS").val() == 0) { document.getElementById("totalConvS").style.color="#009933"; };
    if ($("#totalConvS").val() > 0) { document.getElementById("totalConvS").style.color="#DBDB69"; };
    });
} 
//En base al input de divisa en operaciones
function divisa ( form ) 
{$("#divisaConv").keyup(function () {
    $("#pesosConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#subtotal").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#subtotalDll").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2));
    $("#dolaresInsertar").val($("#divisaConv").val()); 
    $("#cambioInsertar").val($("#tipoCambioConv").val());
    $("#pesosInsertar").val($("#pesosConv").val());
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; };  
    $("#totalConv").val(parseFloat($("#subtotal").val()) + parseFloat($("#fajillaC50").val()) + parseFloat($("#fajillaP1").val()) + parseFloat($("#fajillaP2").val()) + parseFloat($("#fajillaP5").val()) + parseFloat($("#fajillaP10").val()) + parseFloat($("#fajillaP20").val()) + parseFloat($("#fajillaP50").val()) + parseFloat($("#fajillaP100").val()) + parseFloat($("#fajillaP200").val()) + parseFloat($("#fajillaP500").val()) + parseFloat($("#fajillaPMill").val()) + parseFloat($("#pesoValMil").val()) + parseFloat($("#pesoVal500").val()) + parseFloat($("#pesoVal200").val()) + parseFloat($("#pesoVal100").val()) + parseFloat($("#pesoVal50").val()) + parseFloat($("#pesoVal20").val()) + parseFloat($("#pesoVal10").val()) + parseFloat($("#pesoVal5").val()) + parseFloat($("#pesoVal2").val()) + parseFloat($("#pesoVal1").val()) + parseFloat($("#pesoVal05").val()));    
    $("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; };
    $("#totalConvS").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalConvS").val() < 0) { document.getElementById("totalConvS").style.color="#FF0000"; };
    if ($("#totalConvS").val() == 0) { document.getElementById("totalConvS").style.color="#009933"; };
    if ($("#totalConvS").val() > 0) { document.getElementById("totalConvS").style.color="#DBDB69"; };
    });
}

//Diferencia entre el total y el deglose / Pesos / Dólares / Fajillas
//Campo de 1000 pesos ***Compra
function pesos1000C ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; };  });
}

//Fajilla de 1000 pesos ***Compra
function fajilla1000PC ( form ) 
{$("#f1").keyup(function () {
    $("#fajillaPMill").val(parseFloat($("#f1").val() * 100 * 1000));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 500 pesos ***Compra
function pesos500C ( form ) 
{$("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; };});
}

//Fajilla de 500 pesos ***Compra
function fajilla500PC ( form ) 
{$("#f2").keyup(function () {
    $("#fajillaP500").val(parseFloat($("#f2").val() * 100 * 500));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });}


//Campo de 200 pesos ***Compra
function pesos200C ( form ) 
{$("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 200 pesos ***Compra
function fajilla200PC ( form ) 
{$("#f3").keyup(function () {
    $("#fajillaP200").val(parseFloat($("#f3").val() * 100 * 200));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 100 pesos ***Compra
function pesos100C ( form ) 
{$("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 100 pesos ***Compra
function fajilla100PC ( form ) 
{$("#f4").keyup(function () {
    $("#fajillaP100").val(parseFloat($("#f4").val() * 100 * 100));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 50 pesos **Compra
function pesos50C ( form ) 
{$("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 50 pesos ***Compra
function fajilla50PC ( form ) 
{$("#f5").keyup(function () {
    $("#fajillaP50").val(parseFloat($("#f5").val() * 100 * 50));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 20 pesos ***Compra
function pesos20C ( form ) 
{$("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 20 pesos ***Compra
function fajilla20PC ( form ) 
{$("#f6").keyup(function () {
    $("#fajillaP20").val(parseFloat($("#f6").val() * 100 * 20));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 10 pesos ***Compra
function pesos10C ( form ) 
{$("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 10 pesos ***Compra
function fajilla10PC ( form ) 
{$("#f7").keyup(function () {
    $("#fajillaP10").val(parseFloat($("#f7").val() * 100 * 10));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 5 pesos **Compra
function pesos5C ( form ) 
{$("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 5 pesos ***Compra
function fajilla5PC ( form ) 
{$("#f8").keyup(function () {
    $("#fajillaP5").val(parseFloat($("#f8").val() * 100 * 5));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 2 pesos ***Compra
function pesos2C ( form ) 
{$("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 2 pesos ***Compra
function fajilla2PC ( form ) 
{$("#f9").keyup(function () {
    $("#fajillaP2").val(parseFloat($("#f9").val() * 100 * 2));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 1 peso ***Compra
function pesos1C ( form ) 
{$("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 1 peso ***Compra
function fajilla1PC ( form ) 
{$("#f10").keyup(function () {
    $("#fajillaP1").val(parseFloat($("#f10").val() * 100 * 1));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 50 centavos ***Compra
function pesos05C ( form ) 
{$("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * .50);
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Fajilla de 50 centavos ***Compra
function fajilla50CC ( form ) 
{$("#f11").keyup(function () {
    $("#fajillaC50").val(parseFloat($("#f11").val() * 100 * .5));
    $("#totalConv").val(parseFloat($("#subtotal").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    if ($("#totalConv").val() > 0) { document.getElementById("totalConv").style.color="#FF0000"; };
    if ($("#totalConv").val() == 0) { document.getElementById("totalConv").style.color="#009933"; };
    if ($("#totalConv").val() < 0) { document.getElementById("totalConv").style.color="#DBDB69"; }; });
}

//Campo de 100 dólares
function dolares100 ( form ) 
{$("#d100Dll").keyup(function () {
    $("#dolarVal100").val($("#d100Dll").val() * 100);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });} 

//Campo de 100 dólares **Compra
function dolares100C ( form ) 
{$("#d100Dll").keyup(function () {
    $("#dolarVal100").val($("#d100Dll").val() * 100);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
} 

//Campo de 100 dólares **Cambio
function pesos100SC ( form ) 
{$("#m100S").keyup(function () {
    $("#pesoVal100S").val(parseFloat($("#m100S").val() * 100));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 100 dólares
function fajilla100D ( form ) 
{$("#f15").keyup(function () {
    $("#fajillaD100").val(parseFloat($("#f15").val() * 100 * 100));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 100 dólares ***Compra
function fajilla100DC ( form ) 
{$("#f15").keyup(function () {
    $("#fajillaD100").val(parseFloat($("#f15").val() * 100 * 100));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 100 dólares **Cambio
function fajilla100PSC ( form ) 
{$("#f25").keyup(function () {
    $("#fajillaP100S").val(parseFloat($("#f25").val() * 100 * 100));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 50 dólares
function dolares50 ( form ) 
{$("#d50Dll").keyup(function () {
    $("#dolarVal50").val($("#d50Dll").val() * 50);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 50 dólares ***Compra
function dolares50C ( form ) 
{$("#d50Dll").keyup(function () {
    $("#dolarVal50").val($("#d50Dll").val() * 50);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 50 dólares **Cambio
function pesos50SC ( form ) 
{$("#m50S").keyup(function () {
    $("#pesoVal50S").val(parseFloat($("#m50S").val() * 50));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 50 dólares
function fajilla50D ( form ) 
{$("#f16").keyup(function () {
    $("#fajillaD50").val(parseFloat($("#f16").val() * 100 * 50));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 50 dólares ***Compra
function fajilla50DC ( form ) 
{$("#f16").keyup(function () {
    $("#fajillaD50").val(parseFloat($("#f16").val() * 100 * 50));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 50 dólares **Cambio
function fajilla50PSC ( form ) 
{$("#f26").keyup(function () {
    $("#fajillaP50S").val(parseFloat($("#f26").val() * 100 * 50));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 20 dólares
function dolares20 ( form ) 
{$("#d20Dll").keyup(function () {
    $("#dolarVal20").val($("#d20Dll").val() * 20);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 20 dólares ***Compra
function dolares20C ( form ) 
{$("#d20Dll").keyup(function () {
    $("#dolarVal20").val($("#d20Dll").val() * 20);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 20 dólares **Cambio
function pesos20SC ( form ) 
{$("#m20S").keyup(function () {
    $("#pesoVal20S").val(parseFloat($("#m20S").val() * 20));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 20 dólares
function fajilla20D ( form ) 
{$("#f17").keyup(function () {
    $("#fajillaD20").val(parseFloat($("#f17").val() * 100 * 20));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 20 dólares ***Compra
function fajilla20DC ( form ) 
{$("#f17").keyup(function () {
    $("#fajillaD20").val(parseFloat($("#f17").val() * 100 * 20));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 20 dólares **Cambio
function fajilla20PSC ( form ) 
{$("#f27").keyup(function () {
    $("#fajillaP20S").val(parseFloat($("#f27").val() * 100 * 20));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 10 dólares
function dolares10 ( form ) 
{$("#d10Dll").keyup(function () {
    $("#dolarVal10").val($("#d10Dll").val() * 10);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 10 dólares ***Compra
function dolares10C ( form ) 
{$("#d10Dll").keyup(function () {
    $("#dolarVal10").val($("#d10Dll").val() * 10);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 10 dólares **Cambio
function pesos10SC ( form ) 
{$("#m10S").keyup(function () {
    $("#pesoVal10S").val(parseFloat($("#m10S").val() * 10));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 10 dólares
function fajilla10D ( form ) 
{$("#f18").keyup(function () {
    $("#fajillaD10").val(parseFloat($("#f18").val() * 100 * 10));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 10 dólares ***Compra
function fajilla10DC ( form ) 
{$("#f18").keyup(function () {
    $("#fajillaD10").val(parseFloat($("#f18").val() * 100 * 10));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 10 dólares **Cambio
function fajilla10PSC ( form ) 
{$("#f28").keyup(function () {
    $("#fajillaP10S").val(parseFloat($("#f28").val() * 100 * 10));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 5 dólares
function dolares5 ( form ) 
{$("#d5Dll").keyup(function () {
    $("#dolarVal5").val($("#d5Dll").val() * 5);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 5 dólares ***Compra
function dolares5C ( form ) 
{$("#d5Dll").keyup(function () {
    $("#dolarVal5").val($("#d5Dll").val() * 5);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 5 dólares **Cambio
function pesos5SC ( form ) 
{$("#m5S").keyup(function () {
    $("#pesoVal5S").val(parseFloat($("#m5S").val() * 5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 5 dólares
function fajilla5D ( form ) 
{$("#f19").keyup(function () {
    $("#fajillaD5").val(parseFloat($("#f19").val() * 100 * 5));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 5 dólares ***Compra
function fajilla5DC ( form ) 
{$("#f19").keyup(function () {
    $("#fajillaD5").val(parseFloat($("#f19").val() * 100 * 5));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 5 dólares **Cambio
function fajilla5PSC ( form ) 
{$("#f29").keyup(function () {
    $("#fajillaP5S").val(parseFloat($("#f29").val() * 100 * 5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 2 dólares
function dolares2 ( form ) 
{$("#d2Dll").keyup(function () {
    $("#dolarVal2").val($("#d2Dll").val() * 2);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 2 dólares ***Compra
function dolares2C ( form ) 
{$("#d2Dll").keyup(function () {
    $("#dolarVal2").val($("#d2Dll").val() * 2);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 2 dólares **Cambio
function pesos2SC ( form ) 
{$("#m2S").keyup(function () {
    $("#pesoVal2S").val(parseFloat($("#m2S").val() * 2));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 2 dólares
function fajilla2D ( form ) 
{$("#f20").keyup(function () {
    $("#fajillaD2").val(parseFloat($("#f20").val() * 100 * 2));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 2 dólares ***Compra
function fajilla2D ( form ) 
{$("#f20").keyup(function () {
    $("#fajillaD2").val(parseFloat($("#f20").val() * 100 * 2));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 2 dólares **Cambio
function fajilla2PSC ( form ) 
{$("#f30").keyup(function () {
    $("#fajillaP2S").val(parseFloat($("#f30").val() * 100 * 2));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Campo de 1 dólares
function dolares1 ( form ) 
{$("#d1Dll").keyup(function () {
    $("#dolarVal1").val($("#d1Dll").val() * 1);
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Campo de 1 dólares ***Compra
function dolares1C ( form ) 
{$("#d1Dll").keyup(function () {
    $("#dolarVal1").val($("#d1Dll").val() * 1);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Campo de 1 dólar **Cambio
function pesos1SC ( form ) 
{$("#m1S").keyup(function () {
    $("#pesoVal1S").val(parseFloat($("#m1S").val() * 1));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}

//Fajilla de 1 dólar
function fajilla1D ( form ) 
{$("#f21").keyup(function () {
    $("#fajillaD1").val(parseFloat($("#f21").val() * 100 * 1));
$("#totalDllConv").val(parseFloat($("#subtotalDll").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val()));
    if ($("#totalDllConv").val() < 0) { document.getElementById("totalDllConv").style.color="#FF0000"; };
    if ($("#totalDllConv").val() == 0) { document.getElementById("totalDllConv").style.color="#009933"; };
    if ($("#totalDllConv").val() > 0) { document.getElementById("totalDllConv").style.color="#DBDB69"; }; });}

//Fajilla de 1 dólar ***Compra
function fajilla1DC ( form ) 
{$("#f21").keyup(function () {
    $("#fajillaD1").val(parseFloat($("#f21").val() * 100 * 1));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 1 dólar **Cambio
function fajilla1PSC ( form ) 
{$("#f31").keyup(function () {
    $("#fajillaP1S").val(parseFloat($("#f31").val() * 100 * 1));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val())).toFixed(2);
     });
}