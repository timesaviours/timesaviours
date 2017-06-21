<?php


class pageController{


  public function indexAction(){

    include('views/home.php');
  }

  public function inscriptionAction(){
    include('views/inscription.php');
  }
 public function userAction(){
   include('views/user.php');
 }


}
