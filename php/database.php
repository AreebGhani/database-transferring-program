<?php

session_start();

extract($_POST);

$connect1 = mysqli_connect($Server1, $User1, $Password1, $Database1);

if ($connect1){
    
    $message = 'Database No.1 Connected Successfully . . . ! !';

    $connect2 = mysqli_connect($Server2, $User2, $Password2, $Database2);

    if ($connect2){

        $_SESSION['Server1'] = $Server1;
        $_SESSION['User1'] = $User1;
        $_SESSION['Password1'] = $Password1;
        $_SESSION['Database1'] = $Database1;
        $_SESSION['Table1'] = $Table1;
        
        $_SESSION['Server2'] = $Server2;
        $_SESSION['User2'] = $User2;
        $_SESSION['Password2'] = $Password2;
        $_SESSION['Database2'] = $Database2;
        $_SESSION['Table2'] = $Table2;

        $_SESSION['Column1'] = $Column1;
        $_SESSION['Column2'] = $Column2;
        $_SESSION['Column3'] = $Column3;
        $_SESSION['Column4'] = $Column4;
        $_SESSION['Column5'] = $Column5;

        $_SESSION['getdata'] = "getdata";
    
        $message = 'Databases Connected Successfully . . . ! !';

        header("location:../index.html?connectmessage=$message");
    
    } else {
    
        $message = "Database No.2 Can't Connected . . . ! !";

        header("location:../index.html?notconnectonemessage=$message");
    
    };

} else {

    $message = "Databases Can't Connected . . . ! !";

    header("location:../index.html?notconnectbothmessage=$message");

};



?>