
function boton(){
let boton = document.getElementById('num7').value;
let resultado = document.getElementById('re').value=boton;

const Carrito={
    pera:3000,
    "guayaba":600,
    "papaya":5000,
    "mango":2000

};

const {pera}=Carrito;
console.log(pera);

let name= "              luis Martínez calderon                        "
let luis=name.trim();
console.log(luis);

const lista1=["arroz","papa","zanaoria","arina"];

lista1.unshift("jabon");


lista1.push("pescado");
console.log(lista1);

const suma = function(){
    console.log(8*9);
}
suma();

function saludo(nombre="Desconocido",apellido="?"){
    console.log(`Hola ${nombre} ${apellido}`)
}
saludo("Luis","Martinez");

}


function compra(precio){
    return precio;
}
precio=compra(30000);
function Articulo1(Articulo){
   return Articulo;
}
Articulo=Articulo1("PC GAMER NITRO 5");


function calcularimpuesto(precio){
   
    return precio*1.7;
}
totalApgagar=calcularimpuesto(precio);
console.log(Articulo,totalApgagar);

