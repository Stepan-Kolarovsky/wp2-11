<?php
require_once('functions.php');
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
<?php
$fighters[0]['name'] = 'Horác';
$fighters[0]['hp'] = 100;
$fighters[0]['attack'] = 20;
$fighters[1]['name'] = 'Horác1'; 
$fighters[1]['hp'] = 30;
$fighters[1]['attack'] = 35;
$fighters[2]['name'] = 'Horác2';
$fighters[2]['hp'] = 120;
$fighters[2]['attack'] = 30;
$fighters[3]['name'] = 'Horác3'; 
$fighters[3]['hp'] = 130;
$fighters[3]['attack'] = 25;
$fighters[4]['name'] = 'Horác4';
$fighters[4]['hp'] = 140;
$fighters[4]['attack'] = 20;
$fighters[5]['name'] = 'Horác5'; 
$fighters[5]['hp'] = 150;
$fighters[5]['attack'] = 15;
$fighters[6]['name'] = 'Horác6';
$fighters[6]['hp'] = 160;
$fighters[6]['attack'] = 10;
$fighters[7]['name'] = 'Horác7'; 
$fighters[7]['hp'] = 170;
$fighters[7]['attack'] = 5;

$winner1 = fight($fighters[0], $fighters[2]);
echo "Vítězem prvního zápasu je" ." ". $winner1 . " s " . $winner1['HP'];

?> 

  
</body>
</html>