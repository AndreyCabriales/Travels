<!--<style>
    header{
        background-color: rgba(230, 247, 244, 0.918);
        padding-block: 10px;
        margin-block: -8px;
        margin-inline: -8px;
        position: sticky;
    }
    nav p{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 25px;
        padding-inline: 20px;
    }
    nav p a{
        color: black;
        text-decoration: none;
        padding-block: 10px;
        padding-inline: 10px;
        margin-inline: -4px;
    }
    nav p a:hover{
        background: rgb(196, 228, 253);
        padding-block: 20px;
        padding-inline: 10px;
    }
</style>
<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('travels.index')}}">Viajes</a>
            <a href="{{route('clients.index')}}">Clientes</a>
            <a href="{{route('sales.index')}}">Ventas</a>
        </p>
    </nav>
</header> -->


<nav class="navbar navbar-expand-lg" style="background-color:rgba(230, 247, 244, 0.918)">
    <div class="container-fluid">
      <h3 class="navbar-brand"><i class="fa-solid fa-location-dot"></i> Vuelos </h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('index')}}"><i class="fa-solid fa-house"></i> Inicio</a>
          </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-plane"></i> Viajes
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{route('travels.index')}}">Viajes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('origins.index')}}">Origenes</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="{{route('destinations.index')}}">Destinos</a></li>
              </ul>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('clients.index')}}"><i class="fa-solid fa-user"></i>Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('sales.index')}}"><i class="fa-solid fa-tag"></i> Ventas</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>