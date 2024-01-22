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
        //List of Variables, Arrays, and Booleans
        $greeting = "Hello";
        $name = "Dark Matter";
        $read = false;
        $books = [
            "Do Andriods Dream of Electric Sheep",
            "The Lanfoliers",
            "Hail Mary"
        ];

        //Conditional Statement to test if/else statement
        if($read) {
            $message = "You have finished reading $name";
        } 
        else {
            $message = "You have not finished reading $name";
        }
    ?>
    
    <h1> 
        <!-- Echoing short-form vs long-form -->
        <?= $message; ?>
        <?php
            echo $name; 
        ?>
    </h1>

    <ul>
        <?php foreach($books as $book) : ?>
            <li><?= $book; ?></li>
        <?php endforeach; ?>
    </ul>
    <p>
        <?= $books[0]; ?>
    </p>

</body>
</html>