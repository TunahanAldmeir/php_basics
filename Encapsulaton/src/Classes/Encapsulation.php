<?php

//Encapsulation hides the data
class TransactionE{
    private  float $amount ;

    public function __construct(float $amount)
    {
        $this->amount=$amount;
    }

    public function procses()
    {
        echo 'procsesing $' . $this->amount." " . 'transaction';

        $this->generateReceipt();

    }
    private function generateReceipt(){
        
    }

    //public function getAmount():float
    //{
        //return $this->amount;
    //}

    public function setAmount(float $amount):float
    {
       
        return  $this->amount=$amount;
    }


}