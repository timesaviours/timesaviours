<?php

require('./common.php');

if (!empty($_POST['u1']) && !empty($_POST['u2'])) {

    $j1_deck = array( 'u_id' => 1, 'u_name' => 'superman', 'u_mana' => 2, 'u_life' => 5, 'u_atk' => 3, 'u_type' => 'Soldier', 'u_urlFront' => NULL, 'u_urlBack' => NULL, 'u_wait' => 0 );
    $j2_deck = array( 'u_id' => 2, 'u_name' => 'queen', 'u_mana' => 3, 'u_life' => 10, 'u_atk' => 2, 'u_type' => 'Soldier', 'u_urlFront' => NULL, 'u_urlBack' => NULL, 'u_wait' => 0 );

    $j1 = new Card($j1_deck);
    $j2 = new Card($j2_deck);
    $_SESSION['timeSavious']['J1'] = $j1;
    $_SESSION['timeSavious']['J2'] = $j2;

    var_dump($_SESSION['timeSavious']);
}

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
