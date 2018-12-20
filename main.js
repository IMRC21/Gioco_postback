
var nome = document.getElementById("nom");
var opt = document.getElementById("output");
var alfa = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p",
"q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

var color = ["#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F","#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F","#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F","#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F","#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F","#16A085","#F4D03F","#CA6F1E","#CB4335","#B3B6B7","#F4D05F"]
var ilMessaggio = document.getElementById("cripto").innerHTML;
ilMessaggioSplit = ilMessaggio.split("");
console.log(ilMessaggioSplit);
var pos;
for(var i=0;i<ilMessaggioSplit.length;i++){
    for(var ct = 0; ct<36;ct++){
        if(ilMessaggioSplit[i] == alfa[ct]){
            pos = ct;
            document.getElementById("output").innerHTML += "<div class='mini' onclick='rimuovi(this.id," + i + " )' id='" + alfa[pos] + "' ></div>";
            document.getElementById(""+alfa[pos]).setAttribute("style", "background-color:"+ color[pos]);
        }
        
    }
}

function rimuovi(id,p){
    console.log(id);
    console.log(p);
}