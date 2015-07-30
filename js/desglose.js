//Convertir valores
//En base al input de pesos en operaciones
function pesos ( form ) 
{   $("#pesosConv").keyup(function () {
    $("#divisaConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2)); 
    $("#totalConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalDllConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2)); 
    $("#dolaresInsertar").val($("#divisaConv").val());
    $("#cambioInsertar").val($("#tipoCambioConv").val());});
} 

//En base al input de tipo de cambio en operaciones

function cambio ( form ) 
{$("#tipoCambioConv").keyup(function () {
    $("#pesosConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#divisaConv").val($("#pesosConv").val() / $("#tipoCambioConv").val()); 
    $("#totalConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalDllConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2));
    $("#dolaresInsertar").val($("#divisaConv").val());
    $("#cambioInsertar").val($("#tipoCambioConv").val());});
} 
//En base al input de divisa en operaciones
function divisa ( form ) 
{$("#divisaConv").keyup(function () {
    $("#pesosConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalConv").val(($("#divisaConv").val() * $("#tipoCambioConv").val()).toFixed(2));
    $("#totalDllConv").val(($("#pesosConv").val() / $("#tipoCambioConv").val()).toFixed(2));
    $("#dolaresInsertar").val($("#divisaConv").val()); 
    $("#cambioInsertar").val($("#tipoCambioConv").val());
});
}

//Diferencia entre el total y el deglose / Pesos / Dólares / Fajillas
//Campo de 1000 pesos
function pesos1000 ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val())  - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 1000 pesos
function fajilla1000P ( form ) 
{$("#f1").keyup(function () {
    $("#fajillaPMill").val(parseFloat($("#f1").val() * 100 * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 500 pesos
function pesos500 ( form ) 
{$("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); 
    $("#totalConvS").val(- $("#totalDif").val());});
}

//Fajilla de 500 pesos
function fajilla500P ( form ) 
{$("#f2").keyup(function () {
    $("#fajillaP500").val(parseFloat($("#f2").val() * 100 * 500));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });}

//Campo de 200 pesos
function pesos200 ( form ) 
{$("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val())  - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 200 pesos
function fajilla200P ( form ) 
{$("#f3").keyup(function () {
    $("#fajillaP200").val(parseFloat($("#f3").val() * 100 * 200));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 100 pesos
function pesos100 ( form ) 
{$("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 100 pesos
function fajilla100P ( form ) 
{$("#f4").keyup(function () {
    $("#fajillaP100").val(parseFloat($("#f4").val() * 100 * 100));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 50 pesos
function pesos50 ( form ) 
{$("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 50 pesos
function fajilla50P ( form ) 
{$("#f5").keyup(function () {
    $("#fajillaP50").val(parseFloat($("#f5").val() * 100 * 50));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 20 pesos
function pesos20 ( form ) 
{$("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 20 pesos
function fajilla20P ( form ) 
{$("#f6").keyup(function () {
    $("#fajillaP20").val(parseFloat($("#f6").val() * 100 * 20));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 10 pesos
function pesos10 ( form ) 
{$("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 10 pesos
function fajilla10P ( form ) 
{$("#f7").keyup(function () {
    $("#fajillaP10").val(parseFloat($("#f7").val() * 100 * 10));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 5 pesos
function pesos5 ( form ) 
{$("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 5 pesos
function fajilla5P ( form ) 
{$("#f8").keyup(function () {
    $("#fajillaP5").val(parseFloat($("#f8").val() * 100 * 5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 2 pesos
function pesos2 ( form ) 
{$("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 2 pesos
function fajilla2P ( form ) 
{$("#f9").keyup(function () {
    $("#fajillaP2").val(parseFloat($("#f9").val() * 100 * 2));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 1 pesos
function pesos1 ( form ) 
{$("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 1 peso
function fajilla1P ( form ) 
{$("#f10").keyup(function () {
    $("#fajillaP1").val(parseFloat($("#f10").val() * 100 * 1));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 50 centavos
function pesos05 ( form ) 
{$("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * .50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Fajilla de 50 centavos
function fajilla50C ( form ) 
{$("#f11").keyup(function () {
    $("#fajillaC50").val(parseFloat($("#f11").val() * 100 * .5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()); });
}

//Campo de 100 dólares
function dolares100 ( form ) 
{$("#100Dll").keyup(function () {
    $("#dolarVal100").val($("#100Dll").val() * 100);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
} 

//Fajilla de 100 dólares
function fajilla100D ( form ) 
{$("#f15").keyup(function () {
    $("#fajillaD100").val(parseFloat($("#f15").val() * 100 * 100));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 50 dólares
function dolares50 ( form ) 
{$("#50Dll").keyup(function () {
    $("#dolarVal50").val($("#50Dll").val() * 50);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val()) - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 50 dólares
function fajilla50D ( form ) 
{$("#f16").keyup(function () {
    $("#fajillaD50").val(parseFloat($("#f16").val() * 100 * 50));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 20 dólares
function dolares20 ( form ) 
{$("#20Dll").keyup(function () {
    $("#dolarVal20").val($("#20Dll").val() * 20);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 20 dólares
function fajilla20D ( form ) 
{$("#f17").keyup(function () {
    $("#fajillaD20").val(parseFloat($("#f17").val() * 100 * 20));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 10 dólares
function dolares10 ( form ) 
{$("#10Dll").keyup(function () {
    $("#dolarVal10").val($("#10Dll").val() * 10);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 10 dólares
function fajilla10D ( form ) 
{$("#f18").keyup(function () {
    $("#fajillaD10").val(parseFloat($("#f18").val() * 100 * 10));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 5 dólares
function dolares5 ( form ) 
{$("#5Dll").keyup(function () {
    $("#dolarVal5").val($("#5Dll").val() * 5);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 5 dólares
function fajilla5D ( form ) 
{$("#f19").keyup(function () {
    $("#fajillaD5").val(parseFloat($("#f19").val() * 100 * 5));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 2 dólares
function dolares2 ( form ) 
{$("#2Dll").keyup(function () {
    $("#dolarVal2").val($("#2Dll").val() * 2);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 2 dólares
function fajilla2D ( form ) 
{$("#f20").keyup(function () {
    $("#fajillaD2").val(parseFloat($("#f20").val() * 100 * 2));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campo de 1 dólares
function dolares1 ( form ) 
{$("#1Dll").keyup(function () {
    $("#dolarVal1").val($("#1Dll").val() * 1);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Fajilla de 1 dólar
function fajilla1D ( form ) 
{$("#f21").keyup(function () {
    $("#fajillaD1").val(parseFloat($("#f21").val() * 100 * 1));
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) - parseFloat($("#fajillaD1").val())  - parseFloat($("#fajillaD2").val()) - parseFloat($("#fajillaD5").val()) - parseFloat($("#fajillaD10").val()) - parseFloat($("#fajillaD20").val()) - parseFloat($("#fajillaD50").val()) - parseFloat($("#fajillaD100").val())  -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}

//Campos de cambio
//Campo de 1000 pesos
function pesos1000S ( form ) 
{$("#MILS").keyup(function () {
    $("#pesoValMilS").val(parseFloat($("#MILS").val() * 1000));
    $("#totalDifS").val(parseFloat($("#totalConvS").val())  - parseFloat($("#fajillaC50S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#pesoVal05S").val())); });
}

//Fajilla de 1000 pesos
function fajilla1000PS ( form ) 
{$("#f22").keyup(function () {
    $("#fajillaPMillS").val(parseFloat($("#f22").val() * 100 * 1000));
    $("#totalDifS").val(parseFloat($("#totalConvS").val())  - parseFloat($("#fajillaC50S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#pesoVal05S").val())); });
}

//Campo de 500 pesos
function pesos500S ( form ) 
{$("#500S").keyup(function () {
    $("#pesoVal500S").val($("#500S").val() * 500);
    $("#totalDifS").val(parseFloat($("#totalConvS").val())  - parseFloat($("#fajillaC50S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#pesoVal05S").val())); });
}

//Fajilla de 500 pesos
function fajilla500P ( form ) 
{$("#f23").keyup(function () {
    $("#fajillaP500S").val(parseFloat($("#f23").val() * 100 * 500));
    $("#totalDifS").val(parseFloat($("#totalConvS").val())  - parseFloat($("#fajillaC50S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#pesoVal05S").val())); });
}
