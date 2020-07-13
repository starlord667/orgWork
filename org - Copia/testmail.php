<?php
    
    $GetParam = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    //variaveis do formulario
    $name = $GetParam['InputName'];
    $email = $GetParam['InputEmail'];
    $msg = $GetParam['Comment'];
    $type = gettext($GetParam['options']);

    
    // variables
    $to = "contato.fabioazevedo@gmail.com";
    $subject = $type . " from " . $name;
    $headers = "De: ". $email;

    // validate and send
    if($_POST['InputName'] == "" || $_POST['Comment'] == "" || $_POST['InputEmail'] == ""){
        
    }else{
        $msg .= "\n";
        $msg .= $headers;
        mail($email, $subject, $msg, $headers);
        
        //  var_dump($GetParam);
        //  echo $type;
    }    
    


    header('Location: /index.php');
?>4