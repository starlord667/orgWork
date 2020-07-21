<?php
    
    $GetParam = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //variaveis do formulario
    $name = $GetParam['InputName'];
    $email = $GetParam['InputEmail'];
    $msg = $GetParam['Comment'];
    $type = gettext($GetParam['options']);

    
    // variables
    $to = "support@orgwork.com.br";
    $subject = $type . " from " . $name;
    $headers = "De: ". $email;

    // validate and send
    if($_POST['InputName'] == "" || $_POST['Comment'] == "" || $_POST['InputEmail'] == ""){
        
    }else{
        $msg .= "\n";
        $msg .= $headers;
        mail($to, $subject, $msg, $headers);
        
        //  var_dump($GetParam);
        //  echo $type;
    }    
    


    header('Location: /index.php');
?>4