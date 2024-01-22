<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>

 
    <?php 
        $greeting = "Hello";
        $name = "Dark Matter";
        $read = false;

        if($read) {
            $message = "You have finished reading $name";
        } 
        else {
            $message = "You have not finished reading $name";
        }
    ?>
    <h1> 
        <?php echo $message; ?>"
        
    </h1>


</body>
</html>