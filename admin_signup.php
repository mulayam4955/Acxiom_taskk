<html>
<head>
    <title>Sign Up Page</title>
    <style>
        body {
    background-color: #add8e6;
    font-family: Arial, sans-serif;
    padding: 20px;
}

h1 {
    color: #333;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
}

p {
    margin-bottom: 10px;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

    </style>
</head>
<body>
    <h1>Sign Up Page</h1>
    <form action="submit.php" method="post">
        <p>Name: <input type="text" name="name" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <p>Password: <input type="password" name="password" required></p>
        <p>Category: 
            <select name="category" required>
                <option value="catering">Drop Down</option>
                <option value="catering">Catering</option>
                <option value="florish">Florish</option>
                <option value="decoration">Decoration</option>
                <option value="lighting">Lighting</option>
            </select>
        </p>
        <p><input type="submit" value="Sign Up"></p>
    </form>
</body>
</html>