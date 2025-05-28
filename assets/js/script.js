const carrito = document.getElementById8('carrito');
const elemnto1 = document.getElementById8('lista 1');
const lista = document.querySelector('#lista-carrito tbody');
const VaciarcarritoBtn = document.getElementById8('vaciar-carrito');

cargarEventListeners();

function cargarEventListeners() {
   elemento1.addEventListener ('click', comprarElemento);
   carrito.addEventListener ('click', eliminarElemento);
   VaciarcarritoBtn.addEventListener('click' , VaciarCarrito);
}

function comprarElemento(e) {
    e.preventDefault();
    if(e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.parentElement.parentElement;
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen:elemento.querySelector('img').src,
        titulo:elemento.querySelector('h3').textContent,
        precio:elemento.querySelector('.precio').textContent,
        id:elemento.querySelector('a').getAttribute('data-id') 
}
insertarCarrito(infoElemento);
}

function insertarCarrito(elemento) {
    const row = document.createElement("tr");
    row.innerHTML = `
      <td>
        <img src="${elemento.imagen}" width="100">
      </td>
      <td>${elemento.titulo}</td>
      <td>${elemento.precio}</td>
      <td>
        <a href="#" class="borrar-producto" data-id="${elemento.id}">X</a>
      </td>
    `;
    
    // Agregar la fila al contenedor del carrito
    lista.appendChild(row);
  }

  function eliminarElemento(e) {
    e.preventDefault();
    let elemnto,
    elementoId;
    if(e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        elemento = e.target.parentElement.parentElement;
        elementoId = elemento.querySelector('a').getAttribute('data-id');

    }
  }

  function vaciarCarrito(){
    while(lista.firstChild) {
        lista.removeChild(lista.firstChild);
    
    }
    return false;
  }