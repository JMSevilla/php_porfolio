<?php

interface IDevregistration {
    public function postDev($data);
}

class PostDev_Class extends devPost_Class implements IDevregistration{
    public function postDev($data){
        $callback = $this->devpostController($data);
    }
}