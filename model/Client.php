<?php
require_once __DIR__ . '/../traits/CheckDate.php';
require_once __DIR__ . '/../traits/UserDiscount.php';


class Client {
    use CheckDate;
    use UserDiscount;

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

    public function buy($price){
        if($this->type == 'guest'){
            echo 'Sei un ospite, hai pagato '.$price;

        }elseif($this->type == 'user'){
            echo 'Sei registrato';
            $this->getDiscount($price);
            echo 'Hai pagato '.$price.' con sconto 20%';
        }else{
            throw new Exception('C\'è qualcosa che non va non l\'acquisto, guest/user');
        }
    }
}