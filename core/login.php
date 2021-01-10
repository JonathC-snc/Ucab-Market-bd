<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>

<section id="login">
    <div id="window-login" class="col-sm-12">
        <a id="logo-login" class="col-sm-6" href="../index.php">
            <img src="../img/logo/logo umarket.svg" width="500" height="500" alt="">
        </a>
        <div id="opciones-login" class="col-sm-6">
            <h6 class="text-center font-weight-bold mb-3" style="color: white">Selecciona como deseas iniciar sesion</h6>
            <div id="sec-1-login">
                <button type="button" id="proveedor-login" class="flex-column" onclick="location.href='../core/login_proveedor.php'">
                    <h6 class="mb-3 font-weight-bold">Proveedor</h6>
                    <i class="fas fa-truck fa-5x"></i>
                </button>
                <button type="button" id="cliente-login" class="flex-column" onclick="location.href='../core/login_cliente.php'">
                    <h6 class="mb-3 font-weight-bold">Cliente</h6>
                    <i class="fas fa-user fa-5x"></i>
                </button>
            </div>
            <div id="sec-2-login">
                <button id="juridico-login" class="flex-column" onclick="location.href='../core/login_juridico.php'">
                    <h6 class="mb-3 font-weight-bold">Juridico</h6>
                    <i class="fas fa-briefcase fa-5x"></i>
                </button>
            </div>
            <h6 class="text-center mt-3 font-weight-bold" style="color: white">No tienes cuenta ? <span><a href="">Registrate</a></span></h6>
            <h6 class="text-center mt-3 font-weight-bold" style="color: white">Trabajador Market ? <span><a href="../core/menu_user_empleado.php">Ingresa</a></span></h6>
        </div>
    </div>
    
    <div class="col-sm-12">
        <h6 class="text-center" style="color: white">Derechos reservados @JJ Company Caracas 2020 </h6>
    </div>
</section>

<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script src="../node_modules/jquery/dist/jquery.js"></script>
<script src="../node_modules/popper.js/dist/popper.js"></script>
<script src="../scripts/scroll.js"></script>
<script src="https://kit.fontawesome.com/4cfc9174d1.js" crossorigin="anonymous"></script>

