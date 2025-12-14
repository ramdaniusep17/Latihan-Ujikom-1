<!DOCTYPE html>
<html>
<head>
    <title>Form Login - Web Compro</title>
    <style>
        body {
            font-family: sans-serif;
            background: #d5f0f3;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .tulisan_login {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            color: #333;
        }

        .kotak_login {
            width: 350px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 30px 20px;
        }

        label {
            font-size: 12pt;
            font-weight: bold;
            color: #333;
        }

        .form_login {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 12pt;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .tombol_login {
            background: #46de4b;
            color: white;
            font-size: 12pt;
            font-weight: bold;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .tombol_login:hover {
            background: #3cb943;
        }

        .link {
            color: #232323;
            text-decoration: none;
            font-size: 10pt;
        }

        .link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="kotak_login">
        <h3 class="tulisan_login">Silahkan Login</h3>
        <form action="" method="POST">
            @csrf

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" class="form_login" placeholder="Masukkan username .." required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" class="form_login" placeholder="Masukkan password .." required>

            <input type="submit" class="tombol_login" value="LOGIN">

            <br />
        </form>
    </div>
</body>
</html>
