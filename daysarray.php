<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Days of the Week</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>
    
    <?php
    $days_english = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
    echo "<p>The days of the week in English are:<br>";
    echo implode(", ", $days_english) . ".</p>";
    
   
    $days_french = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");
    echo "<p>The days of the week in French are:<br>";
    echo implode(", ", $days_french) . ".</p>";
    ?>
</body>
</html>