var close_add = document.getElementById("close-add");
var close_delete = document.getElementById("close-delete");
var close_search = document.getElementById("close-search");
var close_update = document.getElementById("close-update");

var add_formulario_productos = document.getElementById("add-formulario-productos");
var add_formulario_proveedores = document.getElementById("add-formulario-proveedores");
var add_formulario_compra = document.getElementById("add-formulario-compra");

close_add.addEventListener("click", (e) => {
	add_formulario_productos.style.display = "none";
	add_formulario_proveedores.style.display = "none";
	add_formulario_compra.style.display = "none";
});

var add_productos = document.getElementById("add-productos");
var add_proveedores = document.getElementById("add-proveedores");
var add_compra = document.getElementById("add-compra");

add_productos.addEventListener("click", (e) => {
	add_formulario_productos.style.display = "flex";
	add_formulario_proveedores.style.display = "none";
	add_formulario_compra.style.display = "none";
});

add_proveedores.addEventListener("click", (e) => {
	add_formulario_productos.style.display = "none";
	add_formulario_proveedores.style.display = "flex";
	add_formulario_compra.style.display = "none";
});

add_compra.addEventListener("click", (e) => {
	add_formulario_productos.style.display = "none";
	add_formulario_proveedores.style.display = "none";
	add_formulario_compra.style.display = "flex";
});

var delete_productos = document.getElementById("delete-productos");
var delete_proveedores = document.getElementById("delete-proveedores");
var delete_compra = document.getElementById("delete-compra");

var delete_formulario_productos = document.getElementById("delete-formulario-productos");
var delete_formulario_proveedores = document.getElementById("delete-formulario-proveedores");
var delete_formulario_compra = document.getElementById("delete-formulario-compra");

delete_productos.addEventListener("click", (e) => {
	delete_formulario_productos.style.display = "flex";
	delete_formulario_proveedores.style.display = "none";
	delete_formulario_compra.style.display = "none";
});

delete_proveedores.addEventListener("click", (e) => {
	delete_formulario_productos.style.display = "none";
	delete_formulario_proveedores.style.display = "flex";
	delete_formulario_compra.style.display = "none";
});

delete_compra.addEventListener("click", (e) => {
	delete_formulario_productos.style.display = "none";
	delete_formulario_proveedores.style.display = "none";
	delete_formulario_compra.style.display = "flex";
});

close_delete.addEventListener("click", (e) => {
	delete_formulario_productos.style.display = "none";
	delete_formulario_proveedores.style.display = "none";
	delete_formulario_compra.style.display = "none";
});

var update_productos = document.getElementById("update-productos");
var update_proveedores = document.getElementById("update-proveedores");
var update_compra = document.getElementById("update-compra");

var update_formulario_productos = document.getElementById("update-formulario-productos");
var update_formulario_proveedores = document.getElementById("update-formulario-proveedores");
var update_formulario_compra = document.getElementById("update-formulario-compra");

update_productos.addEventListener("click", (e) => {
	update_formulario_productos.style.display = "flex";
	update_formulario_proveedores.style.display = "none";
	update_formulario_compra.style.display = "none";
});

update_proveedores.addEventListener("click", (e) => {
	update_formulario_productos.style.display = "none";
	update_formulario_proveedores.style.display = "flex";
	update_formulario_compra.style.display = "none";
});

update_compra.addEventListener("click", (e) => {
	update_formulario_productos.style.display = "none";
	update_formulario_proveedores.style.display = "none";
	update_formulario_compra.style.display = "flex";
});
close_update.addEventListener("click", (e) => {
	update_formulario_productos.style.display = "none";
	update_formulario_proveedores.style.display = "none";
	update_formulario_compra.style.display = "none";
});

var search_productos = document.getElementById("search-productos");
var search_proveedores = document.getElementById("search-proveedores");
var search_compra = document.getElementById("search-compra");

var search_formulario_productos = document.getElementById("search-formulario-productos");
var search_formulario_proveedores = document.getElementById("search-formulario-proveedores");
var search_formulario_compra = document.getElementById("search-formulario-compra");

search_productos.addEventListener("click", (e) => {
	search_formulario_productos.style.display = "flex";
	search_formulario_proveedores.style.display = "none";
	search_formulario_compra.style.display = "none";
});
close_search.addEventListener("click", (e) => {
	search_formulario_productos.style.display = "none";
	search_formulario_proveedores.style.display = "none";
	search_formulario_compra.style.display = "none";
});

search_proveedores.addEventListener("click", (e) => {
	search_formulario_productos.style.display = "none";
	search_formulario_proveedores.style.display = "flex";
	search_formulario_compra.style.display = "none";
});

search_compra.addEventListener("click", (e) => {
	search_formulario_productos.style.display = "none";
	search_formulario_proveedores.style.display = "none";
	search_formulario_compra.style.display = "flex";
});
