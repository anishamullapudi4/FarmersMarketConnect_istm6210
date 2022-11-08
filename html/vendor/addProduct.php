<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Farmers Market Connect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylesV.css">
  <script src="javascript.js"></script>
</head>
<body>
<div class="heading">
<div class="top-heading">
<img src="logo.jpg" alt="FMC logo" width="100px">
</div>
  <div class="navbar d-flex flex-row bd-highlight mb-3" id="vendorNav">
    <div class="p-2 bd-highlight" id="homelink"><a href="homeV.php">Home</a></div>
    <div class="p-2 bd-highlight"><a href="productsV.php">Products</a></div>
    <div class="p-2 bd-highlight"><a href="inventoryTracking.php">Inventory</a></div>
    <div class="p-2 bd-highlight"><a href="homeV.php#followers">Followers</a></div>
    <div class="p-2 bd-highlight"><a href="homeV.php#reports">Reports</a></div>
  </div>
</div>
<div class="container">

  <h1 style="text-align: center;">Add Product</h1>
    <form id="addProductForm" action="productsV.php" method="POST">
      <label for="prodName">Product Name: </label>
      <input type="text" name="prodName" value="" required>
      <br>
      <label for="prodCategory">Product Category: </label>
      <input type="text" name="prodCategory" value="" required>
      <br>
      <label for="prodDescription">Product Description: </label>
      <input type="textarea" name="prodDescription" value="">
      <br>
      <label for="prodImage">Product Image: </label>
      <input type="file" name="prodImage" value="" required>
      <br>
      <label for="prodQuantity">Product Quantity: </label>
      <input type="number" name="prodQuantity" value="">
      <br>
      <label for="prodPrice">Product Price: $</label>
      <input type="number" name="prodPrice" value="" required>
      <br>
      <label for="prodTag">Product Tags: </label>
      <input type="text" name="prodTag1" value="" required>
      <input type="text" name="prodTag2" value="" required>
      <input type="text" name="prodTag3" value="">
      <br>
    </form>
    <br><br>
    <button type="reset" id="clearProdBtn" form="addProductForm">Clear</button>
    <button type="submit" id="addProdBtn" form="addProductForm">Add Product</button>
    <br><br>


  <div class="bg-footer" id="footer"><p>contact us</p></div>

</div> <!-- closing div for container -->
</body>
</html>
