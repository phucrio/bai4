<!DOCTYPE html>
<html>
<head>
    <style>
        input[type="number"] {
            width: 40px;
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 5px;
            text-align: center;
        }

        button {
            background-color: #4CAF50;
            width: auto;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div style="display: flex;">
        <div class='nhapmatrix' style='display:block;width: 200px;'>
        <p>Calculator for 3x3 Matrices</p>
            <form method="POST" action="" >
                <h2>Matrix A:</h2>
                <table>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < 3; $j++) {
                            echo '<td><input type="number" name="matrixA[' . $i . '][' . $j . ']" required></td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </table>

                <h2>Matrix B:</h2>
                <table>
                    <?php
                    for ($i = 0; $i < 3; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j < 3; $j++) {
                            echo '<td><input type="number" name="matrixB[' . $i . '][' . $j . ']" required></td>';
                        }
                        echo '</tr>';
                    }
                    ?>
                </table><br>

                <button type="submit" name="calculate" >Calculate</button>
            </form>
        </div>
       
        <div class='ketquamatrix' style='display:block;margin-left: 200px;'>
            <?php
                require_once('libs/math.php');
                if (isset($_POST['calculate'])) {
                    $matrixA = $_POST['matrixA'];
                    $matrixB = $_POST['matrixB'];
                    $congmt = addMatrices($matrixA,$matrixB);
                    $trumt = subtractMatrices($matrixA,$matrixB);
                    $nhanmt = multiplyMatrices($matrixA,$matrixB);
                    echo '<h2>Kết quả:</h2>';
                    echo '<h3>Ma trận A cộng  ma trận B:</h3>';
                    inMatrix($congmt);
                

                    echo '<h3>Ma trận A trừ  ma trận B:</h3>';
                    inMatrix($trumt);

                    echo '<h3>Ma trận A nhân  ma trận B:</h3>';
                    inMatrix($nhanmt);
                }
            
            ?>
        </div>
    </div>
    
    
    
</body>
</html>
