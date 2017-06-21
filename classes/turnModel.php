<?php

require_once('core/coreModel.php');

class TurnModel extends CoreModel
{

    public function newTurn( $g_id, $u_id ) {
        $req="INSERT INTO `turn`(`g_id`, `u_id`) VALUES ( :gId, :uId )";
        return $this->executeQuery($req, array('gId' => $g_id, 'uId' => $u_id));
    }

    public function attack( $t_id, $c_id, $id_tmp ) {
        $req="INSERT INTO `attack`(now(),`t_id`,`c_id`, `id_tmp`) VALUES ( moment, :tId, :cId, :idTmp )";
        return $this->executeQuery($req, array('gId' => $g_id, 'tId' => $t_id, 'cId' => $c_id, 'idTmp' => $id_tmp));
    }

    public function draw( $t_id, $c_id ) {
        $req="INSERT INTO `attack`(now(),`t_id`,`c_id`) VALUES ( moment, :tId, :cId )";
        return $this->executeQuery($req, array('tId' => $t_id, 'cId' => $c_id));
    }

    public function place( $t_id, $c_id ) {
        $req="INSERT INTO `attack`(now(),`t_id`,`c_id`) VALUES ( moment, :tId, :cId )";
        return $this->executeQuery($req, array('tId' => $t_id, 'cId' => $c_id));
    }

}
