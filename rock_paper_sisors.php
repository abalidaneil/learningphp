<?php
$min = 1;
$max = 3;

$player = $_GET["player_selection"] ;
$computer = rand($min, $max);

if ($player == $computer){
    $output = "draw";
} else {

    if ($player = 1 && $computer = 3){
        $output = "you won";
    } elseif ($player = 2 && $computer = 1){
        $output = "you won";
    } elseif ($player = 3 && $computer = 2){
        $output = "you won";
    }

    elseif ($computer = 1 && $player = 3){
        $output = "you lost";
    } elseif ($computer = 2 && $player = 1){
        $output = "you lost";
    } elseif ($computer = 3 && $player = 2){
        $output = "you lost";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="rock_paper_sisors.php" method="get">
        <input type="radio" name="player_selection" id="" value="1"> rock
        <input type="radio" name="player_selection" id="" value="2"> paper
        <input type="radio" name="player_selection" id="" value="3"> sisors

        <input type="submit" value="submit your response">
    </form>

    <?php echo($output) ?>
</body>
</html>

