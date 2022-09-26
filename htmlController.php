<?php

        //array_key_exists example
        if(array_key_exists('btn1', $_POST)) {
            button1();
        }
        else if(array_key_exists('btn2', $_POST)) {
            button2();
        }

        // isset example
        if (isset($_POST['btn3'])) {
            myFunction();
         }

        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }
        function myFunction(){
            echo "This is Button3 that is selected";
        }
        
?>