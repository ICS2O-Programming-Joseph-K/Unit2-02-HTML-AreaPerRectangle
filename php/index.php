<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area & Perimeter of a Rectangle in JS</title>
	</head>
	<body>
      <h1><?php echo 'Area & Perimeter of a Rectangle in JS'; ?></h1>
			<?php echo '<p>The dimensions of a rectangle are 5cm by 3cm</p>'; ?>
    <body>  
    <form method = "post">   
Width: <input type="number" name="width">      
Length: <input type="number" name="length"> <br>   
<input type = "submit" name = "submit" value="Calculate">   
</form>   
    </body>    
    <?php   
    if(isset($_POST['submit']))  
        {   
    $width = $_POST['width'];   
    $length = $_POST['length'];   
    $area = $width*$length;   
    echo "The area of a rectangle with $width x $length is $area";   
    }   
    ?>   
	</body>
</html>