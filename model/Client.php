<?php

class Client {
    protected $type;

    public function buy(){
        if($this->type == 'guest'){
            echo 'Sei un ospite';
        }elseif($this->type == 'user'){
            echo 'Sei registrato';
        }else{
            throw new Exception('C\'è qualcosa che non va non l\'acquisto, guest/user');
        }
    }
}