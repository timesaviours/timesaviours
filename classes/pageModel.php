<?php

require_once('core/coreModel.php');

class pageModel extends CoreModel {


          /* get user data by id
          *@ param $id => int
          *return array
          */
          public function getUserById($id){
            $sql = ('SELECT `u_name` AS name, `u_firstname` AS prenom, `u_login` AS login, `u_email` AS mail FROM `user` WHERE `u_id` = :id');
            $options = array('id'=> $id);
            return $this->executeQuery($sql, $options);
          }
        /* save user data in database
        *@ param $data => array
        *
        */
          public function userRegister($data){
            $sql = ('INSERT INTO `user` (`u_name`, `u_firstname`, `u_login`, `u_password`, `u_email`)
            VALUES (:name, :firstname,:login, :password, :email)');
            $id = $this->executeQuery($sql,$data);
            return $id;

          }

          /*
          *for get all user
          *@param $mail=> string
          *return $result => int
          */
          public function getUserByMail($mail){
            $sql = ('SELECT * FROM `user` WHERE `u_email` = :mail');
            $options = array('mail'=>$mail);
            return  $this->executeQuery($sql, $options);

          }









}
