function adicional1 () 
{   
    document.desglose.conceptoAS.value =  document.getElementById("concepto").value;
} 
function adicional2 () 
{   
    document.desglose.cantidadAS.value =  document.getElementById("cantidad").value;
    //Total en el desglose - igual a la cantidad
} 
function adicional22()
{
        document.desglose.totalConv.value = document.getElementById("cantidad").value;
    $("#totalDif").val(parseFloat($("#totalConv").val())  - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
}
function adicional3 () 
{   
    document.desglose.comentarioAS.value =  document.getElementById("comentario").value;
} 
//Desglose
//Campo de 1000 pesos
function pesos1000 ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val())  - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 1000 pesos
function pesos1000 ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val())  - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 1000 pesos ***Compra
function pesos1000C ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val())  - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 1000 pesos
function fajilla1000P ( form ) 
{$("#f1").keyup(function () {
    $("#fajillaPMill").val(parseFloat($("#f1").val() * 100 * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 1000 pesos ***Compra
function fajilla1000PC ( form ) 
{$("#f1").keyup(function () {
    $("#fajillaPMill").val(parseFloat($("#f1").val() * 100 * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 1000 Pesos
function pesos1000S ( form ) 
{$("#MILS").keyup(function () {
    $("#pesoValMilS").val(parseFloat($("#MILS").val() * 1000));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 1000 pesos
function fajilla1000PS ( form ) 
{$("#f22").keyup(function () {
    $("#fajillaPMillS").val(parseFloat($("#f22").val() * 100 * 1000));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 500 pesos
function pesos500 ( form ) 
{$("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); 
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2);});
}

//Campo de 500 pesos ***Compra
function pesos500C ( form ) 
{$("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); 
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2);});
}

//Fajilla de 500 pesos
function fajilla500P ( form ) 
{$("#f2").keyup(function () {
    $("#fajillaP500").val(parseFloat($("#f2").val() * 100 * 500));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });}

//Fajilla de 500 pesos ***Compra
function fajilla500PC ( form ) 
{$("#f2").keyup(function () {
    $("#fajillaP500").val(parseFloat($("#f2").val() * 100 * 500));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });}

//Cambio de 500 Pesos
function pesos500S ( form ) 
{$("#m500S").keyup(function () {
    $("#pesoVal500S").val(parseFloat($("#m500S").val() * 500));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 500 pesos
function fajilla500PS ( form ) 
{$("#f23").keyup(function () {
    $("#fajillaP500S").val(parseFloat($("#f23").val() * 100 * 500));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 200 pesos
function pesos200 ( form ) 
{$("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val())  - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 200 pesos ***Compra
function pesos200C ( form ) 
{$("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val())  - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 200 pesos
function fajilla200P ( form ) 
{$("#f3").keyup(function () {
    $("#fajillaP200").val(parseFloat($("#f3").val() * 100 * 200));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 200 pesos ***Compra
function fajilla200PC ( form ) 
{$("#f3").keyup(function () {
    $("#fajillaP200").val(parseFloat($("#f3").val() * 100 * 200));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 200 Pesos
function pesos200S ( form ) 
{$("#m200S").keyup(function () {
    $("#pesoVal200S").val(parseFloat($("#m200S").val() * 200));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 200 pesos
function fajilla200PS ( form ) 
{$("#f24").keyup(function () {
    $("#fajillaP200S").val(parseFloat($("#f24").val() * 100 * 200));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 100 pesos
function pesos100 ( form ) 
{$("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 100 pesos ***Compra
function pesos100C ( form ) 
{$("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 100 pesos
function fajilla100P ( form ) 
{$("#f4").keyup(function () {
    $("#fajillaP100").val(parseFloat($("#f4").val() * 100 * 100));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 100 pesos ***Compra
function fajilla100PC ( form ) 
{$("#f4").keyup(function () {
    $("#fajillaP100").val(parseFloat($("#f4").val() * 100 * 100));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 100 Pesos
function pesos100S ( form ) 
{$("#m100S").keyup(function () {
    $("#pesoVal100S").val(parseFloat($("#m100S").val() * 100));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 100 pesos
function fajilla100PS ( form ) 
{$("#f25").keyup(function () {
    $("#fajillaP100S").val(parseFloat($("#f25").val() * 100 * 100));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 50 pesos
function pesos50 ( form ) 
{$("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 50 pesos **Compra
function pesos50C ( form ) 
{$("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 50 pesos
function fajilla50P ( form ) 
{$("#f5").keyup(function () {
    $("#fajillaP50").val(parseFloat($("#f5").val() * 100 * 50));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 50 pesos ***Compra
function fajilla50PC ( form ) 
{$("#f5").keyup(function () {
    $("#fajillaP50").val(parseFloat($("#f5").val() * 100 * 50));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 50 Pesos
function pesos50S ( form ) 
{$("#m50S").keyup(function () {
    $("#pesoVal50S").val(parseFloat($("#m50S").val() * 50));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 50 pesos
function fajilla50PS ( form ) 
{$("#f26").keyup(function () {
    $("#fajillaP50S").val(parseFloat($("#f26").val() * 100 * 50));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 20 pesos
function pesos20 ( form ) 
{$("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 20 pesos ***Compra
function pesos20C ( form ) 
{$("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 20 pesos
function fajilla20P ( form ) 
{$("#f6").keyup(function () {
    $("#fajillaP20").val(parseFloat($("#f6").val() * 100 * 20));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 20 pesos ***Compra
function fajilla20PC ( form ) 
{$("#f6").keyup(function () {
    $("#fajillaP20").val(parseFloat($("#f6").val() * 100 * 20));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 20 Pesos
function pesos20S ( form ) 
{$("#m20S").keyup(function () {
    $("#pesoVal20S").val(parseFloat($("#m20S").val() * 20));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 20 pesos
function fajilla20PS ( form ) 
{$("#f27").keyup(function () {
    $("#fajillaP20S").val(parseFloat($("#f27").val() * 100 * 20));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 10 pesos
function pesos10 ( form ) 
{$("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 10 pesos ***Compra
function pesos10C ( form ) 
{$("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 10 pesos
function fajilla10P ( form ) 
{$("#f7").keyup(function () {
    $("#fajillaP10").val(parseFloat($("#f7").val() * 100 * 10));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 10 pesos ***Compra
function fajilla10PC ( form ) 
{$("#f7").keyup(function () {
    $("#fajillaP10").val(parseFloat($("#f7").val() * 100 * 10));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 10 Pesos
function pesos10S ( form ) 
{$("#m10S").keyup(function () {
    $("#pesoVal10S").val(parseFloat($("#m10S").val() * 10));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 10 pesos
function fajilla10PS ( form ) 
{$("#f28").keyup(function () {
    $("#fajillaP10S").val(parseFloat($("#f28").val() * 100 * 10));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 5 pesos
function pesos5 ( form ) 
{$("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 5 pesos **Compra
function pesos5C ( form ) 
{$("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 5 pesos
function fajilla5P ( form ) 
{$("#f8").keyup(function () {
    $("#fajillaP5").val(parseFloat($("#f8").val() * 100 * 5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 5 pesos ***Compra
function fajilla5PC ( form ) 
{$("#f8").keyup(function () {
    $("#fajillaP5").val(parseFloat($("#f8").val() * 100 * 5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 5 Pesos
function pesos5S ( form ) 
{$("#m5S").keyup(function () {
    $("#pesoVal5S").val(parseFloat($("#m5S").val() * 5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 5 pesos
function fajilla5PS ( form ) 
{$("#f29").keyup(function () {
    $("#fajillaP5S").val(parseFloat($("#f29").val() * 100 * 5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 2 pesos
function pesos2 ( form ) 
{$("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 2 pesos ***Compra
function pesos2C ( form ) 
{$("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 2 pesos
function fajilla2P ( form ) 
{$("#f9").keyup(function () {
    $("#fajillaP2").val(parseFloat($("#f9").val() * 100 * 2));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 2 pesos ***Compra
function fajilla2PC ( form ) 
{$("#f9").keyup(function () {
    $("#fajillaP2").val(parseFloat($("#f9").val() * 100 * 2));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 2 Pesos
function pesos2S ( form ) 
{$("#m2S").keyup(function () {
    $("#pesoVal2S").val(parseFloat($("#m2S").val() * 2));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 2 pesos
function fajilla2PS ( form ) 
{$("#f30").keyup(function () {
    $("#fajillaP2S").val(parseFloat($("#f30").val() * 100 * 2));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 1 peso
function pesos1 ( form ) 
{$("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 1 peso ***Compra
function pesos1C ( form ) 
{$("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 1 peso
function fajilla1P ( form ) 
{$("#f10").keyup(function () {
    $("#fajillaP1").val(parseFloat($("#f10").val() * 100 * 1));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 1 peso ***Compra
function fajilla1PC ( form ) 
{$("#f10").keyup(function () {
    $("#fajillaP1").val(parseFloat($("#f10").val() * 100 * 1));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 1 Peso
function pesos1S ( form ) 
{$("#m1S").keyup(function () {
    $("#pesoVal1S").val(parseFloat($("#m1S").val() * 1));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 1 pesos
function fajilla1PS ( form ) 
{$("#f31").keyup(function () {
    $("#fajillaP1S").val(parseFloat($("#f31").val() * 100 * 1));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}

//Campo de 50 centavos
function pesos05 ( form ) 
{$("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * .50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Campo de 50 centavos ***Compra
function pesos05C ( form ) 
{$("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * .50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Fajilla de 50 centavos
function fajilla50C ( form ) 
{$("#f11").keyup(function () {
    $("#fajillaC50").val(parseFloat($("#f11").val() * 100 * .5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDif").val()).toFixed(2); });
}

//Fajilla de 50 centavos ***Compra
function fajilla50CC ( form ) 
{$("#f11").keyup(function () {
    $("#fajillaC50").val(parseFloat($("#f11").val() * 100 * .5));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#fajillaC50").val()) - parseFloat($("#fajillaP1").val()) - parseFloat($("#fajillaP2").val()) - parseFloat($("#fajillaP5").val()) - parseFloat($("#fajillaP10").val()) - parseFloat($("#fajillaP20").val()) - parseFloat($("#fajillaP50").val()) - parseFloat($("#fajillaP100").val()) - parseFloat($("#fajillaP200").val()) - parseFloat($("#fajillaP500").val()) - parseFloat($("#fajillaPMill").val())  - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val()));
    $("#totalConvS").val(- $("#totalDllDif").val()).toFixed(2); });
}

//Cambio de 50 Centavos
function pesos05S ( form ) 
{$("#m05S").keyup(function () {
    $("#pesoVal05S").val(parseFloat($("#m05S").val() * .5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
     });
}

//Cambio Fajilla de 50 centavos
function fajilla50CS ( form ) 
{$("#f32").keyup(function () {
    $("#fajillaC50S").val(parseFloat($("#f32").val() * 100 * .5));
    $("#totalDifS").val(parseFloat($("#totalConvS").val()) - parseFloat($("#pesoValMilS").val()) - parseFloat($("#fajillaPMillS").val()) - parseFloat($("#pesoVal500S").val()) - parseFloat($("#fajillaP500S").val()) - parseFloat($("#pesoVal200S").val()) - parseFloat($("#fajillaP200S").val()) - parseFloat($("#pesoVal100S").val()) - parseFloat($("#fajillaP100S").val()) - parseFloat($("#pesoVal50S").val()) - parseFloat($("#fajillaP50S").val()) - parseFloat($("#pesoVal20S").val()) - parseFloat($("#fajillaP20S").val()) - parseFloat($("#pesoVal10S").val()) - parseFloat($("#fajillaP10S").val()) - parseFloat($("#pesoVal5S").val()) - parseFloat($("#fajillaP5S").val()) - parseFloat($("#pesoVal2S").val()) - parseFloat($("#fajillaP2S").val()) - parseFloat($("#pesoVal1S").val()) - parseFloat($("#fajillaP1S").val()) - parseFloat($("#pesoVal05S").val()) - parseFloat($("#fajillaC50S").val()) ).toFixed(2);
    });
}
