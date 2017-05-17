<?php

trait Validators
{

    public function isAlphaNumeric($value){
        $return = true;
        $matches = null;
        if((preg_match('^[A-Za-z0-9()\/-]+$', $value, $matches)) > 0)
        {
           $return = false;
        }
        return $return;
    }

}
