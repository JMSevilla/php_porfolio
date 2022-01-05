<?php


spl_autoload_register('route_post_model');

if(isset($_POST['method']) == "POST") {
    if(isset($_POST['callback']) == 1) {
        switch(true) {
            case $_POST['payload']['key'] == 'post_dev':
                $data = [
                    "fname" => $_POST['payload']['data']['firstname'],
                    "lname" => $_POST['payload']['data']['lastname'],
                    "role" => $_POST['payload']['data']['role'],
                    "userstat" => $_POST['payload']['data']['userstat'],
                    "reason" => $_POST['payload']['data']['reason'],
                    "address" => $_POST['payload']['data']['address'],
                    "isagree" => $_POST['payload']['data']['isagree'],
                    "skillset" => $_POST['payload']['data']['skillset'],
                    "profileLink" => $_POST['payload']['data']['profileLink']
                ]; 
                $c = new PostDev_Class();
                $c->postDev($data);
                break;
        }
    }
}

function route_post_model(){
    include_once "../../routes/router.php";
    $callback = new webAPI();
    $callback->middleware("" . $_POST['js_routes']['models'], "" . $_POST['js_routes']['controller'], "db.php", "" . $_POST['method']);
}