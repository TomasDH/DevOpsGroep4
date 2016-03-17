<?php
//code voor views/poll-html.php
$dataGevonden = isset( $pollData );
if( $dataGevonden === false ){
 trigger_error( 'views/answers.php noodzaakt een $pollData object' );
}
return "
<div id='poll'>
 <form method='post' action='index.php'>
 <label>$pollData->poll_vraag</label>
 <br />
 <input class='green' type='radio' name='answer' value='ja'>
				Yes!
				<br>
				<input class='red' type='radio' name='answer' value='nee'>
				No
 
 <button class='button' type='submit' value='post'>
					Vote!
				</button>

 </form>
 
 <h1>Poll resultaten</h1>
 
 <ul>
					<li class='answer green'>
						Yes: $pollData->ja
					</li>
					<li class='answer red'>
						No: $pollData->nee
					</li>
				</ul>
</div> "; 