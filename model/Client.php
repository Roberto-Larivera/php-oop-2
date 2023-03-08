<?php
require_once __DIR__ . '/../traits/CheckDate.php';


class Client {
    use CheckDate;
    protected $type;
    protected $creditCard;

    function __construct(string $type, string $creditCardNumber, string $creditCardExpiration, string $creditCardHolder, string $creditCardCode)
    {
        if(strlen($creditCardNumber) == 16 && is_numeric($creditCardNumber) && strlen($creditCardCode) == 3 && is_numeric($creditCardCode)){
            $this->setCheckDateCreditCard($creditCardExpiration);
            
            $this->creditCard = [
                "creditCardNumber" => $creditCardNumber,
                "creditCardExpiration" => $creditCardExpiration,
                "creditCardHolder" => $creditCardHolder,
                "creditCardCode" => $creditCardCode
            ];
        }else{
            throw new Exception('I dati inseriti sono errati');

        }
    }

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