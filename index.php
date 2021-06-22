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
                'puntiSquadraCasa' => 50,
                'puntiSquadraOspite' => 73,
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
        echo '<pre>';
        var_dump($partite);
        echo '</pre>';
    ?>

</body>
</html>