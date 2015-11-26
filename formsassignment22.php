<!doctype html=en>
<html>
<head>
	
	<title><?php echo $var; ?></title>
	
</head>
<body>

<?php 

	$color = array ("Christine", "Christine McGlade", "Christine Quinn", "blue", "M6G"); 
?> 


	<p> Hi <?php echo $color[0];?>! I find it interesting to think about how our 
	identity might change if we had our mother's name. If your name 
	wasn't <?php echo $color[1];?>, but instead it was <?php echo $color[2];?>,
	 would your favourite colour still be <?php echo $color[3];?>? Would you 
	still live in <?php echo $color[4];?> ? </p>

    
    
    <?php 

	$color = array ("Christine", "Christine McGlade", "Christine Quinn", "blue", "M6G"); 
?>  
    
    echo
    "<li>$Color[0]</li>
    <li>$Color[1]</li>
    <li>$Color[4]</li>
    <li>$color[2]</li>
    <li>$color[3]</li>
    
    ?> 
    <form method='POST'
          <h1>Please Input your first name</h1> 
         <label>Name</label><input type="text" name="name"/> 
        <label>Full Name</label><input type="text" name="name"/> 
        <label>Postal Code</label><input type="text" name="name"/> 
        <label>Mothers Name</label><input type="text" name="name"/> 
        <label>color</label><input type="text" name="name"/> 
    
    <input type="submit" value="submit name"/> 
</form>

<?php 

$var= $_POST["name"];
		$varb= $_POST["full_name"];
		$varc= $_POST["postal_code"];
        $var= $_POST["name"];
		$varb= $_POST["last_name"];
		$varc= $_POST["postal_code"];
		
		echo "<h4>Hello $var $varb, your postal code is $varc. </h4>";
	?>
     
              <?  
		
		echo "<h4>Hello $var $varb, your postal code is $varc. </h4>";
	?>
     
              ?> 
</body>
</html>