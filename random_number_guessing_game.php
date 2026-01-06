<?php
$min = 1;
$max = 10;
$random_number = rand($min, $max);
echo($random_number);

$users_number = $_GET["user_number"];

if ($random_number == $users_number){
    echo("you guessed right");
    print($random_number);
} else{
    echo("try agin");
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
    <form action="random_number_guessing_game.php" method="get">
        <label for="rand">select and number</label>
        <input type="number" name="user_number" placeholder="select a number" >
        <input type="submit" value="click me">
    </form>
</body>
</html>