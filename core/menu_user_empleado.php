<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>

<section id="cabezera-principal">
    <div id="cabezera" class="col-sm-9">
        <img src="../img//logo/logo umarket.svg" width="200" height="200" alt="">
    </div>
    <div id="perfil-intra" class="col-sm-2">
        <button type="button" id="btn-perfil" onclick="opcionesPerfil()" class="btn font-weight-bold"><i class="far fa-user fa-1x"></i> Jonathan <i class="fas fa-chevron-down fa-1x"></i></button>
    </div>
</section>

<section id="menu" class="container">
    <div id="opciones-menu">
        <a id="btn-menu" class="btn mr-3" href="../core/proveedor_table.php"><i class="fas fa-truck-moving fa-4x mb-3"></i> Proveedores</a>
        <button id="btn-menu" type="button" class="btn mr-3"><i class="fas fa-list fa-4x mb-3"></i> Nomina</button>
        <button id="btn-menu" type="button" class="btn mr-3"><i class="fas fa-hourglass-end fa-4x mb-3"></i> Horarios</button>
        <button id="btn-menu" type="button" class="btn mr-3"><i class="fas fa-store fa-4x mb-3"></i> Almacen</button>
    </div>  
</section>

<div id="box-mini-perfil">
            <div id="box-mini-1p">
                <i class="far fa-hand-peace fa-2x mb-3" style="color: #0c2a43"></i>
                <label for="">Hola, Jonathan!</label>
                <a href="../core/perfil.php" style="text-decoration: none">ver mi cuenta</a>
            </div>
            <div id="box-mini-2p">
                <a href="../core/menu_user_empleado.php" style="color: black" class="mb-1">Menu</a>
                <a href="../core/perfil.php" style="color: black" class="mb-1" onclick="btnDireccion()">Nomina</a>
                <a href="../core/perfil.php" style="color: black" class="mb-1">Horarios</a>
                <a href="../core/perfil.php" style="color: black" class="mb-1">Almacen</a>
                <a href="../core/login.php" style="color: black"><i class="fas fa-sign-out-alt fa-1x" style="color: #0c2a43"></i> Cerrar Sesión</a>
            </div>
            <button type="button" id="box-mini-3p" onclick="btnCerrar()" class="btn">
                <i class="fas fa-times fa-1x mt-2 mr-2"></i>
            </button>
    </div>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>