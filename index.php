<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gun Shop - DE</title>
</head>
<body>
    <h1>Replicas of German Weapons, Vehicles from times of WW1 & WW2</h1>
    <hr>
    <h2>Sidearms<h2>
    <?php
    $sidearms[0]['name'] = 'Luger P08';
    $sidearms[0]['type'] = 'Semi-Automatic';
    $sidearms[0]['user'] = 'German Empire';
    $sidearms[0]['manufacturer'] = 'Deutsche Waffen und Munitionsfabriken';
    $sidearms[0]['year'] = '1900';
    $sidearms[0]['ammo'] = '7.65×21mm Parabellum';

    $sidearms[1]['name'] = 'Mauser C96';
    $sidearms[1]['type'] = 'Semi-Automatic';
    $sidearms[1]['user'] = 'German Empire';
    $sidearms[1]['manufacturer'] = 'Mauser';
    $sidearms[1]['year'] = '1896';
    $sidearms[1]['ammo'] = '7.63×25mm Mauser';

    $sidearms[2]['name'] = 'Mauser HSc';
    $sidearms[2]['type'] = 'Semi-Automatic';
    $sidearms[2]['user'] = 'Nazi Germany';
    $sidearms[2]['manufacturer'] = 'Mauser';
    $sidearms[2]['year'] = '1935';
    $sidearms[2]['ammo'] = '.32 ACP';

    $sidearms[3]['name'] = 'Sauer 38H';
    $sidearms[3]['type'] = 'Semi-Automatic';
    $sidearms[3]['user'] = 'Nazi Germany';
    $sidearms[3]['manufacturer'] = 'Sauer';
    $sidearms[3]['year'] = '1938';
    $sidearms[3]['ammo'] = '.25 ACP';

    $sidearms[4]['name'] = 'Volkspistole';
    $sidearms[4]['type'] = 'Semi-Automatic';
    $sidearms[4]['user'] = 'Nazi Germany';
    $sidearms[4]['manufacturer'] = 'Walther, Mauser';
    $sidearms[4]['year'] = '1945';
    $sidearms[4]['ammo'] = '9×19mm Parabellum';

    $sidearms[5]['name'] = 'Walther P38';
    $sidearms[5]['type'] = 'Semi-Automatic';
    $sidearms[5]['user'] = 'Nazi Germany';
    $sidearms[5]['manufacturer'] = 'Walther, Mauser, Spreewerk';
    $sidearms[5]['year'] = '1939';
    $sidearms[5]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[0]['name'] = 'EMP 44';
    $auto_p_smg[0]['type'] = 'Submachine gun';
    $auto_p_smg[0]['user'] = 'Nazi Germany';
    $auto_p_smg[0]['manufacturer'] = 'Erma Werke';
    $auto_p_smg[0]['year'] = '1943';
    $auto_p_smg[0]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[1]['name'] = 'Erma EMP';
    $auto_p_smg[1]['type'] = 'Machine pistol';
    $auto_p_smg[1]['user'] = 'Weimar Republic';
    $auto_p_smg[1]['manufacturer'] = 'Erma Werke';
    $auto_p_smg[1]['year'] = '1931';
    $auto_p_smg[1]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[2]['name'] = 'Mauser M712 Schnellfeuer';
    $auto_p_smg[2]['type'] = 'Machine pistol';
    $auto_p_smg[2]['user'] = 'German Empire';
    $auto_p_smg[2]['manufacturer'] = 'Mauser';
    $auto_p_smg[2]['year'] = '1896';
    $auto_p_smg[2]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[3]['name'] = 'MP 18';
    $auto_p_smg[3]['type'] = 'Submachine gun';
    $auto_p_smg[3]['user'] = 'German Empire';
    $auto_p_smg[3]['manufacturer'] = 'Bergmann Waffenfabrik';
    $auto_p_smg[3]['year'] = '1918';
    $auto_p_smg[3]['ammo'] = '9×19mm Parabellum';
    
    $auto_p_smg[4]['name'] = 'MP 20';
    $auto_p_smg[4]['type'] = 'Submachine gun';
    $auto_p_smg[4]['user'] = 'German Empire';
    $auto_p_smg[4]['manufacturer'] = 'Bergmann Waffenfabrik';
    $auto_p_smg[4]['year'] = '1928';
    $auto_p_smg[4]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[5]['name'] = 'MP 34';
    $auto_p_smg[5]['type'] = 'Submachine gun';
    $auto_p_smg[5]['user'] = 'Weimar Republic';
    $auto_p_smg[5]['manufacturer'] = 'Waffenfabrik Steyr';
    $auto_p_smg[5]['year'] = '1929';
    $auto_p_smg[5]['ammo'] = '9×19mm Parabellum';

    $rifauto_p_smgles[6]['name'] = 'MP 35';
    $auto_p_smg[6]['type'] = 'Submachine gun';
    $auto_p_smg[6]['user'] = 'Nazi Germany';
    $auto_p_smg[6]['manufacturer'] = 'Bergmann, Schultz & Larsen';
    $auto_p_smg[6]['year'] = '1935';
    $auto_p_smg[6]['ammo'] = '9×19mm Parabellum';

    $auto_p_smg[7]['name'] = 'MP 40';
    $auto_p_smg[7]['type'] = 'Submachine gun';
    $auto_p_smg[7]['user'] = 'Nazi Germany';
    $auto_p_smg[7]['manufacturer'] = 'Steyr-Mannlicher, Erma Werke, Haenel';
    $auto_p_smg[7]['year'] = '1940';
    $auto_p_smg[7]['ammo'] = '9×19mm Parabellum';

    $vehicles[0]['name'] = 'Stridsvagn L-5';
    $vehicles[0]['type'] = 'Tank';

    $vehicles[1]['name'] = 'Leichttraktor';
    $vehicles[1]['type'] = 'Tank';

    $vehicles[2]['name'] = 'Grosstraktor';
    $vehicles[2]['type'] = 'Tank';

    $vehicles[3]['name'] = 'Panzer I';
    $vehicles[3]['type'] = 'Tank';

    $vehicles[4]['name'] = 'Panzer II';
    $vehicles[4]['type'] = 'Tank';

    $vehicles[5]['name'] = 'Škoda T-15';
    $vehicles[5]['type'] = 'Tank';

    $vehicles[6]['name'] = 'Panzerkampfwagen II mit Schwimmkörper';
    $vehicles[6]['type'] = 'Tank';

    $vehicles[7]['name'] = 'Light Tank VK 1602 "Leopard"';
    $vehicles[7]['type'] = 'Tank';

    $vehicles[8]['name'] = 'Neubaufahrzeug';
    $vehicles[8]['type'] = 'Tank';

    $vehicles[9]['name'] = 'Panzer 35';
    $vehicles[9]['type'] = 'Tank';

    $vehicles[10]['name'] = 'Panzer 38';
    $vehicles[10]['type'] = 'Tank';

    $vehicles[11]['name'] = 'Panzerkampfwagen 38';
    $vehicles[11]['type'] = 'Tank';

    $vehicles[12]['name'] = 'Panzer III';
    $vehicles[12]['type'] = 'Tank';

    $vehicles[13]['name'] = 'Panzerbeobachtungswagen III';
    $vehicles[13]['type'] = 'Tank';

    $vehicles[14]['name'] = 'Tauchpanzer III';
    $vehicles[14]['type'] = 'Tank';

    $vehicles[15]['name'] = 'Panzer IV';
    $vehicles[15]['type'] = 'Tank';

    $vehicles[16]['name'] = 'Panzerbeobachtungswagen IV';
    $vehicles[16]['type'] = 'Tank';

    $vehicles[17]['name'] = 'Panzerkampfwagen V Panther';
    $vehicles[17]['type'] = 'Tank';

    $vehicles[18]['name'] = 'Tiger I';
    $vehicles[18]['type'] = 'Tank';

    $vehicles[19]['name'] = 'Tiger II';
    $vehicles[19]['type'] = 'Tank';

    $vehicles[20]['name'] = 'Panzer VII Löwe';
    $vehicles[20]['type'] = 'Tank';

    $vehicles[21]['name'] = 'Panzer VIII Maus';
    $vehicles[21]['type'] = 'Tank';

    $vehicles[22]['name'] = 'E-5';
    $vehicles[22]['type'] = 'Tank';

    $vehicles[23]['name'] = 'E-10';
    $vehicles[23]['type'] = 'Tank';

    $vehicles[24]['name'] = 'E-25';
    $vehicles[24]['type'] = 'Tank';

    $vehicles[25]['name'] = 'E-50';
    $vehicles[25]['type'] = 'Tank';

    $vehicles[26]['name'] = 'E-75';
    $vehicles[26]['type'] = 'Tank';

    $vehicles[27]['name'] = 'E-100';
    $vehicles[27]['type'] = 'Tank';

    for ($i=0; $i < count($sidearms); $i++) { ?>
        <h2><?= $sidearms[$i]['name']; ?></h2>
        <p><strong>Type: </strong><?= $sidearms[$i]['type']; ?></p>
        <p><strong>Used by: </strong><?= $sidearms[$i]['user']; ?></p>
        <p><strong>Manufactured by: </strong><?= $sidearms[$i]['manufacturer']; ?></p>
        <p><strong>First manufactured in: </strong><?= $sidearms[$i]['year']; ?></p>
        <p><strong>Used ammo: </strong><?= $sidearms[$i]['ammo']; ?></p>
        <?php 
    }
    ?>
    <hr>
    <h2>Automatic Pistols und Submachineguns:</h2>
    <?php 
    for ($o=0; $o < count($auto_p_smg); $o++) { ?>
        <h2><?= $auto_p_smg[$o]['name']; ?></h2>
        <p><strong>Type: </strong><?= $auto_p_smg[$i]['type']; ?></p>
        <p><strong>Used by: </strong><?= $auto_p_smg[$i]['user']; ?></p>
        <p><strong>Manufactured by: </strong><?= $auto_p_smg[$i]['manufacturer']; ?></p>
        <p><strong>First manufactured in: </strong><?= $auto_p_smg[$i]['year']; ?></p>
        <p><strong>Used ammo: </strong><?= $auto_p_smg[$i]['ammo']; ?></p>
        <?php 
    }
    ?>
    <hr>
    <h2>Vehicles:</h2>
    <?php 
    for ($p=0; $p < count($vehicles); $p++) { ?>
        <h2><?= $vehicles[$p]['name']; ?></h2>
        <p><strong>Type: </strong><?= $vehicles[$i]['type']; ?></p>
        <?php 
    }
    ?>
</body>
</html>