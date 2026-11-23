<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: black;
        font-family: 'VT323', monospace;
    }

    #menu-navegacion {
        display: flex;
        justify-content: space-between; 
        align-items: center;
        max-width: 1200px;
        margin: 30px auto 20px;
        padding: 0 20px;
    }

    .marca {
        display: flex;
        align-items: center;
        gap: 15px; 
    }

    #menu-navegacion img {
        object-fit: cover;
        width: 70px;
        height: auto;
    }

    #menu-navegacion p {
        color: #d4ffd4;
        font-size: 1.4rem;
    }

    #menu-navegacion a {
        text-decoration: none;
        color: #d4ffd4;
        font-size: 1.2rem;
        text-shadow: 0 0 8px #5cff5c, 0 0 15px #00a800;
        letter-spacing: 2px;
    }
</style>

<header>
    <nav id="menu-navegacion">
        <div class="marca">
            <img src="../imagenes/Logo.png" alt="Logo">
            <p>Sky Sentinel</p>
        </div>
        <a href="#">Cerrar Sesión</a>
    </nav>
</header>
