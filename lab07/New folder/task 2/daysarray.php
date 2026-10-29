<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Variables, Arrays and Operators</title>
</head>
<body>
    <h1>PHP Variables, Arrays and Operators</h1>

    <?php
    // Declare an array containing the days of the week in English
    $days_en = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

    // Output the days in English
    echo "<p>The days of the week in English are:<br>";
    echo implode(", ", $days_en) . ".</p>";
    // Declare an array containing the days of the week in English
    $days_en = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

    // Output the days in English
    echo "<p>The days of the week in French are:<br>";
    echo implode(", ", $days_en) . ".</p>";
    ?>

</body>
</html>