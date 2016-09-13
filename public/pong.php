<?php
require_once "functions.php";
require_once "../Input.php";
function pageController()
{
    if (Input::has('counter')) {
        $data['counter'] = Input::get('counter');
        $data['status'] = Input::get('status');    
    } else {
        $data['counter'] = 0;
        $data['status'] = 'start game';
    }
    return $data;
}
extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Pong</title>
    </head>
    <body>
        <h3>Pong</h3>
        <form method="GET" action="ping.php">
            <input type="hidden" name="counter" value= <?= $counter + 1 ?>>
            <input type="hidden" name="status" value="hit">
            <button type="submit">HIT</button>
        </form>
        <form method="GET" action="ping.php">
            <input type="hidden" name="counter" value="0">
            <input type="hidden" name="status" value="miss">
            <button type="submit">MISS</button>
        </form>
        <?=$counter?> <?=$status?>
    </body>
</html>