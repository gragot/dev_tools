<?php
    use App\Http\Controllers\ResaltadorDeCodigoController;
    use App\Http\Controllers\CreadorDeHashController;
    use App\Http\Controllers\Base64Controller;
    use App\Http\Controllers\InfoFileController;
?>

<!DOCTYPE html>
<html id="html" lang="es">
@include('layouts.head')
<body>
<div class="container-fluid">

    <div class="nav-side-menu">
        <!--<div class="brand"><h1 class="titulo">Herramientas</h1></div>-->
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">

                <a href="{{ route('welcome') }}">
                    <li class="titulo-menu li-no-border-left">&nbsp;Dev Tools</li>
                </a>

                <a href="{{ route('resaltador_de_codigo.form') }}" >
                    <li class="<?= (isset($listItemActive)) && ($listItemActive == ResaltadorDeCodigoController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-code"></i> &nbsp;Resaltador sintaxis PHP
                    </li>
                </a>
                <a href="{{ route('generador_de_hashes.form') }}" >
                    <li class="<?= (isset($listItemActive)) && ($listItemActive == CreadorDeHashController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-unlock"></i> &nbsp;Creador de hash
                    </li>
                </a>
                <a href="{{ route('base_64.form') }}">
                    <li class="<?= (isset($listItemActive)) && ($listItemActive == Base64Controller::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-exchange-alt"></i> &nbsp;Base 64
                    </li>
                </a>
                <a href="{{ route('infofile.form') }}">
                    <li class="<?= (isset($listItemActive)) && ($listItemActive == InfoFileController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="far fa-file"></i> &nbsp;Informacion de archivo
                    </li>
                </a>
            </ul>
        </div>
    </div>

    <div id="contenedor">
        @yield('contenido')
    </div>

</div>
<script src="{{ url('js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ url('lib/bootstrap-4.6.0-dist/js/bootstrap.min.js') }}"></script>

@yield('js')
</body>
</html>
