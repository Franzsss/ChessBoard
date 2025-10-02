<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .chessboard{
            width: 320px;
            height: 320px;
            display: flex;
            flex-wrap: wrap;
            border: 2px solid black;
            align-items: center;
            text-align: center;
        }
        .square{
            width: 40px;
            height: 40px;
        }
        .black{
            background-color: black;
        }
        .white{
            background-color: white;
        }
    </style>
</head>
<body>
    <div class="chessboard">
        <?php
            for($row = 0; $row < 8; $row++){
                for($col = 0; $col < 8; $col++){
                    if(($row + $col) %2 == 0){
                        echo'<div class="square white"></div>';
                    }else{
                        echo '<div class="square black"></div>';
                    }
                }
            }
        ?>
    </div>
</body>
</html>