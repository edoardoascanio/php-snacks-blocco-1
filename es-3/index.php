<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php
          
            $keyMap = array_keys($ports);

            var_dump($keyMap);

            for ($i = 0; $i < count($ports); $i++) {
               $keyMap = $keyMap[$i];
               $value = $ports[$key];

               echo "<li>" .$key;
               echo "<ul>";

                 
              for ($y = 0; $y < count($value); $y++) {
                $siglePost = $value[$y]; 
                
              }
               echo "</li>";
               echo  "<strong>" . $siglePost["title"] . "</strong><br>";
               echo  "<em>" . $siglePost["author"] . "</em><br>";
               echo  "<p>" . $siglePost["text"] . "</p><br>";

               echo "</li>";
            }

            echo "</ul>";
            echo "</li>";
           
        ?>

    </ul>
</body>

</html>