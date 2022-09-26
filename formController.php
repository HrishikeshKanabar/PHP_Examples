<?php 

    //array_key_exists example
    if(array_key_exists('sbt1', $_POST)) {
        submitButton($_POST["email"],$_POST["pass"]);
    }

    function submitButton($email,$pass){
        
        echo "Your email is: $email <br/>";
       
        echo "Your password is : $pass <br/>";
       
    }



?>