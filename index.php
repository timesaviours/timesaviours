<?php session_start();

require_once('ini.php');
require_once('vendors/SPDO.php');

require_once('classes/gameModel.php');

$game = new GameModel($gameID = null, $imageID = null, $id_user1 = null, $id_user2 = null);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>TimeSaviours</title>
    </head>
    <body>
        <h1>TimeSaviours</h1>
        <form method="post">
            <input type="text" name="u1" placeholder="Joueur 1">
            <input type="text" name="u2" placeholder="Joueur 2">
            <input type="Submit" name="game_start" value="Commencer la partie">
        </form>
    </body>
</html>
