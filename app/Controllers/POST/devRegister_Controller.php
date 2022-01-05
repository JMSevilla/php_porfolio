<?php

interface devregister_Controller {
    public function devpostController($data);
}

class devPost_Class extends DBIntegration implements devregister_Controller {
    public function devpostController($data){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if($this->php_prepare("insert into `mresolve_devregister` values(default, :fname, :lname, :role, :userstat, :reason, :address, :isagree, :skillset, :profilelink, :created)")) {
                $this->php_data_handler(":fname", $data['fname'], 3);
                $this->php_data_handler(":lname", $data['lname'], 3);
                $this->php_data_handler(":role", $data['role'], 3);
                $this->php_data_handler(":userstat", $data['userstat'], 3);
                $this->php_data_handler(":reason", $data['reason'], 3);
                $this->php_data_handler(":address", $data['address'], 3);
                $this->php_data_handler(":isagree", $data['isagree'], 3);
                $this->php_data_handler(":skillset", $data['skillset'], 3);
                $this->php_data_handler(":profileLink", $data['profileLink'], 3);
                $this->php_data_handler(":created", "current_timestamp");
                if($this->php_execution()) {
                    // echo $this->php_response_data(1, true, "success", 200);
                    echo json_encode(array("success" => 200));
                }
            }
        }
    }
}