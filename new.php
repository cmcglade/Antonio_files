<!Doctype html>

<html>

<head> 

<title>yoooooooooooo</title>




</head>

<body>



<h1>This is a php command</h1>


<p> 
<?php /*echo "Hello this is the php echo command<br>"; ?>
    phpinfo();>  
    
    <?php echo "hello" . "class"; ?>*/    
    $var_a = 1; 
    $var_b = 2; 
    $var_c =  $var_a + $var_b; 
    
    echo $var_c; 

    ?> 

    </p> 

<p> 

<?php> 

/*$greeting = "hello"<br>"; 
echo $greeting; */

$beginning = "This";
$end = "Magic";
$sentence = $greeting . $send; 
echo $sentence;
    

    ?> 
    </p> 

<?php
$firstname = "Antonio"
echo ucfirst($firstName);


$sentence = "There is tweet";
$found = strstr($sentence, "tweet");
echo $found; 

echo str_replace("Tweet", "Post", $sentence);

<p>this is intergers and strings</p> 
<?php>
    $varA = 1 + "3 houses";
    echo $varA;
    ?> 
    
<p>this is rounding up and down</p>
    
<?php
$varb = 12.138;
echo round  ($varb, 2);

?> 

    <p>this is arrays: dont forget, computers start indexing arrays at zero!</p>
    <?php

    $fruit =array(apples", "oranges", "bananas", "cherries"); 
    echo $fruit[3};
    $fruit[4] = "strawberries";
    echo $fruit[4];
    print_r($fruit);
    
    $various = array ("turnip", 12, "applies", array("veggies", "fruits", "meats", "fishes")); 
        echo $various[2];
      $various[2] = "aubergine";
      echo $various; 
    print_r($various);
    ?> 
    
    <p>short form version of arrays after php 5.4</p> 
    
    <?php
    $various = ["turnips",12,"potato"]; 
    echo "$variou[2]<br>";
    print_r($various); 
    
    $various_b =array("turnips, 12, "potato"); 

    ?> 

    <p>associate arrays:name value pairs</p>
    <?php
$various = array("first_name" => "donald", ) 
    
    ?> 
</body>
</html>