<!Doctype html> 

<html> 
    
<head>
    <meta charset="utf-8">
    <title>Array Functions</title>
    
      </head> 
<body> 
    
    
    
    <?php

    $names1 = array("Salima","Antonio","Krystal");
    $names2 = array("Odelia", "Alejandro","Jon","Aline");

    $a = count($names1);
    $b = count($names2); 

    $a = 10;
    $b = 6; 


    if ($a > $b)
           echo "If a is greater than b<br>"; 
        

        elseif ($a == $b){
            
            echo "they are the same <br>";
        
    }

else {
    
    echo "oops, a is not greater than b <br>"; 
}
    ?> 
    
    
    </body>
</html> 