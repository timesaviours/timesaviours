<?php session_start();

require_once('ini.php');
require_once('vendors/SPDO.php');

require_once('classes/gameModel.php');

if ( !empty($_POST['1']) && !empty($_POST['2']) ) {
    var_dump($_POST);
    $game = new GameModel;
    $game->newGame( $_POST['1'] );
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TimeSaviours</title>
    </head>
    <body>
        <h1>TimeSaviours 2</h1>
        <form method="post">
            <input type="text" name="1" value="1" placeholder="Joueur 1">
            <select name="deckj1">
                <option value=""></option>
            </select>
            <input type="text" name="2" value="2" placeholder="Joueur 2">
            <input type="Submit" name="game_start" value="Commencer la partie">
        </form>
    </body>
</html>
