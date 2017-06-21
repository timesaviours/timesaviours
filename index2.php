<?php



if(isset($_GET['c'])){
  $c = $_GET['c'];
}
else {
  $c = 'page';
}
$controller = 'classes/' . $c .'Controller.php';
if (file_exists($controller)) {
  require($controller);
  $ctr = $c . 'Controller';
  $page = new $ctr;

  if(isset($_GET['a'])){
    $a = $_GET['a'];
  }
  else {
    $a = 'index';
  }
  $act = $a .'Action';
  $page->$act();
}
