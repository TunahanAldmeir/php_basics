<?php
//singelton Pattern
class DB{
    public static ?DB $instance  = null;


    private function __construct(public array $config)
    {
        echo 'instance created';
    }

    public static function getINstance(array $config):DB
    {
        if(self::$instance ===null){
            self::$instance = new DB($config);
        }
        return self::$instance;

    }



}