<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 40px;
            text-align: center;
        }
        .prime{
            background-color: yellow;
        }
    </style>

</head>

<body>
    
    <!--Überschrift-->
    <h1>Hundert Zahlen</h1>

    <?php

        function isPrime($num) {
            if ($num <= 1) {
                return false;
            }
            
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    return false;
                }
            }

            return true;
        }

    ?>

    <table>

        <tbody>
            <!--php code-->
            <?php
                for($i = 1; $i <= 100; $i++){

                    if($i % 10 == 1){
                        echo "<tr>";
                    }

                    if(isPrime($i)){
                        echo "<td class=\"prime\">", $i , "</td>";
                    }else{
                        echo "<td>", $i, "</td>";
                    }
                    
                    if($i % 10 == 0){
                        echo "</tr>";
                    }
                    
                }
            ?>
        </tbody>
        
    </table>
    
</body>
</html>