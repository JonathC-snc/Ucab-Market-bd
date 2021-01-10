<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/nav.php";?>

<section id="box-perfil" class="col-sm-12">
    <div id="cabezera-perfil" class="col-sm-12">
        <div id="nombre-edit-perfil" class="col-sm-5">
            <div class="col-sm-6 flex-column">
                <label for="" class="font-weight-bold" style="font-size: 30px">Jonathan</label>
                <label for="" class="font-weight-bold">jonacris2007@gmail.com</label>
            </div>
           <div class="col-sm-4">
                <a href="" class="font-weight-bold" style="text-decoration:none; color: black"><i class="far fa-edit fa-1x"></i> Editar perfil</a>
           </div>
        </div>
        <div id="nac-ced-perfil" class="col-sm-7" >
            <div class="col-sm-3 flex-column">
                <label for="" class="font-weight-bold">D. Identidad</label>
                <label for="" class="font-weight-bold">25870909</label>
            </div>
            <div class="col-sm-4 flex-column" >
                <label for="" class="font-weight-bold">Fecha de Nacimiento</label>
                <label for="" class="font-weight-bold">29/05/1996</label>
            </div>
        </div>
    </div>
    <div id="opciones-perfil" class="col-sm-12">
        <div id="op-box" class="col-sm-2">
            <button id="button-ord" type="button">
                <h6 class="font-weight-bold"><i class="fas fa-book fa-1x"></i> Mis Ordenes</h6>
            </button>
        </div>
        <div id="op-box" class="col-sm-2">
            <button id="button-dir" type="button">
                <h6 class="font-weight-bold"><i class="fas fa-map-marker-alt fa-1x"></i> Mis Direcciones</h6>
            </button>
        </div>
        <div id="op-box" class="col-sm-2">
            <button id="button-car" type="button">
                <h6 class="font-weight-bold"><i class="fas fa-id-card fa-1x"></i> Carnet Umarket</h6>
            </button>
        </div>
    </div>
    <!--<div id="detalles-perfil-ordenes" class="col-sm-12">
        <div id="box-detalles" class="col-sm-8 flex-column">
            <i class="fas fa-exclamation-circle fa-10x mb-3"></i>
            <h3 class="font-weight-bold">Oops!!</h3>
            <h3 class="font-weight-bold">No tienes ordenes en proceso</h3>
            <h5 class="font-weight-bold">Compra algo!!!</h5>
        </div>
    </div>-->
    <!--<div id="detalles-perfil-direcciones" class="col-sm-12">
        <div id="box-direcciones" class="col-sm-8 flex-column">
            <h5 class="font-weight-bold"><i class="fas fa-map-marker-alt fa-1x"></i> Direcciones Agregadas</h5>
            <div id="datos-direccion" class="">
                <div id="box-dir-1" class="flex-column">
                    <label for="">Estado</label>
                    <label for="">Municipio</label>
                    <label for="">Calle</label>
                </div>
                <div id="box-dir-2" class="flex-column">
                    <label for="">Casa o Apartamento</label>
                    <label for="">Pais</label>
                    <label for="">Codigo Postal</label>
                </div>
            </div>
            <button id="editar-direccion" class="font-weight-bold">Editar direccion</button>
        </div>
        <div id="agre-dir" class="col-sm-3">
            <button id="btn-dir" type="button" class="font-weight-bold"><i class="fas fa-plus fa-1x"></i> Agregar otra direccion</button>
        </div>
    </div>-->
    <div id="detalles-perfil-carnet" class="col-sm-12">
        <div id="carnet-um" class="col-sm-6">
            <div id="logo-carnet" class="col-sm-4">
                <img src="../img/logo/logo umarket.svg" width="100" height="50" alt="" loading="lazy">
            </div>
            <div id="datos-carnet" class="col-sm-8">
                <div id="foto-carnet">
                    <i class="fas fa-user fa-4x"></i>
                </div>
                <div id="detalles-carnet">
                    <label for="">Nombre</label>
                    <label for="">Apellido</label>
                    <label for="">Correo</label>
                    <label for="">Fecha de admision</label>
                    <label for="">Fecha de Nacimiento</label>
                </div>
            </div>
        </div>
        <div id="codigo-qr" class="col-sm-4">
            <div id="imagen-codigo">
                <i class="fas fa-qrcode fa-5x"></i>
            </div>
            <div>
                <label for="">Escanea tu codigo Qr</label>
                <label for="">y tendrás tu carnet en pdf!</label>
            </div>
        </div>
    </div>
</section>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>