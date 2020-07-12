<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    
    
    // variables
    $from = $_POST['InputEmail'];
    $to = "contato.fabioazevedo@gmail.com";
    $subject = "Comment Or Error from " . $_POST['InputName'];
    $message = $_POST['Comment'];
    $headers = "De:". $from;

    // validate and send
    if($_POST['InputName'] == "" || $_POST['Comment'] == "" || $_POST['InputEmail'] == ""){
        
    }else{
        mail($to, $subject, $message, $headers);
    }    
    


    header('Location: /index.php');
?>