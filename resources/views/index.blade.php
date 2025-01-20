@extends('../layout/main_template')

@section('content')

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

@endsection