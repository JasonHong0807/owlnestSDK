<?php


namespace Jasonhong\OwlnestSDK;


class MetaService
{
    public function __construct($a = "", $b = "")
    {
        $this->result = $a + $b;
    }

    public function result()
    {
        return $this->result;
    }
}