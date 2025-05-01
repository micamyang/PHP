<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Numbers Finder - Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-image: url(https://i.pinimg.com/736x/79/4d/9b/794d9b56403e71da8db07e34769bb1bf.jpg);
        }
        .result {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Prime Numbers Result</h1>
    <div class="result">
        <?php
        function isPrime($num) {
            if ($num <= 1) return false;
            if ($num <= 3) return true;
            if ($num % 2 == 0 || $num % 3 == 0) return false;
            for ($i = 5; $i * $i <= $num; $i += 6) {
                if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
            }
            return true;
        }

        function findPrimesInRange($start, $end) {
            $primes = [];
            for ($i = $start; $i <= $end; $i++) {
                if (isPrime($i)) {
                    $primes[] = $i;
                }
            }
            return $primes;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $start = intval($_POST['start']);
            $end = intval($_POST['end']);

            if ($start > $end) {
                echo "<p>Invalid range: Start value must be less than or equal to End value.</p>";
            } else {
                $primes = findPrimesInRange($start, $end);
                if (empty($primes)) {
                    echo "<p>No prime numbers found within the range ($start to $end).</p>";
                } else {
                    echo "<p>Prime numbers within the range ($start to $end): " . implode(", ", $primes) . "</p>";
                }
            }
        } else {
            echo "<p>Invalid request method. Please submit the form.</p>";
        }
        ?>
    </div>
    <a href="201902014_prime.html"><br><br>Go Back</a>
</body>
</html>
