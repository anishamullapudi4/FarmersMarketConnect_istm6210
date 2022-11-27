<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Farmers Market Connect</title>
  <link rel="stylesheet" type="text/css" href="stylesV.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="javascript.js"></script>
</head>
  <body>
    <div class="heading">
      <?php include '../includes/headV.inc.php';  ?>
      <?php include '../includes/navV.inc.php'; ?>
    </div>
    <div class="container">
      <h1 style="text-align: center;">Inventory Tracking</h1>
      <table>
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
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
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
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
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
        <tr>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
          <td class="empty-cell"><!-- empty as a padding/border --></td>
          <td colspan="4" class="inventoryBtns">
            <button type="button" name="lowStockBtn" onclick="lowStock()">Low Stock</button>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <button type="button" name="noStockBtn" onclick="noStock()">No Stock</button>
          </td>
        </tr>
      </table>

      <div class="bg-footer" id="footer"><?php include '../includes/footer.inc.php'; ?></div>

    </div> <!-- closing div for "container" -->

  </body>
</html>
