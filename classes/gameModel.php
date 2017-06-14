<?php

require_once('core/coreModel.php');

class GameModel extends CoreModel
{
    public function __construct() {
        parent::__construct();
    }

    public function newGame( $u_id_1, $u_id_2) {
        $req="INSERT INTO `game`(`u_id_user1`, `u_id_user2`) VALUES ( :uid1, :uid2 )";
        return $this->executeQuery($req, array('uid1' => $u_id_1, 'uid2' => $u_id_2));
    }

}
