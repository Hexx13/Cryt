<!DOCTYPE html>
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

    <div class="container">
        <div class="row">
            <div class = "game">
                <h1><?php echo $game['name']; ?></h1>
                <h2><?php echo $game['price']; ?></h2>
                <p><?php echo $game['about'] ?></p>
            </div>
            <?php
            foreach ($game as $gaming) {
                echo '<div class="col-lg-4">';
                echo '<h2>';
                echo $gaming;
                echo '</h2>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

</main>
<?php
require 'php/Layout/Footer.php';
?>
</html>