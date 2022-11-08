<?php
  require_once('../Modules/ModClass8/db_connect.php');

  $query = "SELECT productID, productName, productCategory, productDescription, productImage, productQuantity,
  productPrice, productTag1, productTag2, productTag3, FROM Products";

  $response = @mysqli_query($con, $query);

  if($response) {
    echo '<table align="left" cellspacing="5" cellpadding="8">';
    echo '<tr>';
    echo '<th>Product ID</th>';
    echo '<th>Product Name</th>';
    echo '<th>Product Category</th>';
    echo '<th>Product Description</th>';
    echo '<th>Product Image</th>';
    echo '<th>Product Quantity</th>';
    echo '<th>Product Price</th>';
    echo '<th>Product Tag 1</th>';
    echo '<th>Product Tag 2</th>';
    echo '<th>Product Tag 3</th>';
    echo '</tr>';

    while($row = mysqli_fetch-array($response)) {
      echo '<tr><td>' . $row['productID'] . '</td>';
      echo '<td>' . $row['productName'] . '</td>';
      echo '<td>' . $row['productCategory'] . '</td>';
      echo '<td>' . $row['productDescription'] . '</td>';
      echo '<td>' . $row['productImage'] . '</td>';
      echo '<td>' . $row['productQuantity'] . '</td>';
      echo '<td>' . $row['productPrice'] . '</td>';
      echo '<td>' . $row['productTag1'] . '</td>';
      echo '<td>' . $row['productTag2'] . '</td>';
      echo '<td>' . $row['productTag3'] . '</td>';
      echo '</tr>';
    }

    echo '</table>';
  }
  else {
    echo "Couldn't issue DB query";

    echo mysqli_error($con);

  }

  mysqli_close($con);

?>
