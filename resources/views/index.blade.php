@extends('../layout/main_template')

@section('content')
<style>
  /* Estilos generales */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    color: #333;
}

/* Estilo para el Header */
header {
    background-color: #333;
    color: white;
    padding: 10px 0;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
}

nav .logo h1 {
    font-size: 24px;
}

nav .nav-links {
    list-style: none;
    display: flex;
}

nav .nav-links li {
    margin-left: 20px;
}

nav .nav-links a {
    color: white;
    text-decoration: none;
    font-size: 18px;
    transition: color 0.3s ease;
}

nav .nav-links a:hover {
    color: #ff6600;
}

/* Estilo para la sección Hero */
.hero-section {
    background: url('hero-background.jpg') no-repeat center center/cover;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
}

.hero-section .hero-content {
    background-color: rgba(0, 0, 0, 0.5);
    padding: 40px;
    border-radius: 10px;
}

.hero-section h2 {
    font-size: 50px;
    margin-bottom: 20px;
}

.hero-section p {
    font-size: 18px;
    margin-bottom: 30px;
}

.cta-button {
    background-color: #ff6600;
    color: white;
    padding: 12px 25px;
    text-decoration: none;
    border-radius: 5px;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.cta-button:hover {
    background-color: #e65c00;
}

/* Estilo para la sección de destinos */
.destinos-section {
    padding: 50px 20px;
    background-color: #fff;
    text-align: center;
}

.destinos-section h2 {
    font-size: 32px;
    margin-bottom: 40px;
}

.destinos-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.destino {
    background-color: #f4f4f4;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    position: relative;
    transition: transform 0.3s ease;
}

.destino img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.destino h3 {
    position: absolute;
    bottom: 10px;
    left: 10px;
    font-size: 24px;
    color: white;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px;
    border-radius: 5px;
}

.destino:hover {
    transform: scale(1.05);
}

.destino:hover h3 {
    background-color: rgba(0, 0, 0, 0.7);
}

/* Estilo para la sección de ofertas */
.ofertas-section {
    padding: 50px 20px;
    background-color: #0066cc;
    color: white;
    text-align: center;
}

.oferta {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
    border-radius: 10px;
    overflow: hidden;
}

.oferta img {
    width: 50%;
    height: 300px;
    object-fit: cover;
    border-radius: 10px;
}

.oferta-info {
    padding: 20px;
    flex: 1;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
}

.oferta-info h3 {
    font-size: 28px;
    margin-bottom: 15px;
}

.oferta-info p {
    font-size: 18px;
    margin-bottom: 20px;
}

/* Estilo para el footer */
footer {
    background-color: #333;
    color: white;
    padding: 20px;
    text-align: center;
}

footer .footer-content p {
    font-size: 14px;
}
</style>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viaja Con Nosotros</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header con navegación -->

    <!-- Sección Hero con animación de entrada -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <h2>¡Explora el Mundo con Nosotros!</h2>
            <p>Encuentra los mejores destinos y ofertas para tus próximas vacaciones.</p>
            <a href="#destinos" class="cta-button">Descubre más</a>
        </div>
    </section>

    <!-- Sección de Destinos -->
    <section id="destinos" class="destinos-section">
        <h2>Destinos Populares</h2>
        <div class="destinos-grid">
            <div class="destino" data-aos="fade-up">
                <img src="https://gastasuelas.com/wp-content/uploads/2023/08/Torre-eiffel.jpg" alt="París">
                <h3>París</h3>
            </div>
            <div class="destino" data-aos="fade-up" data-aos-delay="200">
                <img src="https://www.gotokyo.org/es/plan/tokyo-outline/images/main.jpg" alt="Tokio">
                <h3>Tokio</h3>
            </div>
            <div class="destino" data-aos="fade-up" data-aos-delay="400">
                <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res70/471000/471585-New-York.jpg" alt="Nueva York">
                <h3>Nueva York</h3>
            </div>
        </div>
    </section>

    <!-- Sección de Ofertas -->
    <section id="ofertas" class="ofertas-section">
        <h2>Ofertas Especiales</h2>
        <p>¡Aprovecha nuestras ofertas exclusivas y viaja con descuentos!</p>
        <div class="oferta">
            <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/29/7c/95/78/overwater-villas.jpg?w=1200&h=-1&s=1" alt="Oferta 1">
            <div class="oferta-info">
                <h3>Viaje a Maldivas</h3>
                <p>7 días por solo $999</p>
                <a href="{{route('sales.index')}}" class="cta-button">¡Reserva ahora!</a>
            </div>
        </div>
    </section>

    <!-- Footer de contacto -->
    <footer id="contacto">
      <div class="footer-content">
          <p>Contáctanos: 23610236@utgz.edu.mx</p>
          <p>&copy; 2025 Andrey Palomillo Hernández Mena</p>
      </div>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inicializar AOS (Animate on Scroll)
        AOS.init({
            duration: 1200,  // Duración de las animaciones
            once: true       // Animar solo una vez cuando el elemento entre en la vista
        });
    </script>
</body>
</html>

<!--
<div id="carouselExampleAutoplaying" class="carousel slide" width="300" height="800" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://assets.airtrfx.com/media-em/y4/cities/veracruz/viaja-con-nuestros-vuelos-a-veracruz(2).jpg" class="d-block w-100" alt="La dulceria del año" width="300" height="800">
      </div>
      <div class="carousel-item">
        <img src="https://www.debate.com.mx/img/2022/11/04/vuelos2ok_1.jpg?__scale=w:360,h:222,t:2,q:100" width="300" height="800" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://realestatemarket.com.mx/images/2023/06-junio/05-06/cinco-aerolineas-acaparon-vuelos-nacionales-g.jpg" width="300" height="800" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
-->

@endsection