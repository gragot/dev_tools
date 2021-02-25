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

                <a href="<?= 'HOME_URL' ?>">
                    <li class="titulo-menu li-no-border-left">&nbsp;Online Tools</li>
                </a>

                <a href="<?php // get_url(['resaltadordecodigo']) ?>" >
                    <li class="<?php // ($listItemActive == ResaltadorDeCodigoController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fa fa-code"></i> &nbsp;Resaltador sintaxis PHP
                    </li>
                </a>
                <a href="<?php // get_url(['creadordehash']) ?>" >
                    <li class="<?php // ($listItemActive == CreadorDeHashController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-unlock"></i> &nbsp;Creador de hash
                    </li>
                </a>
                <a href="<?php // get_url(['contadordecaracteres']) ?>" >
                    <li class="<?php // ($listItemActive == ContadorDeCaracteresController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-font"></i> &nbsp;Contador de caracteres
                    </li>
                </a>
                <a href="<?php // get_url(['base64']) ?>" >
                    <li class="<?php // ($listItemActive == Base64Controller::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="fas fa-exchange-alt"></i> &nbsp;Base 64
                    </li>
                </a>
                <a href="<?php // get_url(['infofile']) ?>" >
                    <li class="<?php // ($listItemActive == InfoFileController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="far fa-file"></i> &nbsp;Informacion de archivo
                    </li>
                </a>
                <a href="<?php // get_url(['comparacionarchivos']) ?>" >
                    <li class="<?php // ($listItemActive == ComparacionArchivosController::LIST_ITEM_ACTIVE) ? 'active' : null ?>">
                        &nbsp;<i class="far fa-file"></i> &nbsp;Comparar archivos
                    </li>
                </a>



                <!--<li class="menu-contacto li-no-border-left">
                    &nbsp;<i class="fa fa-code fa-lg"></i> &nbsp;Contacto
                </li>-->

            </ul>
        </div>
    </div>

    <div id="contenedor">
        @yield('contenido')
    </div>




</div>
<script src="http://localhost-proyectos/proyectos_personales/Tools/Repositorio/src/app/webroot/autoload/1 jquery/jquery-3.2.1.min.js"></script>

<script src="http://localhost-proyectos/proyectos_personales/Tools/Repositorio/src/app/webroot/autoload/2 bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
