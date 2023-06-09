<!DOCTYPE html>
<html>
<head>
    <title>Hash Generator</title>
    <style>
        * {
            text-align: center;
            font-family: 'Poppins', sans-serif;
            src: url('Poppins-Medium.ttf') format('truetype');
        }
        #send, #value {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Hash Generator</h1>
    <form method="POST" action="">
        <label>String you want to change to BCRYPT</label><br>
        <input type="text" name="value" id="value"><br>
        <input type="submit" id="send" value="Send">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $password = $_POST['value'];
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 15]);
        echo "Your hash:<br>" . $hash;
    }
    ?>
</body>
</html>
