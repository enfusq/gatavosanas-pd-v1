<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    
</head>

<body>
    <a href="index.php">Go back</a>
    <?php include "./form.php"?>

    <?php 
    $persons = [
        1 => 'Aivars Trumars',
        2 => 'Anna Proņina',
        3 => 'Dāvis Krišs Ozoliņš'
    ];

    echo "<ul>";
        foreach ($persons as $person) {
            echo "<li>$person</li>";
        };
    echo "</ul>"
    ?>
    
</body>

</html>