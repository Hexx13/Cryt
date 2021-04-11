<!DOCTYPE html>
<?php
session_start ();
if(!isset($_SESSION["login"]))

    header("location:login.php");
?>
<html lang="en">

<?php
require 'php/Layout/Header.php';
?>


<main>


    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <h1>Store Page</h1>
            </div>
        </div>
    </div>

   <!-- <div class="container2">
        <div class="row2">
            <div class = "game">
                <h1><?php /* echo $game['name']; */?></h1>
                <h2><?php /*echo $game['price']; */?></h2>
                <p><?php /*echo $game['about'] ?>*/ ?>
            </div>
        </div>
    </div> -->

//////////////////////////
    <?php

    /**
     * Function to query information based on
     * a parameter: in this case, location.
     *
     */

    if (isset($_POST['submit'])) {
        try {
            require "../config.php";
            require "../common.php";

            $connection = new PDO($dsn, $username, $password, $options);

            $sql = "SELECT *
    FROM users
    WHERE location = :location";

            $location = $_POST['location'];

            $statement = $connection->prepare($sql);
            $statement->bindParam(':location', $location, PDO::PARAM_STR);
            $statement->execute();

            $result = $statement->fetchAll();
        } catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
    }
    ?>
    <?php require "Layout/header.php"; ?>

    <?php
    if (isset($_POST['submit'])) {
        if ($result && $statement->rowCount() > 0) { ?>
            <h2>Results</h2>

            <table>
                <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Age</th>
                    <th>Location</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($result as $row) { ?>
                    <tr>
                        <td><?php echo escape($row["id"]); ?></td>
                        <td><?php echo escape($row["firstname"]); ?></td>
                        <td><?php echo escape($row["lastname"]); ?></td>
                        <td><?php echo escape($row["email"]); ?></td>
                        <td><?php echo escape($row["age"]); ?></td>
                        <td><?php echo escape($row["location"]); ?></td>
                        <td><?php echo escape($row["date"]); ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else { ?>
            > No results found for <?php echo escape($_POST['location']); ?>.
        <?php }
    } ?>

    <h2>Find user based on location</h2>

    <form method="post">
        <label for="location">Location</label>
        <input type="text" id="location" name="location">
        <input type="submit" name="submit" value="View Results">
    </form>

    <a href="index.php">Back to home</a>

    <?php require "templates/footer.php"; ?>
    ///////////////////////////////




   <?php  /*foreach ($game as $printgame) {
        echo '<div class ="container2">';
        echo '<div class ="row2">';
        echo '<div class="game">';
        echo '<h2>';
        echo $printgame;
        echo '</h2>';
        echo '</div>';
    }
   */ ?>



</main>
<?php
require 'php/Layout/Footer.php';
?>
</html>

