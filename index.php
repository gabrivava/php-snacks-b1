<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SNACK</title>
</head>
<body>

    <!-- snack 1 -->
    <h1>Snack 1</h1>
    <h3>Torneo Basket</h3>
    <!-- php Snack 1-->
    <?php 
        $partite = [
            [
                'squadraCasa' => 'Bergamo',
                'squadraOspite' => 'Brescia',
                'puntiSquadraCasa' => 110,
                'puntiSquadraOspite' => 93,
            ],
            [
                'squadraCasa' => 'Olimpia Milano',
                'squadraOspite' => 'Cantù',
                'puntiSquadraCasa' => 55,
                'puntiSquadraOspite' => 60,
            ],
            [
                'squadraCasa' => 'Fara',
                'squadraOspite' => 'Genoa',
                'puntiSquadraCasa' => 78,
                'puntiSquadraOspite' => 53,
            ],
            [
                'squadraCasa' => 'Orio',
                'squadraOspite' => 'Cosenza',
                'puntiSquadraCasa' => 97,
                'puntiSquadraOspite' => 99,
            ],
            [
                'squadraCasa' => 'Casa',
                'squadraOspite' => 'Ospite',
                'puntiSquadraCasa' => 76,
                'puntiSquadraOspite' => 77,
            ],
            [
                'squadraCasa' => 'Cassano',
                'squadraOspite' => 'Treviglio',
                'puntiSquadraCasa' => 60,
                'puntiSquadraOspite' => 93,
            ],
            [
                'squadraCasa' => 'Imola',
                'squadraOspite' => 'Pesaro',
                'puntiSquadraCasa' => 95,
                'puntiSquadraOspite' => 70,
            ],
            [
                'squadraCasa' => 'Ostia',
                'squadraOspite' => 'Roma',
                'puntiSquadraCasa' => 60,
                'puntiSquadraOspite' => 85,
            ],
        ];

        // stampo a schermo
        /* echo '<pre>';
        var_dump($partite);
        echo '</pre>'; */

        for ($i=0; $i < count($partite); $i++) { ?>
            <!--  Olimpia Milano - Cantù | 55-60 -->
            <p>
            <?php
            echo $partite[$i]['squadraCasa'];
            echo ' - ';
            echo $partite[$i]['squadraOspite'];
            echo ' | ';
            echo $partite[$i]['puntiSquadraCasa'];
            echo ' - ';
            echo $partite[$i]['puntiSquadraOspite'];
            ?>
            </p>
        <?php
        };
    ?>

    <!-- snack 2 -->
    <h1>Snack 2</h1>
    <h3>Prova a fare il login con una mail vailda tramite parametri GET</h3>
    <h4>
    <?php 
        /* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
        $re = '/[A-z]+[@]+[A-z]+[.]+[A-z]+/m';

        if (strlen($name) > 3 && preg_match_all($re, $mail) && is_numeric($age)) {
            echo 'acesso riuscito';
        } else {
            echo 'Accesso negato';
        };
    ?>
    </h4>


    <!-- Snack 3 -->
    <h1>Snack 3</h1>
    <!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post. -->
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
    //echo array_keys($posts)[0];
    for ($i=0; $i < count($posts); $i++) { 
        //echo $i;
        $data = array_keys($posts)[$i];
        echo $data;
        echo '<pre>';
        var_dump($posts[$data]);
        echo '</pre>';
    }
    ?>

    <!-- snack 4 -->
    <h1>snack 4</h1>
    <?php
    //Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    $newArray = [];

    while (count($newArray) < 15) {
        $number = rand(1, 100);
        if (!in_array($number, $newArray)) {
            $newArray[] = $number;
        }
    }
    echo '<pre>';
    var_dump($newArray);
    
    ?>


    <!-- snack 5 -->
    <h1>Snack 5</h1>
    <?php 
        // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
        $paragrafoLungo = 'Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.';
        ?>
        <p>Paragrafo originale: <?php echo $paragrafoLungo;?></p>
        <?php
        $paragrafi = explode('.', $paragrafoLungo);
        for ($i=0; $i < count($paragrafi); $i++) { 
            if (strlen($paragrafi[$i]) > 0) {?>
                <p><?php echo $paragrafi[$i];?></p>
                <?php
            }
        }
    ?>


    <!-- Snack 6 -->
    
</body>
</html>