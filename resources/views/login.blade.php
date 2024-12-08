<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: black;
    color: white;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    text-align: center;
}

h1 {
    color: #0066cc;
}

form {
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin: 20px 0;
}

label {
    font-weight: bold;
}

input {
    padding: 10px;
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    padding: 10px 20px;
    border: none;
    background-color: #0066cc;
    color: white;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #004999;
}

.btn {
    display: inline-block;
    margin: 10px 5px;
    padding: 10px 20px;
    background-color: #0066cc;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #004999;
}

    </style>
</head>
<body>
    <div class="form-container">
        <form action="/login" method="POST">
            @csrf
            <h2>Manjing Dipit Wkwk</h2>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <a href="/" class="btn back-btn">Kembali</a>
    </div>
</body>

</html>