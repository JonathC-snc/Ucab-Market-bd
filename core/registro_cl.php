<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>

<section>
    <div id="cabezera" class="col-sm-12">
        <img src="../img//logo/logo umarket.svg" width="200" height="200" alt="">
    </div>
</section>

<section id="registro">

    <div class="col-sm-8">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h4>Registro de Cliente</h4>
            <h6>Por faor ingrese los datos solicitados</h6>
        </div>
        <div id="campos" class="col-sm-12">
            <form id="formulario" action="" class="col-sm-10">
                <input type="text" class="form-control mb-4" id="nombre" name="nombre" placeholder="Nombre" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="apellido" name="apellido" placeholder="Apellido" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="cedula" name="cedula" placeholder="Cedula" style="border-radius: 20px">
                <input type="email" class="form-control mb-4" id="correo" name="Correo" placeholder="Correo" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="nro-afilacion" name="nro-afilacion" placeholder="Nro de Afilacion" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="telefono" name="telefono" placeholder="Telefono" style="border-radius: 20px">
                <input type="text" class="form-control mb-4" id="edad" name="edad" placeholder="Edad" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" name="contraseña" placeholder="Contraseña" style="border-radius: 20px">
                <input type="password" class="form-control mb-4" id="contraseña" name="confirmar-contraseña" placeholder="Confirmar contraseña" style="border-radius: 20px">
                <input type="submit" value="Registrar" onclick="location.href='../core/televisores.php'">
            </form>
        </div>
        
    </div>

</section>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>