<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caesar Cipher Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
            background-image: url(https://i.pinimg.com/736x/6e/e4/ef/6ee4ef5a04d35f25b5e263588c50653e.jpg);
            background-size: cover;
        }
        .result {
            background-color: lemonchiffon;
            padding: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <h1>Caesar Cipher Result</h1>
    <div class="result">
        <?php
        function caesarCipher($text, $shift, $operation) {
            $result = '';
            $shift = $operation === 'decode' ? 26 - $shift : $shift;

            foreach (str_split($text) as $char) {
                if (ctype_alpha($char)) {
                    $base = ctype_upper($char) ? 'A' : 'a';
                    $result .= chr(((ord($char) - ord($base) + $shift) % 26) + ord($base));
                } else {
                    $result .= $char; // Keep non-alphabetic characters unchanged
                }
            }
            return $result;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = $_POST['text'];
            $shift = intval($_POST['shift']);
            $operation = $_POST['operation'];

            $processedText = caesarCipher($text, $shift, $operation);

            echo "<p><strong>Original Text:</strong> " . htmlspecialchars($text) . "</p>";
            echo "<p><strong>Shift Value:</strong> $shift</p>";
            echo "<p><strong>Operation:</strong> " . ucfirst($operation) . "</p>";
            echo "<p><strong>Result:</strong> $processedText</p>";
        } else {
            echo "<p>Invalid request. Please submit the form.</p>";
        }
        ?>
    </div>
    <a href="201902014_cipher.html"><br><br>Go Back</a>
</body>
</html>
