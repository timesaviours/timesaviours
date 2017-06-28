<?php
require_once('core/coreModel.php');

class imageModel extends CoreModel
{
    /**************************************************************************
      fonction qui recupere les infos images
      @param : $id=> id de l'image
    ***************************************************************************/
    public function getImage($id){
      $req = 'SELECT * FROM `image` WHERE i_id = :idImage';
      $options = array('idImage'=> $id);
      return parent::executeQuery($req,$options);

    }
}
