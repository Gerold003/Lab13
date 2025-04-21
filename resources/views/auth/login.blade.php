<!-- filepath: /c:/xampp/htdocs/Lab13/resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic styling for the modal and form */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .modal {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .modal h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .modal form {
            display: flex;
            flex-direction: column;
        }
        .modal input {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .modal button {
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .modal button:hover {
            background-color: #0056b3;
        }
        .modal p {
            text-align: center;
            margin-top: 10px;
        }
        .modal a {
            color: #007bff;
            text-decoration: none;
        }
        .modal a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="modal">
        <h2>Login</h2>
        <form method="POST" action="/login">
            @csrf
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="/register">Register here</a></p>
    </div>
</body>
</html>