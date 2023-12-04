<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image:url(bg.png);
            background-size:cover;
        }
        .container {
            height: 90vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image:url(bg.png);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            flex-direction: column;
        }
        .foto img {
            width: 80px; 
            margin-bottom: 10px;
        }
        h1 {
            color: wheat;
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:hover {
            background-color: yellowgreen;
            border-radius: 5px;
        }
    </style>

</head>
<body>
    <div class="container">
    <div class="foto"><img src=""><h1>Selamat Datang FAJAR GANTENG</h1></div>
    <a href="login.php">Logout</a>
    </div>
</body>
</html>