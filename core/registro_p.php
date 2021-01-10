<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>

<section>
    <div id="cabezera" class="col-sm-12">
        <img src="../img//logo/logo umarket.svg" width="200" height="200" alt="">
    </div>
</section>

<section id="registro">

    <div class="col-sm-8">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h4>Registro como Proveedor</h4>
            <h6>Por faor ingrese los datos solicitados</h6>
        </div>
        <div id="campos" class="col-sm-12">
            <form id="formulario" action="" class="col-sm-10">
                <input type="text" class="form-control mb-4" id="razon-social" placeholder="Razon Social" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="denominacion-comercial" placeholder="Denominacion Comercial" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="rif" placeholder="Rif" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tlf-contacto" placeholder="Tlf contacto" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Persona-contacto" placeholder="Personal de contacto" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tlf-contacto" placeholder="Tlf contacto" style="border-radius: 20px">
                <input type="email" class="form-control mb-4" id="correo" placeholder="Correo" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tlf-contacto" placeholder="Tlf contacto" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Pagina-web" placeholder="Pagina web" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tipo-provedor" placeholder="Tipo Proveedor" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tlf-contacto" placeholder="Tlf contacto" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Estado" placeholder="Municipio" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="parroquia" placeholder="Parroquia" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="calle" placeholder="Calle" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="nombre-empresa" placeholder="Nombre del edificio/Almacén/Empresa" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="codigo-postal" placeholder="Codigo Postal" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" placeholder="Contraseña" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" placeholder="Confirmar contraseña" style="border-radius: 20px">
                <input type="submit" value="Registrar" onclick="location.href='../core/televisores.php'">
            </form>
        </div>
        
    </div>

</section>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>