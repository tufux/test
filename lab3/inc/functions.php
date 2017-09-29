<?php

function generateBoard(){
    $GLOBALS['players'] = array('Joey', 'Rachel', 'Ross', 'Monica');
    shuffle($GLOBALS['players']);
    $GLOBALS['playerHands'] = array(array(), array(), array(), array());
    $GLOBALS['playerHandValue'] = array(0,0,0,0);
}
function generateDeck(){
    $GLOBALS['deck'] = array();
    for ($i = 0; $i < 4; $i++){
        switch($i){
            case 0:
                $suit = "c";
                break;
            case 1:
                $suit = "s";
                break;
            case 2:
                $suit = "d";
                break;
            case 3:
                $suit = "h";
                break;
        }
        for ($j = 1; $j < 14; $j++){
            array_push($GLOBALS['deck'], array($suit, $j));
        }
    }
    shuffle($GLOBALS['deck']);
    $GLOBALS['size']= 52;
}
function echoCard($card){
    echo "<img class = 'card' id='" . $card[0] . $card[1] . "' src='img/" . $card[0] . $card[1] . ".png' alt='" . $card[0] . $card[1] . "'>";
}
function draw(){
    return $GLOBALS['deck'][--$GLOBALS['size']];
}
function playerDraw($p){
    $v = getPlayerHandValue($p);
    if ($v >= 37){
        return false;
    }
    if (getPlayerHandValue(($p + 1)%4) < $v && getPlayerHandValue(($p + 2)%4) < $v && getPlayerHandValue(($p + 3)%4) < $v){
        return false;
        echo "test";
    }
    array_push($GLOBALS['playerHands'][$p], draw());
    return true;
}
function getPlayerHandValue($p){
    $r = 0;
    foreach ($GLOBALS['playerHands'][$p] as $card){
        $r += $card[1];
    }
    return $r;
}
function deal(){
    for ($i = 0; $i < 4; $i++){
        if (playerDraw($i)){
            deal();
        }
    }
}
function echoPlayer($p){
    echo "<img class = 'player' id='" . $GLOBALS['players'][$p] . "' src='img/" . $GLOBALS['players'][$p] . ".jpg' alt='" . $GLOBALS['players'][$p] . "'>";
    echo "<p class =" . "'playerName'" . ">" . $GLOBALS['players'][$p] . "</p>";
}
function echoPlayerHand($p){
    foreach ($GLOBALS['playerHands'][$p] as $card){
        echoCard($card);
    }
}
function echoPlayerHandValue($p){
    echo "<p class = 'playerHandValue'> " . getPlayerHandValue($p) . "</p>";
}
function play(){
    generateBoard();
    generateDeck();
    deal();
}
function winnerName(){
    $r = "";
    for ($i = 0; $i < 4; $i++){
        if (getPlayerHandValue(winner()) == getPlayerHandValue($i)){
            $r = $r . " " . $GLOBALS['players'][$i];
        }
    }
    return $r;
}
function winnerPoints(){
    $r = 0;
    for ($i = 0; $i < 4; $i++){
        if ($i != winner()){
            $r += getPlayerHandValue($i);
        }
    }
    return $r;
}
function winner(){
    for ($i = 0; $i < 4; $i++){
        if (getPlayerHandValue($i) <= 42){
            $r = $i;
            break;
        }
    }
    for ($i = $r; $i < 4; $i++){
        if (getPlayerHandValue($i) > getPlayerHandValue($r) && getPlayerHandValue($i) <= 42){
            $r = $i;
        }
    }
    return $r;
}
?>