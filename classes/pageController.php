<?php
require_once('pageModel.php');

class pageController{


      public function indexAction(){

        include('views/home.php');
      }

      public function inscriptionAction(){
        include('views/inscription.php');
      }

     public function userAction($id){
         $user =  new pageModel;
         $data_user = $user->getUserById($id);
         include('views/user.php');
     }

     public function connexionAction($data){
       $connex = $this->checkingData($data);
       $exist = new pageModel;
       $user = $exist->getUserByMail($connex['email']);
       if(!empty($user)){
         foreach ($user as $key => $value) {
           if (password_verify($connex['passeword'], $value['password'])!= false){
             include('views/user.php');
           }
         }

       }
     }

     public function registerAction(){
       if(isset($_POST)){
         var_dump($this->userExist($_POST['email']));
         if ($this->userExist($_POST['email']) == false) {
           $register = $this->checkingData($_POST);
           $user = new pageModel;
           $new_user = $user->userRegister($register);
           $new_user;
           $this-> userAction($new_user);
         }
         else {
           echo'vous etes deja inscrit';
           header('Refresh :2, index2.php');
         }
       }
     }

    /*for cheking Date send by the user on the inscription form
    * param  item => $_POST
    *return  result=> array
    */
     public function checkingData($item){
         $result = array();
         foreach ($item as $key => $value) {
           if(!empty($value) ){
             $result[$key] = htmlentities($value);
           }
           else {
             echo'Merci de completer le formulaire';
           }
         }
         if(isset($result['password']) ){
         $result['password'] = password_hash($result['password'], PASSWORD_DEFAULT);
        }
        return $result;
     }

     /*
     *for checking if user has already been register
     *@ param $mail => string
     * return bool
     */
     public function userExist( $mail){
       $user = new pageModel;
       $result = $user->getUserByMail($mail);
       if(empty($result )== false){
         return true;
       }
       else{
         return false;
       }
     }













}
