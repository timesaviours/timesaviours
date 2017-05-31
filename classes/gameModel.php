<?php

require_once('core/coreModel.php');

class GameModel extends CoreModel
{
    public function __construct($gameID, $imageID, $id_user1, $id_user2) {
        parent::__construct();
    }

    public function newGame() {
        $req="DELETE FROM `user` WHERE `u_id`=52";
        return $this->executeQuery($req);
    }

}
