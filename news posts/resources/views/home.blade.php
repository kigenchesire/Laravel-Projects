<!-- blade_template.blade.php -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset(' css/style.css') }}" rel="stylesheet"> <!-- Note the corrected link -->
    <title>Document</title>
</head>
<style>
    /* style.css */

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    background-color: #fff;
    margin-top: 20px;
}

h2 {
    margin-bottom: 10px;
}

input {
    display: block;
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
}

button {
    background-color: #4CAF50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}

</style>
<body>
    @auth
    <p>You are logged in</p>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout </button>
    </form>
    @else
    <div class="container">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Name">
            <input type="password" name="password" placeholder="Password">
            <input type="email" name="email" placeholder="Email">
            <button>Register</button>
        </form>
    </div>
    <div class="container">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="email" name="loginemail" placeholder="Email">
            <input type="password" name="loginpassword" placeholder="Password">
            <button>Login</button>
        </form>
    </div>
    @endauth
</body>
</html>
