var productos = document.getElementById("productos");
var proveedores = document.getElementById("proveedores");
var compra = document.getElementById("compra");

var formulario_productos = document.getElementById("formulario-productos");
var formulario_proveedores = document.getElementById("formulario-proveedores");
var formulario_compra = document.getElementById("formulario-compra");

productos.addEventListener("click", (e) => {
	formulario_productos.style.display = "flex";
	formulario_proveedores.style.display = "none";
    formulario_compra.style.display = "none";
});

proveedores.addEventListener("click", (e) => {

    formulario_productos.style.display = "none";
	formulario_proveedores.style.display = "flex";
    formulario_compra.style.display = "none";
});

compra.addEventListener("click", (e) => {
    formulario_productos.style.display = "none";
	formulario_proveedores.style.display = "none";
    formulario_compra.style.display = "flex";
});
