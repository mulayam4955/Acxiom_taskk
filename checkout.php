<!DOCTYPE html>
<html>
<head>
  <style>
    body {
      background-color: white;
    }
    form {
      color: black;
      font-family: Arial;
      margin: 20px;
    }
    input, select {
      width: 300px;
      padding: 10px;
      margin: 10px;
    }
    button {
      width: 100px;
      padding: 10px;
      margin: 10px;
      background-color: green;
      color: white;
    }
  </style>
</head>
<body>
  <form>
    <h1>Iteam Grand Total</h1>
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>
    <label for="details">Details:</label>
    <input type="text" id="details" name="details" required><br>
    <label for="number">Number:</label>
    <input type="tel" id="number" name="number" required><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>
    <label for="address">Address:</label>
    <input type="text" id="address" name="address" required><br>
    <label for="city">City:</label>
    <input type="text" id="city" name="city" required><br>
    <label for="state">State:</label>
    <select id="state" name="state">
      <option value="">Select State</option>
      <option value="UP">Uttar Pradesh</option>
      <option value="MH">Maharashtra</option>
      <option value="KA">Karnataka</option>
      <!-- add more options as needed -->
    </select><br>
    <label for="pincode">Pin Code:</label>
    <input type="number" id="pincode" name="pincode" required><br>
    <label for="payment">Payment Method:</label>
    <select id="payment" name="payment">
      <option value="">Select Payment Method</option>
      <option value="COD">Cash on Delivery</option>
      <option value="CC">Credit Card</option>
      <option value="DC">Debit Card</option>
      <!-- add more options as needed -->
    </select><br>
    <button type="submit">Order Now</button>
  </form>

  <!-- Add your JavaScript code here -->
  <script>

  </script>

</body>

</html>
