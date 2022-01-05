<?php 


interface IfetchRoleController {
    public function getrolesController();
}

class RoleController extends DBIntegration implements IfetchRoleController {
    public function getrolesController(){
        if($this->php_ready("select roleName from `mresolve_roles`")) {
           if($this->controller_row()){
               if($row = $this->controller_fetch_all()){
                    echo json_encode($row);
               }
           }
        }
    }
}