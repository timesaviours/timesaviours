<?php

class Turn
{

    private $_g_id;
    private $_u_id;

    public function __construct( $array )
    {
        $this->hydrate( $array );
    }

    public function setGId( $_g_id ) {
        $this->_g_id = $_g_id;
    }

    public function getGId( ) {
        return $this->_g_id;
    }

    public function setUId( $_u_id ) {
        $this->_u_id = $_u_id;
    }

    public function getUId( ) {
        return $this->_u_id;
    }

    private function hydrate( $array ){
        foreach ($array as $key => $value) {
            $method = ucwords($key, "_");
            $method = str_replace('_', '', $method);
        }
        if (method_exists($this, $method)) {
            $this->$method = $value;
        }
    }
}
