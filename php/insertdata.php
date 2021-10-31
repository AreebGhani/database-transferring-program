<?php

session_start();

$connect1 = mysqli_connect($_SESSION['Server1'], $_SESSION['User1'], $_SESSION['Password1']);

$connect2 = mysqli_connect($_SESSION['Server2'], $_SESSION['User2'], $_SESSION['Password2']);

mysqli_select_db($connect1, $_SESSION['Database1']);

mysqli_select_db($connect2, $_SESSION['Database2']);

$query1 = mysqli_query($connect1, "SHOW TABLES");

$tables = mysqli_fetch_array($query1);

foreach($tables as $table){

    $tablequery = "SHOW CREATE TABLE $table";

    $tablestruture = mysqli_query($connect1, $tablequery);

    $tableinfo = mysqli_fetch_array($tablestruture);

    mysqli_query($connect2, $tableinfo[1]);

    $result = mysqli_query($connect1, "SELECT * FROM $table");

    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){

       mysqli_query($connect2, "INSERT INTO $table (".implode(", ",array_keys($row)).") VALUES ('".implode("', '",array_values($row))."')");

    }

}

mysqli_close($connect1);
mysqli_close($connect2);

if($result){

  $message = "Data Inserted in New Table Successfully . . . !!";

  header("location:../index.html?insertdatamessage=$message");

} else {

  $message = "Data Can't Inserted in New Table . . . !!";

  header("location:../index.html?insertdatamessage=$message");

};

session_destroy();

?>