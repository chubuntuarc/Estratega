//Convertir valores
//En base al input de pesos en operaciones
function pesos ( form ) 
{   $("#pesosConv").keyup(function () {
    $("#divisaConv").val($("#pesosConv").val() / $("#tipoCambioConv").val()); 
    $("#totalConv").val($("#divisaConv").val() * $("#tipoCambioConv").val());
    $("#totalDllConv").val($("#pesosConv").val() / $("#tipoCambioConv").val()); 
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

//Diferencia entre el total y el deglose
//Campo de 1000 pesos
function pesos1000 ( form ) 
{$("#MIL").keyup(function () {
    $("#pesoValMil").val(parseFloat($("#MIL").val() * 1000));
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 500 pesos
function pesos500 ( form ) 
{$("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 200 pesos
function pesos200 ( form ) 
{$("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 100 pesos
function pesos100 ( form ) 
{$("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 50 pesos
function pesos50 ( form ) 
{$("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 20 pesos
function pesos20 ( form ) 
{$("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 10 pesos
function pesos10 ( form ) 
{$("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 5 pesos
function pesos5 ( form ) 
{$("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 2 pesos
function pesos2 ( form ) 
{$("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 1 pesos
function pesos1 ( form ) 
{$("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 50 centavos
function pesos05 ( form ) 
{$("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * .50);
    $("#totalDif").val(parseFloat($("#totalConv").val()) - parseFloat($("#pesoValMil").val()) - parseFloat($("#pesoVal500").val()) - parseFloat($("#pesoVal200").val()) - parseFloat($("#pesoVal100").val()) - parseFloat($("#pesoVal50").val()) - parseFloat($("#pesoVal20").val()) - parseFloat($("#pesoVal10").val()) - parseFloat($("#pesoVal5").val()) - parseFloat($("#pesoVal2").val()) - parseFloat($("#pesoVal1").val()) - parseFloat($("#pesoVal05").val())); });
}
//Campo de 100 dólares
function dolares100 ( form ) 
{$("#100Dll").keyup(function () {
    $("#dolarVal100").val($("#100Dll").val() * 100);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 50 dólares
function dolares50 ( form ) 
{$("#50Dll").keyup(function () {
    $("#dolarVal50").val($("#50Dll").val() * 50);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 20 dólares
function dolares20 ( form ) 
{$("#20Dll").keyup(function () {
    $("#dolarVal20").val($("#20Dll").val() * 20);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 10 dólares
function dolares10 ( form ) 
{$("#10Dll").keyup(function () {
    $("#dolarVal10").val($("#10Dll").val() * 10);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 5 dólares
function dolares5 ( form ) 
{$("#5Dll").keyup(function () {
    $("#dolarVal5").val($("#5Dll").val() * 5);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 2 dólares
function dolares2 ( form ) 
{$("#2Dll").keyup(function () {
    $("#dolarVal2").val($("#2Dll").val() * 2);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}
//Campo de 1 dólares
function dolares1 ( form ) 
{$("#1Dll").keyup(function () {
    $("#dolarVal1").val($("#1Dll").val() * 1);
    $("#totalDllDif").val(parseFloat($("#totalDllConv").val()) -  parseFloat($("#dolarVal100").val()) - parseFloat($("#dolarVal50").val()) - parseFloat($("#dolarVal20").val()) - parseFloat($("#dolarVal10").val()) - parseFloat($("#dolarVal5").val()) - parseFloat($("#dolarVal2").val()) - parseFloat($("#dolarVal1").val())); });
}