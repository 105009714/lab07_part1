<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP Page</title>
</head>
<body>
    <h1>Welcome to PHP!</h1>
    
    <?php
    $marks = array(85, 85, 95);

    $marks[1] = 90;
    
    $average = ($marks[0] + $marks[1] + $marks[2]) / 3;
    
    if($average >= 50) {
        $result = "PASSED";
    } else {
        $result = "FAILED";
    }
    
    echo "<p>Average: $average - Result: $result</p>";
    ?>
</body>
</html>