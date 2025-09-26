<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td{
            width: 60px;
            height: 6-px;
        }
        .white {
            background-color: white;
        }
        .black{
            background-color: black;
        }
    </style>
</head>
<body>
    <?php
        echo"<table border='1'>";

        for ($row = 1; $row <= 8; $row++){
            echo "<tr>";
            for ($col = 1; $col <=8; $col++){
                $class = ($row + $col) % 2 == 0 ? "white" : "black";
                echo "<td class='$class'<>/td>";
            }
            echo "</tr>";
        }
        echo "</tables>"; 
    ?>
</body>
</html>