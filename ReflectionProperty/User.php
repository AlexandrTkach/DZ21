<?php

namespace Log;
class User{
    protected $log = false;
    protected $data = [
        'username'=>'Slava',
        'password'=>'pass123',
        'lastLog'=>'2016-09-09 12:00:00'
    ];
    
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
