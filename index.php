<?php
/*
Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e 
punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$match = [
    [
        'squadraCasa' => 'indiana pacers',
        'squadraOspite' => 'charlotte hornets',
        'punteggioCasa' => 144,
        'punteggioOspite' => 177,
    
    ],
    [
        'squadraCasa' => 'boston celtics',
        'squadraOspite' => 'Washington Wizards',
        'punteggioCasa' => 118,
        'punteggioOspite' => 100,
    
    ],
    [
        'squadraCasa' => 'GNBC',
        'squadraOspite' => 'Patriots',
        'punteggioCasa' => 72,
        'punteggioOspite' => 78,
    
    ],
    [
        'squadraCasa' => 'Brisbane Bullets',
        'squadraOspite' => 'Perth Wildcats',
        'punteggioCasa' => 91,
        'punteggioOspite' => 88,
    
    ]
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
    
    <div>
        
        <ul>
            
            <?php for($i = 0; $i < count($match);$i++) { ?>

                <?php $item = $match[$i]?>

                <li>
                    <?php echo($item['squadraCasa'])?> - <?php echo($item['squadraOspite'])?>: 
                    <?php echo($item['punteggioCasa'])?> / <?php echo($item['punteggioOspite'])?>
                </li>

            <?php } ?>
            
            
        </ul>

    </div>

</body>
</html>