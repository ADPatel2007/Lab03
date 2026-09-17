<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>table, th, td { border: 1px solid black; border-collapse: collapse; padding: 5px; text-align: center; }</style>
</head>
<body>
    <form method="POST">
        <label>Enter a number: <input type="number" name="num" min="1"></label>
        <input type="submit" value="Generate">
    </form><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["num"])) {
        $n = intval($_POST["num"]);
        echo "<table><tr><th>*</th>";
        for ($col = 1; $col <= $n; $col++) { echo "<th>$col</th>"; }
        echo "</tr>";

        for ($row = 1; $row <= $n; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $n; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>
