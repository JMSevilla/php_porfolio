<?php

spl_autoload_register('provide_root');

if(isset($_POST['method']) == 'GET') { 
    if(isset($_POST['callback']) == 1){
        switch(true) {
            case $_POST['payload'] == 'get_roles';
                $check = new devRoles();
                $check->fetchRoles();
            break;
        }
    }
}

function provide_root(){
    include_once "../../routes/router.php";
    $callback = new webAPI();
    $callback->middleware("" . $_POST['js_route']['models'], "" . $_POST['js_route']['controller'], "db.php", "" . $_POST['method']);
}