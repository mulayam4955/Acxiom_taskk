<!DOCTYPE html>
<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: white;
    color: blue;
  }
  .nav-bar {
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .nav-button {
    margin: 10px;
    padding: 10px;
    border: 1px solid blue;
    cursor: pointer;
  }
  .nav-button:hover {
    background-color: blue;
    color: white;
  }
  .vendor {
    text-align: center;
    font-size: 30px;
  }
  .product {
    background-color: blue;
    color: white;
    margin: 20px;
    width: 150px;
    height: 100px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
  }
  .product button {
    width: 100px;
    height: 30px;
    background-color: white;
    color: blue;
    border-radius: 10px;
  }
</style>
</head>
<body>
<div class="nav-bar">
<button class="nav-button">Home</button>
<button class="nav-button">LogOut</button>
</div>
<div class="vendor">
<h1>Vendor Name</h1>
</div>
<div class="products">
<div class="product">
<h3>Product 1</h3>
<p>Price: 10.00</p>
<button>Add to Cart</button>
</div>
<div class="product">
<h3>Product 2</h3>
<p>Price: 15.00</p>
<button>Add to Cart</button>
</div>
<div class="product">
<h3>Product 3</h3>
<p>Price: 20.00</p>
<button>Add to Cart</button>
</div>
<div class="product">
<h3>Product 4</h3>
<p>Price: 25.00</p>
<button>Add to Cart</button>
</div>
</div>
</body>
</html>
