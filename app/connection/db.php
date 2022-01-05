<?php

class DBIntegration {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "db_mresolve";
    private $stmt;
    private $helper;

    private function connect(){
        try {
            $connectionString  = "mysql:host=" . $this->host . ";dbname=" . $this->db;
            $this->helper = new PDO($connectionString, $this->username, $this->password);
            $this->helper->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->helper;
        } catch (PDOException $th) {
            die("Could not connect to the database " . $th->getMessage());
        }
    }

    public function php_prepare($v = null) {
        if(is_null($v)) { 
            echo json_encode(array("invalid Query" => 404));
        } else {
            return $this->stmt = $this->connect()->prepare($v);
        }
    }

    public function php_ready($q = null) {
        if(is_null($q)) {
            echo json_encode(array("invalid Query" => 404));
        } else {
            return $this->stmt = $this->connect()->query($q);
        }
    }

    public function php_data_handler($val, $param, $type = null) {
        if(is_null($type)){
            switch(true){
                case $type == 1: 
                    $type = PDO::PARAM_INT;
                    break;
                case $type == 2:
                    $type = PDO::PARAM_BOOL;
                    break;
                case $type == 3:
                    $type = PDO::PARAM_STR;
                    break;
                default: 
                $type = PDO::PARAM_STR;
                break;
            }
        }
        return $this->stmt->bindParam($val, $param, $type);
    }
    public function php_execution(){
        return $this->stmt->execute();
    }

    public function fetch_all_db() { 
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function controller_row(){
        return $this->stmt->rowCount() > 0;
    }

    public function controller_fetch_all(){
        return $this->stmt->fetchall();
      }
    public function php_response_data($p, $bool = true, $val, $state) {
        switch($bool) {
          case $p == 1:
              json_encode(array($val => $state));
              break;
          case $p == 2:
              json_encode(array($state));
              break;
        }
    }   
}