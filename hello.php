<?php  


    // Echo to print something
    // echo : It is Php function to print string
    // Syntax: echo "<Message>";
   
    echo "<h2>Hello From PHP in Single Line </h2><br/>";                
    
    // Multiple line printing

    echo "Hello from php line 1 <br/> Hello from php line 2 <br/>";

    // Variable
    // Syntax $<variableName> = value;

    $a="Hello";   // String
    $b=2;         // Integer
    $c= false;      // Boolean
    $d= 2.23;      // Float

    echo "Value of a is : $a <br/>";
    echo "Value of b is : $b <br/>";                                         
    echo "Value of c is : $c <br/>";                                        
    echo "Value of d is : $d <br/>";

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);

    /* 
      IF Condition:(Syntax)

      if(condition){
        if condition true;
      }else{
        considition is false
      }
    */
    echo "<br/>";

     if($b==1){

        echo "Value of b  is 1 <br/>";

     }else{
        
        echo "Value of b  is  not 1 <br/>";
     }


     /*

        IF else ladder

        if(Condition1){
            Condition 1 true;   
        }elseif(Conditon2){
            Condition 2 true;
        }elseif(Condition3){
             Condition 3 true;
        }else{
             All Condition are false
        }

     */


     $grade = 67.35;

     echo "<br/>";
     if($grade>=90){
        echo "You got A+ <br/>";
     }elseif($grade>=70 && $grade<90){
        echo "You got B+ <br/>";
     }elseif($grade>=60 && $grade<70){
        echo "You got C";
     }else{
        echo "Fail <br/>";
     }


     /*
     switch(n){
           Case label1:
              labe1 is true;
              break;
           Case label2:
               label2 is true;
               break;
           Case label3:
               label3 is true;
               break;
           default;
              None of the case are true;

     }
     
     */

     $favColor= "Yellow";

     echo "<br/>";

     switch($favColor){
        case "yellow":
            echo "Yellow is your favourite color <br/>";
            break;
        case "Green":
            echo "Green is your favourite color <br/>";
            break;
        case "Blue":
            echo "Blue is your favourite color <br/>";
            break;
        default:
            echo "Color not matched <br/>";
     }
    
?>                                                                               