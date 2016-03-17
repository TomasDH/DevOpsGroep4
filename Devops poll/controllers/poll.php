<?php
//volledige code voor controllers/poll.php
include_once "models/Poll.class.php";
$poll = new Poll( $db );
$isPollAanwezig = isset( $_POST['user-input'] );
if ( $isPollAanwezig ) {
 $input = $_POST['user-input'];
 $poll->updatePoll( $input );
}
$pollData = $poll->getPollData();
$pollAlsHTML = include_once "views/poll-html.php";
return $pollAlsHTML;