<!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
        }
        button {
            display: block;
            width: 200px;
            height: 50px;
            margin: 20px auto;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div id="nav-bar">
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="view-product.html">View Product</a></li>
            <li><a href="request-product.html">Request Product</a></li>
            <li><a href="product.html">Product</a></li>
            <li><a href="logout.html">LogOut</a></li>
        </ul>
    </div>
    <div id="shopping-cart">
        <h1>Shopping Cart</h1>
        <table>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><img src="product.jpg" alt="Product Image" width="100" height="100"></td>
                <td>Product Name</td>
                <td>$10.00</td>
                <td><input type="number" value="1" min="1" max="10"></td>
                <td>$10.00</td>
                <td><button onclick="removeItem()">Remove</button></td>
            </tr>
        </table>
        <p>Grand Total: $10.00</p>
        <button onclick="proceedToCheckout()">Proceed to CheckOut</button>

    </div>

    <!-- Add your JavaScript code here -->
    <script>

    </script>

</body>

</html>
