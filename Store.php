<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">

<?php
require 'php/Layout/Header.php';
?>


<main>
    <?php
    $game = array(
            'name' => 'beans',
            'price' => 'pog beans',
            'about' => 'Egins beans',
    );
    ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Store Page</h1>
            </div>
        </div>
    </div>

    <div class="container2">
        <div class="row2">
            <div class = "game">
                <h1><?php echo $game['name']; ?></h1>
                <h2><?php echo $game['price']; ?></h2>
                <p><?php echo $game['about'] ?></p>
            </div>
        </div>
    </div>
    <?php
    foreach ($game as $printgame) {
        echo '<div class ="container2">';
        echo '<div class ="row2">';
        echo '<div class="game">';
        echo '<h2>';
        echo $printgame;
        echo '</h2>';
        echo '</div>';
    }
    ?>

</main>
<?php
require 'php/Layout/Footer.php';
?>
</html>

