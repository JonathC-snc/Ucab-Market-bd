$('#detalles-perfil-direcciones').hide();
$('#detalles-perfil-carnet').hide();

function btnOrdenes(){
    $('#detalles-perfil-ordenes').removeClass('animate__fadeOut');
    $('#detalles-perfil-carnet').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-carnet').hide();
    $('#detalles-perfil-direcciones').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-direcciones').hide();
    $('#button-car').css('background', 'none');
    $('#button-dir').css('background', 'none');
    $('#detalles-perfil-ordenes').show();
    $('#button-ord').css('background', '#ffffff')
    $('#detalles-perfil-ordenes').addClass('animate__animated animate__fadeIn');
}

function btnDireccion(){
    $('#detalles-perfil-direcciones').removeClass('animate__fadeOut');
    $('#detalles-perfil-carnet').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-carnet').hide();
    $('#detalles-perfil-ordenes').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-ordenes').hide();
    $('#button-car').css('background', 'none');
    $('#button-ord').css('background', 'none');
    $('#detalles-perfil-direcciones').show();
    $('#button-dir').css('background', '#ffffff')
    $('#detalles-perfil-direcciones').addClass('animate__animated animate__fadeIn');
}

function btnCarnet(){
    $('#detalles-perfil-carnet').removeClass('animate__fadeOut');
    $('#detalles-perfil-direcciones').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-direcciones').hide();
    $('#detalles-perfil-ordenes').addClass('animate__animated animate__fadeOut');
    $('#detalles-perfil-ordenes').hide();
    $('#button-dir').css('background', 'none');
    $('#button-ord').css('background', 'none');
    $('#detalles-perfil-carnet').show();
    $('#button-car').css('background', '#ffffff')
    $('#detalles-perfil-carnet').addClass('animate__animated animate__fadeIn');
}

/*------------------------------ Animacion perfil -------------------------*/

$('#box-mini-perfil').hide();

function opcionesPerfil(){
    $('#box-mini-perfil').removeClass('animate__fadeOut');
    $('#box-mini-perfil').show();
    $('#box-mini-perfil').addClass('animate__animated animate__fadeIn');
}

function btnCerrar(){
    $('#box-mini-perfil').removeClass('animate__fadeIn');
    $('#box-mini-perfil').addClass('animate__fadeOut');
    $('#box-mini-perfil').hide();
}


/*------------------------------- Box- de Registro -------------------------*/

$('#box-agregar').hide();

function btnAgregarCl(){
    $('#box-agregar').show();
    $('#box-agregar').addClass('animate__animated animate__backInUp');
    $('#titulo-box-agregar').addClass('animate__animated animate__fadeIn');
    $('#formulario-2').addClass('animate__animated animate__fadeIn');
}

