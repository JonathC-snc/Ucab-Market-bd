<header id="navbar-um">
    <nav class="navbar navbar-light" style="background-color: #0c2a43;">
        <a class="navbar-brand" href="../index.php">
            <img src="../img/logo/logo umarket.svg" width="200" height="80" alt="" loading="lazy">
        </a>
        <input type="busqueda" class="form-control" id="Busqueda" placeholder="Que estas Buscando?">
        <div id="box-nav">
            <div id="box-tienda">
                <svg width="3em" height="3em" viewBox="0 0 16 16" style="color: white;" class="bi bi-shop" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z"/>
                </svg>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" style="color: yellow" href="#" role="button" aria-haspopup="true" aria-expanded="false">Retiro en tienda</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#one">Chacao</a>
                      <a class="dropdown-item" href="#two">Los Dos Caminos</a>
                      <div role="separator" class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#three">Parque Central</a>
                    </div>
                </li>
            </div>
            <label for="exampleInputEmail1" style="color: white;">Las Mercedes</label>
        </div>
        <button type="button" id="sesion" class="btn btn-link font-weight-bold">
            <a style="color: white; decoration: none" href="../core/login.php">Iniciar Sesion</a>
        </button>
        <!--<button type="button" id="boton-reg" class="btn btn-light font-weight-bold">Registrate</button>-->
        <button type="button" id="btn-perfil" onclick="opcionesPerfil()" class="btn font-weight-bold"><i class="far fa-user fa-1x"></i> Jonathan <i class="fas fa-chevron-down fa-1x"></i></button>
        
    </nav>

    <nav id="menu-nav" class="navbar navbar-expand-lg navbar-light">
        <div class="colapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav justify-content-center" style="width: 100%;">
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="../core/proveedor_table.php">Supermercado</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Bebes y Niños</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Electrodomésticos</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="../core/televisores.php">Tecnología</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Dormitorio</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Hogar</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Deportes</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Moda</a>
                </li>
                <li class="nav-item mr-2">
                    <a id="menu-nav-sec" class="nav-link" href="#">Ofertas</a>
                </li>
                <a id="carro" href="../core/shopping_cart.php" style="color: white">
                    <i class="fas fa-shopping-cart fa-1x"></i>
                </a>
                
            </ul>
        </div>
    </nav>

    <div id="box-mini-perfil">
            <div id="box-mini-1p">
                <i class="far fa-hand-peace fa-2x mb-3" style="color: #0c2a43"></i>
                <label for="">Hola, Jonathan!</label>
                <a href="../core/perfil.php" style="text-decoration: none">ver mi cuenta</a>
            </div>
            <div id="box-mini-2p">
                <a href="../core/perfil.php" style="color: black" class="mb-1">Mis Ordenes</a>
                <a href="../core/perfil.php" style="color: black" class="mb-1" onclick="btnDireccion()">Mis direcciones</a>
                <a href="../core/perfil.php" style="color: black" class="mb-1">Carnet Umarket</a>
                <a href="../core/login.php" style="color: black"><i class="fas fa-sign-out-alt fa-1x" style="color: #0c2a43"></i> Cerrar Sesión</a>
            </div>
            <button type="button" id="box-mini-3p" onclick="btnCerrar()" class="btn">
                <i class="fas fa-times fa-1x mt-2 mr-2"></i>
            </button>
    </div>
</header>