
var nome = document.getElementById("nom");
var opt = document.getElementById("output");

var someDivs = document.createElement("div");
console.log(someDivs);
someDivs.setAttribute("class","mini");
for(var i=0;i<24;i++){
    opt.appendChild(someDivs);
}