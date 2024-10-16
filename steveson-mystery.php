<?php

$program1='Padawan';
$program2='Jedi';
//rogram attribute//

function writeSecretSentence(string $program1, string $program2): string
{
    $programFinal = ($program1 . ' s\'incline face au ' . $program2);
    return $programFinal;
}

echo writeSecretSentence($program1,$program2);

//Write mystery sentence//