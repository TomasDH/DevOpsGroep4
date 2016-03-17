<?php
//code voor views/poll-html.php
$dataGevonden=isset($pollData);
if($dataGevonden===false) {
trigger_error('views/poll-html.php noodzaakt een $pollData object');
}
return "
<div id='main'>
 <form method='post' action='index.php'>
 <p>$pollData->poll_vraag</p>
 
 <label>Form your yes-no question below</label>
 <br />
 <input class='input' type='text' name='question'  />
 <button class='button' type='submit' value='post'>Create Poll !</button>
 </form>

</div> ";