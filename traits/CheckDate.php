<?php

trait CheckDate
{
    protected $oggi;

    public function getDate (){
        $this->oggi = date("d/m/Y");
        //var_dump($this->oggi);
    }

    public function setCheckDateProduct ($date){
        $date = date("Y-m-d", strtotime($date));
        $this->oggi = date("Y-m-d");
        if($date > $this->oggi){
            return $date;
        }elseif($date == $this->oggi){
            throw new Exception('Mi dispiace la data indicata nella scadenza del prodotto è uguale a quella attuale');

        }else{
            throw new Exception('Mi dispiace la data indicata nella scadenza del prodotto è passata da quella attuale');
        }
    }
    public function setCheckDateCreditCard ($date, $type = false){
        $date = date("Y-m", strtotime($date));
        $this->oggi = date("Y-m");
        if($date > $this->oggi){
            return $date;
        }elseif($type){
            return false;
        }else
            {
            throw new Exception('Mi dispiace la data di scadenza indicata nella scadenza della carta di credito è passata da quella attuale');
        }
    }

}
