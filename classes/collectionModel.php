<?php

class CardModel extends CoreModel
{

    private $_pdo;

    public function __construct($pdo)
    {
        $this->_pdo = $pdo;
    }
    



}
