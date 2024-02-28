<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #fafafa;
            font-family: Arial, sans-serif;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            width: 400px;
            border: 1px solid #dbdbdb;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .card-header {
            padding: 20px;
            border-bottom: 1px solid #dbdbdb;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #dbdbdb;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #3897f0;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3578e5;
        }

        .signup-link {
            text-align: center;
            font-size: 14px;
        }

        .signup-link a {
            color: #3897f0;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">Halaman Login</div>
            <div class="card-body">
                <form action="proses_login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login">
                    </div>
                </form>
                <div class="signup-link">
                    Tidak memiliki akun? <a href="register.php">Daftar</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
