<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        #container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            padding: 30px;
            text-align: center;
        }

        h1 {
            font-size: 48px;
            color: #E13300;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin-bottom: 20px;
            color: #555;
        }

        a.btn-home {
            display: inline-block;
            padding: 12px 25px;
            font-size: 18px;
            color: #fff;
            background-color: #007bff;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        a.btn-home:hover {
            background-color: #0056b3;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 36px;
            }

            p {
                font-size: 16px;
            }

            a.btn-home {
                font-size: 16px;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>404</h1>
        <p><?php echo $message; ?></p>
        <a href="/" class="btn-home">Back to Home</a>
    </div>
</body>
</html>
