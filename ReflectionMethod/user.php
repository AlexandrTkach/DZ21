<?php

namespace Log;
class User{
    protected $log = false;
    protected $data = [];
    
    public function getData(){
        return $this->data;
    }
    
    public function setData($data){
        $this->data = $data;
    }
    
    public function isLog(){
        return $this->log;
    }
}
