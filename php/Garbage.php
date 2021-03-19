<?php
//$servername = 'localhost';
//$username = 'root';
//$password = 'BartholomewOobleck';
define ('dbuser', 'root');
define ('dbpass', 'password');
define('dbserver', 'localhost');
define('dbname', 'mydb');
//make connection
$link = mysqli_connect(dbserver,
    dbuser,
    dbpass,
dbname);
//check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


echo"<mydb>";
$LastID = $link->query("SELECT account_ID FROM account ORDER BY account_ID DESC LIMIT 1");
while($ID = $LastID->fetch_assoc()) {
    echo $ID["account_ID"];
}
//$sql = "Insert into game Values ($name,$pass,null,$email,$firstname,$lastname,$ID+1)";
//$sql = "SELECT game_ID, game_Name, game_Desc FROM game order by rand() limit 4";
//$result = $link->query($sql);
//while($row = $result->fetch_assoc()) {
//    echo "  ,   " . $row["game_ID"]. "  ,   " . $row["game_Name"]. "   ,  " . $row["game_Desc"]. "    ,  ";
//}



//try {

//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$result = $pdo->
    //echo result;
//    echo 'Connected Successfully';
//}
//catch(PDOException $e){
 //   echo "connection failed";
//}
