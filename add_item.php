<html>
<head>
<style>
  body {
    font-family: Arial, sans-serif;
  }
  .top-bar {
    background-color: blue;
    color: white;
    padding: 10px;
    text-align: center;
  }
  .tab {
    display: inline-block;
    margin: 10px;
    padding: 10px;
    border: 1px solid blue;
    cursor: pointer;
  }
  .tab:hover {
    background-color: blue;
    color: white;
  }
  .form {
    margin: 20px;
    width: 300px;
  }
  .form input[type=text], .form input[type=file], .form input[type=number] {
    width: 100%;
    padding: 10px;
    border: 1px solid blue;
    margin-bottom: 10px;
  }
  .form input[type=submit] {
    width: 100%;
    padding: 10px;
    background-color: blue;
    color: white;
    border: none;
  }
</style>
</head>
<body>
<div class="top-bar">
<h1>Welcome Vendor Name</h1>
</div>
<div class="tabs">
<div class="tab">Product Status</div>
<div class="tab">Request Item</div>
<div class="tab">View Product</div>
<div class="tab">Log Out</div>
</div>
<div class="form">
<h2>Add New Product</h2>
<form action="#" method="post" enctype="multipart/form-data">
<label for="name">Product Name:</label>
<input type="text" id="name" name="name" required>
<label for="image">Product Image:</label>
<input type="file" id="image" name="image" accept="image/*" required>
<label for="price">Product Price:</label>
<input type="number" id="price" name="price" min="0" step="0.01" required>
<label for="action">Action:</label>
<select id="action" name="action">
<option value="delete">Delete</option>
<option value="update">Update</option>
</select>
<input type="submit" value="Add the Product">
</form>
</div>
</body>
</html>