<?php
    if(isset($_REQUEST['view'])){
        $vista = $_REQUEST['view'];
    }else{
        $vista = "inicio";
    }
    switch($vista){
        case "inicio":{
            require_once './views/home.php';
            break;
        }
        case "login":{
            require_once './views/login.php';
            break;
        }
        case "registro":{
            require_once './views/registro.php';
            break;
        }
        case "inventario":{
            require_once './views/inventario.php';
            break;
        }
        case "contacto":{
            require_once './views/contacto.php';
            break;
        }
        case "alternadores":{
            require_once './views/alternadores.php';
            break;
        }
        case "marchas":{
            require_once './views/marchas.php';
            break;
        }
        case "regulador":{
            require_once './views/regulador.php';
            break;
        }
        case "nuevo_usuario":{
            require_once './views/nuevo_usuario.php';
            break;
        }
        case "administrar":{
            require_once './views/administrar.php';
            break;
        }
        default:{
            require_once './views/error404.php';
            break;
        }
        
    }
?> 