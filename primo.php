<?php 
    $frase = "Marco è un vero pusillanime";
    $utent = $_GET['name'];
    $sostituzione = str_replace($utent, "***", $frase)
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
    <form action="" method="get">
        <input type="text" name="name" id="name">
        <button>invio</button>
    </form>
    <h1>
        <? echo $frase ?>
    </h1>
    <div>
        la lunghezza della frase è: <?= strlen($frase) ?>
    </div>
    <h2>
        <?= $sostituzione?>
    </h2>
    <div>
        la lunghezza della frase con le sostituzioni è: <?= strlen($sostituzione) ?>
    </div>
</body>
</html>