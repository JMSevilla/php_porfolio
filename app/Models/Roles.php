<?php

interface IRoles {
    public function fetchRoles();
}

class devRoles extends RoleController implements IRoles {
    public function fetchRoles(){
        $callback = $this->getrolesController();
    }
}