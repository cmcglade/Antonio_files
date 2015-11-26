¥	Gather the following information into a form:
¥	first name, last name, postal code, mother's maiden name, favourite colour
¥	Have the form generate this paragraph:

Hi Christine!  I find it interesting to think about how our identity might change if we had our mother's name.  If your name wasn't Christine McGlade, but instead it was Christine Quinn, would your favourite colour still be blue?  Would you still live in M6G?

¥	Note that the sentence must use proper capitalization as shown above no matter what the user types into the form.




<!Doctype html> 

<html> 
    
<head>
    
    <title>Forms Assignment</title>
    
      </head> 
    <?php
    $color = array("red"); 
?>
    <body>
        Hi echo $color Christine!  I find it interesting to think about how our identity might change if we had our mother's name.  If your name wasn't Christine McGlade, but instead it was Christine Quinn, would your favourite colour still be blue?  Would you still live in M6G?
        
        <?php 
    
    </body>
</html>