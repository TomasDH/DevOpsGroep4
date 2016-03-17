<?php
$quizIsSubmitted = isset( $_POST['quiz-submitted'] );
if ( $quizIsSubmitted ){
$antwoord = $_POST['antwoord'];
$output = toonQuizAntwoord($antwoord);
array $output .= "<pre>";
$output .= print_r($_POST, true);
$output .= "</pre>";
} else {
$output = include_once "views/quiz-form.php";
}
return $output;
function toonQuizAntwoord( $antwoord ){
$terugSturen = "<p>Je klikte op $antwoord</p>";
$terugSturen .= "<p>
<a href='index.php?pagina=quiz'>Quiz opnieuw doen?</a>
</p>";
return $terugSturen;
}