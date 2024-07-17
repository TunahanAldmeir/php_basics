<?php

class Transaction{
    private static int $count = 0;

    public function __construct(public float $amount, public string $description)
    {
        self::$count++;
    }

    public function procsess()
    {
        echo 'procsessing paddle transaction';
    }
    public static function getCount():int
    {
        return self::$count;
    }

}