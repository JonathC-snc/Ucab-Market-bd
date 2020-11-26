<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/header.php";?>
<?php require $_SERVER['DOCUMENT_ROOT'] . "../core/nav.php";?>

<section id="shopping-cart">
    <div id="sec-cart" class="col-sm-12 mt-5">
        <div id="descripcion-producto" class="col-sm-8 flex-column">
            <div id="labels-producto" class="container">
               <div id="sec-1">
                   <h6 class="font-weight-bold" style="color: yellow">Mi Carrito</h6>
                   <button type="button" class="btn" style="background: #0c2a43; color: white;"><i class="fas fa-cart-arrow-down fa-1x"></i> Vaciar</button>
               </div>
               <label for="">3 productos</label>
               <p class="font-weight-bold">
                Criterio de Sustitucion
                <br>
                <br>
                en el caso de que el producto no se encuentre disponible al momento de que se arme
                <br>
                el pedido, haremos lo que usted decida.
               </p>
               <a href="../index.php" style="color: white"><i class="fas fa-arrow-left fa-2x" style="color: yellow"></i> Seguir comprando</a>
            </div>
            
            <div id="tabla-compra" class="container">
                <div id="producto-carrito">
                    <div id="cerrar-btn">
                        <button type="button" class="btn" style="border-radius: 5px; color: black; background: none;"><i class="fas fa-times fa-1x"></i></button>
                    </div>
                    <div id="detalles">
                        <div id="imagen-producto"></div>
                        <label for="" class="font-weight-bold">Televisor Lg 4k full hd</label>
                        <button type="button" class="btn" style="color: black"><i class="fas fa-minus fa-1x"></i></button>
                        <label for="" class="font-weight-bold">1 UN</label>
                        <button type="button" class="btn" style="color: black"><i class="fas fa-plus fa-1x"></i></button>
                        <label for="" class="font-weight-bold">499.99$</label>
                    </div>   
                </div>
            </div>
        </div>
        <div id="lista-compra" class="col-sm-3">
            <h6 class="font-weight-bold" style="color: yellow">Resumen</h6>
            <div id="sub">
                <label for="">SubTotal</label>
                <label for="">499.99$</label>
            </div>
            <div id=cupon>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cupon de descuento" style="border-radius: 20px">
                <button type="button" class="btn" style="color: yellow">Aplicar</button>
            </div>
            <div id="total">
                <label for="">Total</label>
                <label for="">499.99$</label>
            </div>
            <button id="comprar" type="button" class="btn font-weight-bold" style="color: #0c2a43; border-radius: 20px">Comprar</button>
        </div>
    </div>
</section>

<?php require $_SERVER['DOCUMENT_ROOT'] . "./core/footer.php";?>