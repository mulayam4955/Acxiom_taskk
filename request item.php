<html>
<head>
  <style>
    /* add your own style for the interface */
    body {
      background-color: white;
      font-family: Arial;
    }
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: blue;
      color: white;
      padding: 10px;
    }
    .topbar button {
      width: 100px;
      height: 40px;
      border: none;
      background-color: white;
      color: blue;
      font-size: 20px;
    }
    .items {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 20px;
      margin: 20px;
    }
    .item {
      width: 300px;
      height: 300px;
      background-color: blue;
      color: white;
      font-size: 40px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="topbar">
    <button>Home</button>
    <button>Request Item</button>
    <button>LogOut</button>
  </div>
  <div class="items">
    <div class="item">Item 1</div>
    <div class="item">Item 2</div>
    <div class="item">Item 3</div>
    <div class="item">Item 4</div>
  </div>
</body>
</html>