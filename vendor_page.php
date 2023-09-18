<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: lightblue;
  }
  .header {
    background-color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .tab {
    margin: 10px;
    padding: 10px;
    border: 1px solid blue;
    cursor: pointer;
  }
  .tab:hover {
    background-color: blue;
    color: white;
  }
  .vendor {
    background-color: blue;
    color: white;
    margin: 20px;
    width: 200px;
    height: 150px;
    padding: 10px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
  }
  .vendor button {
    width: 100px;
    height: 30px;
    background-color: white;
    color: blue;
    border-radius: 10px;
  }
</style>
</head>
<body>
<div class="header">
<div class="tabs">
<div class="tab">Home</div>
<div class="tab">Vendor</div>
<div class="tab">Florist</div>
</div> 
<br>
<button class="tab">LogOut</button>
</div>
<div class="vendors">
<div class="vendor">
<h3>Vendor 1</h3>
<p>Phone: +91-1234567890</p>
<p>Email: vendor1@gmail.com</p>
<button>Shop Item</button>
</div>
<div class="vendor">
<h3>Vendor 2</h3>
<p>Phone: +91-2345678901</p>
<p>Email: vendor2@gmail.com</p>
<button>Shop Item</button>
</div>
<div class="vendor">
<h3>Vendor 3</h3>
<p>Phone: +91-3456789012</p>
<p>Email: vendor3@gmail.com</p>
<button>Shop Item</button>
</div>
<div class="vendor">
<h3>Vendor 4</h3>
<p>Phone: +91-4567890123</p>
<p>Email: vendor4@gmail.com</p>
<button>Shop Item</button>
</div>
</div>
</body>
</html>