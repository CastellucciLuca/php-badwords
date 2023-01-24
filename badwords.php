<?php
$paragraph = $_POST['paragraph'];
$censure = $_POST['censureWord'];

echo ($paragraph . ', ' . strlen($paragraph)); //Print the paragraph without the censored word

//Print the paragraph with the censored word
$censoredParagraph = str_ireplace($censure, '***', $paragraph);
echo (' || ' . $censoredParagraph . ', ' . strlen($censoredParagraph));