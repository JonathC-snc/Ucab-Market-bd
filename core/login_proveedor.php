<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>

<section id="login">
    <div id="window-login" class="col-sm-12">
        <div id="login-log" class="col-sm-6 flex-column">
            <a id="regresar" href="../core/login.php"><i class="fas fa-chevron-left fa-2x"></i></a>
            <div id="logo-login">
                <img src="../img/logo/logo umarket.svg" width="500" height="500" alt="">
            </div>
        </div>
        <div id="opciones-login" class="col-sm-6">
            <h4 class="text-center font-weight-bold mb-3" style="color: white">Inicio de sesión</h4>
            <p class="text-center font-weight-bold mb-3 " style="color: white; font-size: 20px">Proveedor</p>
            <div id="sec-1-login-prove" class="flex-column">
                <div id="prove-login">
                    <input type="text" class="form-control" id="correo" placeholder="Correo" style="border-radius: 20px">
                </div>
                <div id="prove-login">
                    <input type="password" class="form-control" id="correo" placeholder="Contraseña" style="border-radius: 20px">
                </div>
                <button id="login-aceptar">
                    <h4 class="font-weight-bold text-center">Aceptar</h4>
                </button>
            </div>
            
            <h6 class="text-center mt-3 font-weight-bold" style="color: white">No tienes cuenta ? <span><a href="../core/registro_p.php">Registrate</a></span></h6>
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
