<?php

class Game
{

    private $_g_id;
    private $_i_id;
    private $_u_id_user1;
    private $_u_deck_user1;
    private $_u_id_user2;
    private $_u_deck_user2;


    public function __construct($array){
        foreach ($array as $value) {
            var_dump($value);
            $this->hydrate($value);
        }
    }

    public function getGId(){
		return $this->_g_id;
	}

	public function setGId($_g_id){
		$this->_g_id = $_g_id;
	}

	public function getIId(){
		return $this->_i_id;
	}

	public function setIId($_i_id){
		$this->_i_id = $_i_id;
	}

	public function getUIdUser1(){
		return $this->_u_id_user1;
	}

	public function setUIdUser1($_u_id_user1){
		$this->_u_id_user1 = $_u_id_user1;
	}

	public function getUIdUser2(){
		return $this->_u_id_user2;
	}

	public function setUIdUser2($_u_id_user2){
		$this->_u_id_user2 = $_u_id_user2;
	}

	public function getDeckdUser1(){
		return $this->_u_deck_user1;
	}

	public function setDeckUser1($_u_deck_user1){
		$this->_u_deck_user1 = $_u_deck_user1;
	}

	public function getDeckdUser2(){
		return $this->_u_deck_user2;
	}

	public function setDeckUser2($_u_deck_user2){
		$this->_u_deck_user2 = $_u_deck_user2;
	}

    private function hydrate($array){
        foreach ($array as $key => $value) {
            $method = ucwords($key, "_");
            $method = str_replace('_', '', $method);
        }
        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
    }

}
