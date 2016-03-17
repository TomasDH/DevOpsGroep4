<?php
//code voor views/poll-html.php
$dataGevonden = isset( $pollData );
if( $dataGevonden === false ){
 trigger_error( 'views/poll-html.php noodzaakt een $pollData object' );
}
return "
<div id='poll'>
 <form method='post' action='index.php'>
 <p>$pollData->poll_vraag</p>
 <select name='user-input'>
 <option value='ja'>Ja, het is moeilijk!</option>
 <option value='nee'>Nee, niet echt!</option>
 </select>
 <input type='submit' value='post' />
 </form>
 <h1>Poll resultaten</h1>
 <ul>
 <li>$pollData->ja zeiden ja</li>
 <li>$pollData->nee zeiden nee</li>
 </ul>
</div> "; 