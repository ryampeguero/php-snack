<?php
// Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

$students = [
    [
        'name' => 'Michele',
        'lastname' => 'Papagni',
        'votes' => [8, 5, 7, 6]
    ],
    [
        'name' => 'Fabio',
        'lastname' => 'Forghieri',
        'votes' => [10, 2, 4]
    ],
    [
        'name' => 'Roberto',
        'lastname' => 'Marazzini',
        'votes' => [2, 8]
    ]
];

foreach($students as $index => $student){
    echo "Nome: ". $student["name"];
    echo"<br>";
    echo "Cognome: " . $student["lastname"];
    echo"<br>";
    echo "Media: " . array_sum($student["votes"])/count($student["votes"]);
    echo"<br>";
    echo "<hr>";
}