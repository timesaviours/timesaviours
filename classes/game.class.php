<?php

class Game
{

    private $_id;
    private $_user1Id;
    private $_user2Id;
    private $_user1Team;
    private $_user2Team;
    private $_user1Deck;
    private $_user2Deck;
    private $_datetime;
    private $_winner;
    private $_url;

    public function __construct($array){
        foreach ($array as $value) {
            var_dump($value);
            $this->hydrate($value);
            # code...
        }
    }

    public function getId(){
        return $this->_id;
    }

    public function setId($_id){
        if (is_numeric($_id)) {
            $this->_id = $_id;
        }
    }

    public function getUser1Id(){
        return $this->_user1Id;
    }

    public function setUser1Id($_user1Id){
        if (is_numeric($_user1Id)) {
            $this->_user1Id = $_user1Id;
        }
    }

    public function getUser2Id(){
        return $this->_user2Id;
    }

    public function setUser2Id($_user2Id){
        if (is_numeric($_user2Id)) {
            $this->_user2Id = $_user2Id;
        }
    }

    public function getUser1Team(){
        return $this->_user1Team;
    }

    public function setUser1Team($_user1Team){
        $this->_user1Team = $_user1Team;
    }

    public function getUser2Team(){
        return $this->_user2Team;
    }

    public function setUser2Team($_user2Team){
        $this->_user2Team = $_user2Team;
    }

    public function getUser1Deck(){
        return $this->_user1Deck;
    }

    public function setUser1Deck($_user1Deck){
        $this->_user1Deck = $_user1Deck;
    }

    public function getUser2Deck(){
        return $this->_user2Deck;
    }

    public function setUser2Deck($_user2Deck){
        $this->_user2Deck = $_user2Deck;
    }

    public function getDatetime(){
        return $this->_datetime;
    }

    public function setDatetime($_datetime){
        $this->_datetime = $_datetime;
    }

    public function getWinner(){
        return $this->_winner;
    }

    public function setWinner($_winner){
        $this->_winner = $_winner;
    }

    public function getUrl(){
        return $this->_url;
    }

    public function setUrl($_url){
        $this->_url = $_url;
    }

    private function hydrate($array){
        foreach ($array as $key => $value) {
            $method = 'set'.ucfirst(substr($key, 2));
            var_dump($method);
        }
        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
    }

}
