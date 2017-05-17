<?php

require_once('../traits/Validators.php');

class User
{
    use Validators;

    private $_id;
    private $_name;
    private $_firstname;
    private $_login;
    private $_password;
    private $_email;
    private $_accountdate;

    public function __construct($array){
        $this->hydrate($array);
    }

    public function getId(){
        return $this->_id;
    }

    public function setId($_id){
        if (is_numeric($_id)) {
            $this->_id = $_id;
        }
    }

    public function getName(){
        return $this->_name;
    }

    public function setName($_name){
        $this->_name = $_name;
    }

    public function getFirstname(){
        return $this->_firstname;
    }

    public function setFirstname($_firstname){
        $this->_firstname = $_firstname;
    }

    public function getLogin(){
        return $this->_login;
    }

    public function setLogin($_login){
        if ($this->isAlphaNumeric($_login)) {
            $this->_login = $_login;
        }
    }

    public function getPassword(){
        return $this->_password;
    }

    public function setPassword($_password){
        $this->_password = $_password;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function setEmail($_email){
        if (ereg("@", $_email)) {
            $this->_email = $_email;
        }
    }

    public function getAccountdate(){
        return $this->_accountdate;
    }

    public function setAccountdate($_accountdate){
        $this->_accountdate = $_accountdate;
    }

    private function hydrate($array){
        foreach ($array as $key => $value) {
            $method = 'set'.ucfirst(substr($key, 0, 2));
        }
        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
    }

}
