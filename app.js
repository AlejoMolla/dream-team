// Div que contiene los productos más vendidos
const masVendidosDiv = document.getElementById("masVendido");

// Genera una Card del Producto y la devuelve
function CardHTML(nombre, descripcion, imagen) {
    return `
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
        <div class="card">
            <img src="${imagen.src}" alt="${imagen.alt}" class="card-img-top">
            <div class="card-body">
                <h4 class="card-title">${nombre}</h4>
                <p class="card-text">${descripcion}</p>
                <button class="btn btn-primary">Ver Producto</button>
            </div>
        </div>
    </div>
    `
}


// Renderiza los productos
function RenderCards(productos, categoriaSeleccionada, contenedor) {
    productos.filter(({categoria}) => categoria === categoriaSeleccionada)
    .forEach(({contenido}) => {
        contenedor.innerHTML += CardHTML(contenido.nombre, contenido.descripcion, contenido.imagen);
    });    
}

async function getProductosMasVendidos() {
    let req = await fetch("./static/productos.json");
    let { data } = await req.json();
    console.log(data)

    RenderCards(data, "Más vendido", masVendidosDiv);
}

getProductosMasVendidos();
