<?php

trait CheckDate
{
    protected $oggi;

    public function getDate (){
        $this->oggi = date("d/m/Y");
        //var_dump($this->oggi);
    }

    public function setCheckDate ($date){
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

}
