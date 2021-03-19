<?php
//$servername = 'localhost';
//$username = 'root';
define ('dbuser', 'root');
define ('dbpass', 'password');
define('dbserver', 'localhost');
define('dbname', 'mydb');
//make connection
$link = mysqli_connect(dbserver,
    dbuser,
    dbpass,
dbname);
//check connection/
//if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
//    exit();
//}


//echo"<mydb>";
//$LastID = $link->query("SELECT account_ID FROM account ORDER BY account_ID DESC LIMIT 1");
//while($ID = $LastID->fetch_assoc()) {
//    echo $ID["account_ID"];
//}


//$sql = "Insert into game Values ($name,$pass,null,$email,$firstname,$lastname,$ID+1)";
$account = "SELECT * FROM account  LIMIT 1";
$wallet = "SELECT * FROM wallet  LIMIT 1";
$game = "SELECT * FROM game  LIMIT 1";
$transaction= "SELECT * FROM transaction LIMIT 1";
$library = "SELECT * FROM library LIMIT 1";
$result = $link->query($account);
while($row = $result->fetch_assoc()) {
    echo "ACCOUNT  ID  " . $row["account_ID"]. "  isAdmin   " . $row["isAdmin"]. "   account_username  " . $row["account_username"]. "    account_Password  " . $row["account_Password"]. "    email_Address  " .$row["email_Address"]. "    firstName  ". $row["firstName"]. "    lastName  ".$row["lastName"]. "    Wallet_wallet_ID  ".$row["Wallet_wallet_ID"]. "******* ".PHP_EOL;
}
?>
<br>
<?php

$result2 = $link->query($wallet);
while($row = $result2->fetch_assoc()) {
    echo "wallet_ID" . $row["wallet_ID"]. "  wallet_Balance   " . $row["wallet_Balance"]. "******* ".PHP_EOL;
}
?>
    <br>
<?php
$result3 = $link->query($game);
while($row = $result3->fetch_assoc()) {
    echo "game_ID   " . $row["game_ID"]. "  game_Price   " . $row["game_Price"]. "  game_Name   " . $row["game_Name"]. "  game_Desc   " . $row["game_Desc"]. "  game_Price   " . $row["game_Price"]. "game_Sale ".$row["game_Sale"]. "******* ".PHP_EOL;
}
?>
    <br>
<?php
$result4 = $link->query($library);
while($row = $result4->fetch_assoc()) {
    echo "LIBRARY game_Owned  " . $row["game_Owned"]. "  Account_account_ID   " . $row["Account_account_ID"]. "  Account_isAdmin   " . $row["Account_isAdmin"]. "******* ".PHP_EOL;
}
?>
    <br>
<?php
$result5 = $link->query($transaction);
while($row = $result5->fetch_assoc()) {
    echo "TRANSACTION transaction_ID  " . $row["transaction_ID"]. "  dateTime   " . $row["dateTime"]. "  transaction_Amount   " . $row["transaction_Amount"]. "  Wallet_wallet_ID   " . $row["Wallet_wallet_ID"]. "******* ".PHP_EOL;
}

//try {

//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$result = $pdo->
    //echo result;
//    echo 'Connected Successfully';
//}
//catch(PDOException $e){
 //   echo "connection failed";
//}




















// Gets last used PK

//include "php/IDManager.php";
//$banana=new IDManager();
//$id = $banana ->generateID('account_ID', 'account');
//echo $id;