<html>
<head>
    <title>Flowchart Example</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f0f0f0;
}

div {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
}

h1 {
    color: #333;
}

p {
    color: #666;
}

a {
    display: inline-block;
    margin-top: 10px;
    padding: 10px 20px;
    color: #0066cc;
    text-decoration: none;
    border-radius: 5px;
    border: 1px solid #0066cc;
}

a:hover {
    background-color: #0066cc;
    color: #fff;
}

    </style>
</head>
<body>
    <div id="home">
        <h1>Home</h1>
        <p></p>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#logout">Log Out</a>
    </div>
    <div id="membership">
        <h1>Membership</h1>
        <p></p>
        <a href="#add">Add</a>
        <a href="#update">Update</a>
        <a href="#home">Home</a>
    </div>
    <div id="user-management">
        <h1>User Management</h1>
        <p>Here you can manage other users.</p>
        <a href="#add">Add</a>
        <a href="#update">Update</a>
        <a href="#home">Home</a>
    </div>
    <div id="add">
        <h1>Add</h1>
        <p></p>
        <form action="#" method="post">
            <!-- Add your form elements here -->
        </form>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#home">Home</a>
    </div>
    <div id="update">
        <h1>Update</h1>
        <p></p>
        <form action="#" method="post">
            <!-- Add your form elements here -->
        </form>
        <a href="#membership">Membership</a>
        <a href="#user-management">User Management</a>
        <a href="#home">Home</a>
    </div>
    <div id="logout">
        <h1>Log Out</h1>
        <p></p>
        <a href="#home">Home</a>
    </div>

</body>

</html>