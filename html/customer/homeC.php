<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Farmers Market Connect</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="stylesC.css">
  <script src="javascript.js"></script>
</head>
<body>
<div class="heading">
  <?php include '../includes/headV.inc.php';  ?>
  <?php include '../includes/navC.inc.php'; ?>
</div>
<div class="container">


  <div class="ancmnts horizontal-scrollable" id="announcements">
    <h3 class="ancmnts-head text-center">Announcements</h3>
    <!-- carousel of most recent announcements -->
    <!-- can we store all announcements in DB then call/display an image, title, and description of each announcement here for users to click on for more details..? -->

    <div class="slideshow-container">
      <div class="mySlidesAncmnt">
        <div class="numberstext">1 / 3</div>
        <img src="/images/ancmnt1.jpg" style="width:100%;" alt="Announcement1">
        <div class="text">Announcement 1 Title</div>
      </div>
      <div class="mySlidesAncmnt">
        <div class="numberstext">2 / 3</div>
        <img src="/images/ancmnt2.jpg" style="width:100%;" alt="Announcement2">
        <div class="text">Announcement 2 Title</div>
      </div>
      <div class="mySlidesAncmnt">
        <div class="numberstext">3 / 3</div>
        <img src="/images/ancmnt3.jpg" style="width:100%;" alt="Announcement3">
        <div class="text">Announcement 3 Title</div>
      </div>
      <a class="prev" onclick="plusSlidesA(-1)">&#10094;</a>
      <a class="next" onclick="plusSlidesA(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center;">
      <span class="dot" onclick="currentSlideA(1)"></span>
      <span class="dot" onclick="currentSlideA(2)"></span>
      <span class="dot" onclick="currentSlideA(3)"></span>
    </div>


  </div>
  <div class="vendors" id="vendors">
    <h3>Top Rated Vendors</h3>
    <!-- carousel of links to customer profiles where vendor clicks on name or image and it sets the url query string as that customer id -->
      <table class="vendorsTable">
        <tr>
          <th>@gabriel_farms</th>
          <th>@fresh_baked</th>
          <th>@Melanie27</th>
          <th>@MattyMatt</th>
        </tr>
        <tr>
          <td><img src="images/vendor1.jpg" class="vendorImg"></td>
          <td><img src="images/vendor2.jpg" class="vendorImg"></td>
          <td><img src="images/vendor3.jpg" class="vendorImg"></td>
          <td><img src="images/vendor4.jpg" class="vendorImg"></td>
        </tr>
      </table>

  </div>

  <div class="bg-footer" id="footer"><?php include '../includes/footer.inc.php'; ?></div>

</div> <!-- closing div for container -->
</body>
</html>
