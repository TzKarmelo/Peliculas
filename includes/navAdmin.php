<nav class="navbar navbar-expand-lg fixed-top bg-light navLog">
    <div id="container" class="container-fluid">
        <h1 class="navbar-brand h1Log">MyFilms</h1>
        
        <button class="navbar-toggler burguer" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse divLog" id="navbarNavDropdown">
            <ul id="nav" class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="panel_control_admin.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panel_control_peliculas.php">Editar-Peliculas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="panel_control_usuarios.php">Editar-Usuarios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Perfil Administrador
                    </a>
                    <ul id="drop" class="dropdown-menu">                            
                        <li><a class="dropdown-item" href="films_index.php">Cerrar Sesión</a></li>
                    </ul>
                </li>
            </ul>

            <div class="d-flex float-right userDiv" role="search">
                <p class="userP">Administrador >> 
                    <button class="button" onclick='window.location.href="films_index.php";' >Log Out</button>
                </p>
            </div>
        </div>
    </div>
</nav>