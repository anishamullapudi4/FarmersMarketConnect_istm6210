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
<img src="/images/logo.jpg" alt="FMC logo" width="100px">
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
  <h1 class="pageTitle">Your Products</h1>
  <br>
<table>
  <tr>
      <th colspan="14">
          <a href="addProduct.php"><button type="button" name="button">Add Product</button></a>
          &nbsp; &nbsp; &nbsp;
          <a href="editProduct.php"><button type="button" name="button">Edit Product</button></a>
      </th>
  </tr>
  <tr>
    <td colspan="4">
      <img class="product-img" src="/images/appleRed.jpg" alt="Red Apple">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/carrot.jpg" alt="Carrot">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/bellPepperGreen.jpg" alt="Green Bell Pepper">
    </td>
  </tr>
  <tr>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Red Apple</td>
    <td class="price-cell">$4.00</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Carrot</td>
    <td class="price-cell">$2.50</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Green Bell Pepper</td>
    <td class="price-cell">$3.50</td>
    <td class="padding-cell"></td>
  </tr>
  <tr>
    <td colspan="4">
      <img class="product-img" src="/images/baguette.jpg" alt="Baguette">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/biscuit.jpg" alt="">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/cucumber.jpg" alt="">
    </td>
  </tr>
  <tr>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Baguette</td>
    <td class="price-cell">$5.25</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Biscuit</td>
    <td class="price-cell">$2.25</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Cucumber</td>
    <td class="price-cell">$2.75</td>
    <td class="padding-cell"></td>
  </tr>
  <tr>
    <td colspan="4">
      <img class="product-img" src="/images/radish.jpg" alt="">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/gnocchi.jpg" alt="">
    </td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td colspan="4">
      <img class="product-img" src="/images/ravioli.jpg" alt="">
    </td>
  </tr>
  <tr>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Radishes</td>
    <td class="price-cell">$4.50</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Gnocchi</td>
    <td class="price-cell">$7.75</td>
    <td class="padding-cell"></td>
    <td class="empty-cell"><!-- empty as a padding/border --></td>
    <td class="padding-cell"><!-- empty as a padding/border --></td>
    <td class="product-name">Ravioli</td>
    <td class="price-cell">$7.25</td>
    <td class="padding-cell"></td>
  </tr>
</table>
<br><br><br>
  <div class="bg-footer" id="footer"><p>contact us</p></div>

</div> <!-- closing div for container -->
</body>
</html>
