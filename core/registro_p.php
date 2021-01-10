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
                <input type="text" class="form-control mb-4" id="razon-social" name="razon-social" placeholder="Razon Social" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="denominacion-comercial" name="denominacion-comercial" placeholder="Denominacion Comercial" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="rif" name="rif" placeholder="Rif" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tlf-contacto" name="tlf-contacto" placeholder="Tlf contacto" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Persona-contacto" name="persona-contacto" placeholder="Personal de contacto" style="border-radius: 20px">
                <input type="email" class="form-control mb-4" id="correo" name="correo" placeholder="Correo" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Pagina-web" name="pagina-web" placeholder="Pagina web" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="tipo-provedor" name="proveedor" placeholder="Tipo Proveedor" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="estado" name="estado" placeholder="Estado" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="Estado" name="municipio" placeholder="Municipio" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="parroquia" name="parroquia" placeholder="Parroquia" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="calle" name="calle" placeholder="Calle" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="nombre-empresa" name="nombre-empresa" placeholder="Nombre del edificio/Almacén/Empresa" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="codigo-postal" name="codigo-postal" placeholder="Codigo Postal" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" name="contraseña" placeholder="Contraseña" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" name="confirmar-contraseña" placeholder="Confirmar contraseña" style="border-radius: 20px">
                <input type="submit" value="Registrar" onclick="location.href='../core/televisores.php'">
            </form>
        </div>
        
    </div>

</section>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>