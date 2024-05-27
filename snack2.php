<?php
// Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        .box {
            color:white;
            width: 200px;
            height: 200px;
            margin: 20px;
        }

        .green {
            background-color: green;
        }

        .gray {
            background-color: gray;
        }
    </style>
    <div class="box green">
        <?php
        foreach ($db["teachers"] as $people) {
            echo $people["name"] . " ". $people["lastname"];
            
            echo "<br>";
            echo "<hr>";
        }
        ?>
    </div>
    <div class="box gray">
    <?php
        foreach ($db["pm"] as $people) {
            echo $people["name"] . " ". $people["lastname"];
            
            echo "<br>";
            echo "<hr>";
        }
        ?>
    </div>
</body>

</html>