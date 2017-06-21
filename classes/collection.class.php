<?php

class Collection
{

    private $_id;
    private $_name;
    private $_mana;
    private $_life;
    private $_atk;
    private $_desc;
    private $_type;
    private $_image;

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

    public function getMana(){
        return $this->_mana;
    }

    public function setMana($_mana){
        if (is_numeric($_mana)) {
            $this->_mana = $_mana;
        }
    }

    public function getLife(){
        return $this->_life;
    }

    public function setLife($_life){
        if (is_numeric($_life)) {
            $this->_life = $_life;
        }
    }

    public function getAtk(){
        return $this->_atk;
    }

    public function setAtk($_atk){
        if (is_numeric($_atk)) {
            $this->_atk = $_atk;
        }
    }

    public function getDesc(){
        return $this->_desc;
    }

    public function setDesc($_desc){
        $this->_desc = $_desc;
    }

    public function getType(){
        return $this->_type;
    }

    public function setType($_type){
        $this->_type = $_type;
    }


    public function getUrlImage(){
        return $this->_image;
    }

    public function setUrlImage($_image){
        $this->_image = $_image;
    }


    private function hydrate($array){
        foreach ($array as $key => $value) {
            $method = 'set'.ucfirst(substr($key, 0, 2));
        }
        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
    }

    public function sendDamage(Card $_opponent, $_damage){
        if ($this->_type == 'Spell') {
            $_opponent->receiveDamage($_damage);
        }else{
            $_opponent->receiveDamage($_damage);
            $this->_life -= $_opponent->getAtk();
        }
    }

    public function receiveDamage($_damage){
        $this->_life -= $_damage;
    }

}
