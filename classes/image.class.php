<?php
require_once('imageModel.php');

class Image
{
  private $_id;
  private $_url_front;
  private $_url_back;
  private $_url_board;



  public function __construct($id)
  {
    $array = $this->image($id);
    $this-> hydrate($array);

  }
/************************GETTER/SETTER***************************************/
  public function get_id(){
  		return $this->_id;
  	}

  	public function set_id($_id){
  		$this->_id = $_id;
  	}

  	public function get_url_front(){
  		return $this->_url_front;
  	}

  	public function set_url_front($_url_front){
  		$this->_url_front = $_url_front;
  	}

  	public function get_url_back(){
  		return $this->_url_back;
  	}

  	public function set_url_back($_url_back){
  		$this->_url_back = $_url_back;
  	}

  	public function get_url_board(){
  		return $this->_url_board;
  	}

  	public function set_url_board($_url_board){
  		$this->_url_board = $_url_board;
  	}
/*****************fonction hydrate********************************************/
    private function hydrate($array){
        foreach ($array as $key => $value) {
            $method = 'set'.ucfirst(substr($key, 0, 2));

        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
      }
    }

  /************************fonction recuperer une image***********************
  @: $id=> id de l'image
  return => array
********************************************************************************/
    public function image($id){
      $image = new imageModel;
      $image-> getImage($id);
      return $image;
    }


}
