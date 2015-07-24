//Convertir pesos en base a la divisa y el tipo de cambio
function conPesos ( form ) 
{
    form.pesosConv.value = (form.divisaConv.value * form.tipoCambioConv.value).toFixed(2)
}  
function conPesos2 ( form ) 
{
    form.pesosConv.value =(form.divisaConv.value * form.tipoCambioConv.value).toFixed(2)
} 
//Convertir divisa en base a los pesos y el tipo de cambio
function conDivisa ( form ) 
{
  form.divisaConv.value = (form.pesosConv.value / form.tipoCambioConv.value).toFixed(2)
}

 /*Funciones para igualar valores 
            Funciones en el campo de divisa*/
function divisa1 ( form ) 
{ $("#divisaConv").keyup(function () {
    $("#totalConv").val($("#pesosConv").val()); });
 } 

 function divisa2 ( form ) 
{ $("#divisaConv").keyup(function () {
    $("#totalDllConv").val($("#divisaConv").val()); });
 }

function divisa3 ( form ) 
{ $("#divisaConv").keyup(function () {
    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
}

function divisa4 ( form ) 
{ $("#divisaConv").keyup(function () {
    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
}

//Funciones en el campo de Tipo de cambio
function cambio1 ( form ) 
{ $("#tipoCambioConv").keyup(function () {
    $("#totalConv").val($("#pesosConv").val()); }); 
}

function cambio2 ( form ) 
{ $("#tipoCambioConv").keyup(function () {
    $("#totalDllConv").val($("#divisaConv").val()); });
 }

function cambio3 ( form ) 
{ $("#tipoCambioConv").keyup(function () {
    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
}

function cambio4 ( form ) 
{ $("#tipoCambioConv").keyup(function () {
    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
} 

//Funciones en el campo de Pesos
function pesos1 ( form ) 
{ $("#pesosConv").keyup(function () {
    $("#totalConv").val($("#pesosConv").val()); }); 
}

function pesos2 ( form ) 
{ $("#pesosConv").keyup(function () {
    $("#totalDllConv").val($("#divisaConv").val()); });
 } 

function pesos3 ( form ) 
{ $("#pesosConv").keyup(function () {
    $("#dolaresInsertar").val($("#divisaConv").val()); }); 
} 

function pesos4 ( form ) 
{ $("#pesosConv").keyup(function () {
    $("#cambioInsertar").val($("#tipoCambioConv").val()); }); 
} 

//Funciones de desglose **Pesos**
 function pesos1000 ( form ) 
{ $("#MIL").keyup(function () {
    $("#pesoValMil").val($("#MIL").val() * 1000); }); 
}

function pesos1001 ( form ) 
{ $("#MIL").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val()).toFixed(2)); }); 
}

function pesos500 ( form ) 
{ $("#500").keyup(function () {
    $("#pesoVal500").val($("#500").val() * 500); }); 
}

function pesos501 ( form ) 
{ $("#500").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val()).toFixed(2)); }); 
}

function pesos200 ( form ) 
{ $("#200").keyup(function () {
    $("#pesoVal200").val($("#200").val() * 200); }); 
}

function pesos201 ( form ) 
{ $("#200").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val()).toFixed(2)); }); 
}

function pesos100 ( form ) 
{ $("#100").keyup(function () {
    $("#pesoVal100").val($("#100").val() * 100); }); 
}

function pesos101 ( form ) 
{ $("#100").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val()).toFixed(2)); }); 
}

function pesos50 ( form ) 
{ $("#50").keyup(function () {
    $("#pesoVal50").val($("#50").val() * 50); }); 
}

function pesos51 ( form ) 
{ $("#50").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val()).toFixed(2)); }); 
}

function pesos20 ( form ) 
{ $("#20").keyup(function () {
    $("#pesoVal20").val($("#20").val() * 20); }); 
}

function pesos21 ( form ) 
{ $("#20").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val()).toFixed(2)); }); 
}

function pesos10 ( form ) 
{ $("#10").keyup(function () {
    $("#pesoVal10").val($("#10").val() * 10); }); 
}

function pesos11 ( form ) 
{ $("#10").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val()).toFixed(2)); }); 
}

function pesos5 ( form ) 
{ $("#5").keyup(function () {
    $("#pesoVal5").val($("#5").val() * 5); }); 
}

function pesos5b ( form ) 
{ $("#5").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val()).toFixed(2)); }); 
}

function pesos2 ( form ) 
{ $("#2").keyup(function () {
    $("#pesoVal2").val($("#2").val() * 2); }); 
}

function pesos2b ( form ) 
{ $("#2").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val()).toFixed(2)); }); 
}

function pesos1 ( form ) 
{ $("#1").keyup(function () {
    $("#pesoVal1").val($("#1").val() * 1); }); 
}

function pesos1b ( form ) 
{ $("#1").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val() - $("#pesoVal1").val()).toFixed(2)); }); 
}

function pesos05 ( form ) 
{ $("#05").keyup(function () {
    $("#pesoVal05").val($("#05").val() * 0.5); }); 
}

function pesos05b ( form ) 
{ $("#05").keyup(function () {
    $("#totalDif").val(($("#totalConv").val() - $("#pesoValMil").val() - $("#pesoVal500").val() - $("#pesoVal200").val() - $("#pesoVal100").val() - $("#pesoVal50").val() - $("#pesoVal20").val() - $("#pesoVal10").val() - $("#pesoVal5").val() - $("#pesoVal2").val() - $("#pesoVal1").val() - $("#pesoVal05").val()).toFixed(2)); }); 
}

//Funciones de desglose **Dólares**
function dolares100 ( form ) 
{ $("#100Dll").keyup(function () {
    $("#dolarVal100").val($("#100Dll").val() * 100); }); 
}

function dolares101 ( form ) 
{ $("#100Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val()).toFixed(2)); }); 
}

function dolares50 ( form ) 
{ $("#50Dll").keyup(function () {
    $("#dolarVal50").val($("#50Dll").val() * 50); }); 
}

function dolares51 ( form ) 
{ $("#50Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val()).toFixed(2)); }); 
}

function dolares20 ( form ) 
{ $("#20Dll").keyup(function () {
    $("#dolarVal20").val($("#20Dll").val() * 20); }); 
}

function dolares21 ( form ) 
{ $("#20Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val()).toFixed(2)); }); 
} 

function dolares10 ( form ) 
{ $("#10Dll").keyup(function () {
    $("#dolarVal10").val($("#10Dll").val() * 10); }); 
}

function dolares11 ( form ) 
{ $("#10Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val()).toFixed(2)); }); 
}

function dolares5 ( form ) 
{ $("#5Dll").keyup(function () {
    $("#dolarVal5").val($("#5Dll").val() * 5); }); 
}

function dolares5b ( form ) 
{ $("#5Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val()).toFixed(2)); }); 
}

function dolares2 ( form ) 
{ $("#2Dll").keyup(function () {
    $("#dolarVal2").val($("#2Dll").val() * 2); }); 
}

function dolares2b ( form ) 
{ $("#2Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val() - $("#dolarVal2").val()).toFixed(2)); }); 
}

function dolares1 ( form ) 
{ $("#1Dll").keyup(function () {
    $("#dolarVal1").val($("#1Dll").val() * 1); }); 
}

function dolares1b ( form ) 
{ $("#1Dll").keyup(function () {
    $("#totalDllDif").val(($("#totalDllConv").val() - $("#dolarVal100").val() - $("#dolarVal50").val() - $("#dolarVal20").val() - $("#dolarVal10").val() - $("#dolarVal5").val() - $("#dolarVal2").val() - $("#dolarVal1").val()).toFixed(2)); }); 
}