<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculate Array Statistics</h1>
        <form method="POST" action="">
            <label for="inputArray">Enter a comma-separated array of numbers:</label>
            <input type="text" id="inputArray" name="inputArray" required>

            <button type="submit" name="calculate">Calculate</button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            $inputArray = $_POST['inputArray'];

            // Convert the comma-separated string to an array
            $numbers = explode(',', $inputArray);

            // Remove any whitespace and empty elements
            $numbers = array_map('trim', $numbers);
            $numbers = array_filter($numbers);

            if (!empty($numbers)) {
                $sum = array_sum($numbers);
                $count = count($numbers);
                $average = $sum / $count;
                $min = min($numbers);
                $max = max($numbers);

                echo '<h2>Results:</h2>';
                echo 'Sum: ' . $sum . '<br>';
                echo 'Average: ' . $average . '<br>';
                echo 'Min: ' . $min . '<br>';
                echo 'Max: ' . $max . '<br>';
            } else {
                echo '<h2>Please enter a valid array of numbers.</h2>';
            }
        }
        ?>
    </div>
</body>
</html>
