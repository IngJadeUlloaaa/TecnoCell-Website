const carouselContainer = document.querySelector('.carousel-container-samsung-home');
const carouselSlides = document.querySelectorAll('.carousel-slide-samsung-home');
const slideWidth = carouselSlides[0].offsetWidth;
const slideCount = carouselSlides.length;

// Configuramos el índice para mostrar el primer slide
let currentIndex = 0;

// Función para cambiar al siguiente slide
function nextSlide() {
  currentIndex++;
  if (currentIndex >= slideCount) {
    // Reseteamos al primer slide
    currentIndex = 0;
    // Movemos el carrusel hacia la izquierda (slide 1)
    carouselContainer.style.transition = 'none';
    carouselContainer.style.transform = `translateX(0)`;
  } else {
    // Movemos el carrusel hacia la izquierda (siguiente slide)
    carouselContainer.style.transition = 'transform 1s ease';
    carouselContainer.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
  }
}

// Iniciamos el carrusel
setInterval(nextSlide, 3000);


//===========================================Carrito=======================================//
let products = [];
let total = 0;

function add(product, price){
  console.log(product, price);
  products.push(product);
  total += price;
  document.getElementById("checkout").innerHTML = `Pagar $${total}`
}

function pay() {
  const nombre_cliente = document.querySelector('input[name="nombre_cliente"]').value;
  const email_cliente = document.querySelector('input[name="email_cliente"]').value;
  const direccion_cliente = document.querySelector('input[name="direccion_cliente"]').value;
  const ciudad_cliente = document.querySelector('input[name="ciudad_cliente"]').value;
  const estado_cliente = document.querySelector('input[name="estado_cliente"]').value;
  const codigo_postal_cliente = document.querySelector('input[name="codigo_postal_cliente"]').value;
  const metodo_pago = document.querySelector('input[name="metodo_pago"]').value;

  // Obtiene la lista de productos y el total
  const productos = products.join(", ");
  const total = total;

  // Actualiza los valores de los campos ocultos en el formulario
  document.querySelector('input[name="nombre_cliente"]').value = nombre_cliente;
  document.querySelector('input[name="email_cliente"]').value = email_cliente;
  document.querySelector('input[name="direccion_cliente"]').value = direccion_cliente;
  document.querySelector('input[name="ciudad_cliente"]').value = ciudad_cliente;
  document.querySelector('input[name="estado_cliente"]').value = estado_cliente;
  document.querySelector('input[name="codigo_postal_cliente"]').value = codigo_postal_cliente;
  document.querySelector('input[name="metodo_pago"]').value = metodo_pago;

  // Actualiza los valores de los campos ocultos para los productos y el total
  document.querySelector('input[name="productos"]').value = productos;
  document.querySelector('input[name="total"]').value = total;

  // Envía el formulario al servidor
  document.querySelector('form').submit();
}
