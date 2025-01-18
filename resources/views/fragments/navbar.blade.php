<style>
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
</header>