<!DOCTYPE html>
<html>
<head>
    <h1> Welcome User </h1>
    <title>Welcome vendor</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        button {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            color: white;
            background-color: #007BFF;
        }
        button:hover {
            background-color: #0056b3;
        }
        p {
            margin: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            color: white;
            background-color: #007BFF;

        }
    </style>
</head>
<body>
    <p>Vender: 
        <select name="category" required>
            <option value="catering">Catering</option>
            <option value="florish">Florish</option>
            <option value="decoration">Decoration</option>
            <option value="lighting">Lighting</option>
        </select>
    </p>
    <button>Cart</button>
    <button>Guest List</button>
    <button>Order Status</button>
    <button>Logout</button>
</body>
</html>
