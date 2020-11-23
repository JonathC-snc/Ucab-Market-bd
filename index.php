<?php require($_SERVER['DOCUMENT_ROOT'] . "/core/header.php"); ?>

<?php require($_SERVER['DOCUMENT_ROOT'] . "/core/nav.php"); ?>

<body data-spy="scroll" data-target="#navbar-um">
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="imagen" src="../img/Carrousel/laptop.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img id="imagen" src="../img/Carrousel/phone.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img id="imagen" src="../img/Carrousel/tv.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container">
        <div class="row mt-3 justify-content-center">
          <div id="publicidad-um" class="col-sm-5 mr-3">
            
          </div>
          <div id="publicidad-um" class="col-sm-3 mr-2">
            One of three columns
          </div>
          <div id="publicidad-um" class="col-sm-3 ml-2">
            One of three columns
          </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div id="publicidad-um" class="col-sm-3 mr-3"></div>
            <div id="publicidad-um" class="col-sm-3 mr-2">
                One of three columns
            </div>
            <div id="publicidad-um" class="col-sm-5 ml-2">
                One of three columns
            </div>
        </div>
    </div>

    <div class="container">
        <div id="info" class="row mt-3">
            <h5 class="justify-content-start">SOLO POR HORAS</h5>
        </div>
    </div>
</section>
</body>

<!-- Javier MILEI -->

<?php require($_SERVER['DOCUMENT_ROOT'] . "/core/footer.php"); ?>