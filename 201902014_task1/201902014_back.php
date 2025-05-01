<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url(https://i.pinimg.com/736x/89/5d/42/895d42d225d023d947eaaf250086d351.jpg);
            background-size: cover;
            padding: 20px;
            color:lightcoral;
        }
        .response {
            background-color: #fff;
            color: black;
            border: 5px dashed palevioletred ;
            padding: 20px;
            margin: 20px 0;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Form Submission Response</h1>
    <div class="response">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name'] ?? 'Not Provided');
            $email = htmlspecialchars($_POST['email'] ?? 'Not Provided');
            $phone = htmlspecialchars($_POST['tel'] ?? 'Not Provided');
            $inquiry = htmlspecialchars($_POST['inquiry'] ?? 'Not Selected');
            $city = htmlspecialchars($_POST['city'] ?? 'Not Provided');
            $date = htmlspecialchars($_POST['date'] ?? 'Not Specified');
            $time = htmlspecialchars($_POST['time'] ?? 'Not Specified');
            $message = htmlspecialchars($_POST['message'] ?? 'No Message');

            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Email:</strong> $email</p>";
            echo "<p><strong>Phone Number:</strong> $phone</p>";
            echo "<p><strong>Inquiry Type:</strong> $inquiry</p>";
            echo "<p><strong>City:</strong> $city</p>";
            echo "<p><strong>Date:</strong> $date</p>";
            echo "<p><strong>Time:</strong> $time</p>";
            echo "<p><strong>Message:</strong> $message</p>";
        } else {
            echo "<p>Invalid request. Please submit the form.</p>";
        }
        ?>
    </div>
    <a href="201902014_hometown.html">Go Back</a>
</body>
</html>