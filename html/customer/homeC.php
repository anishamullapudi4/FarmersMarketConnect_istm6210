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

<!--list of vendors-->

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

  <!-- list of markets-->

  <div class="markets" id="markets">
    <h3>Markets<h3>
      <table>
        <tr>
          <td>
            <h4>Freshfarm Dupont Circle Market</h4></br>
            <h6>The Dupont Circle farmers market, one of the area’s most popular, offers something for everyone. Stop at one of the numerous farm stands to pick up herbs, vegetables, fruit, and free-range eggs. Several local creameries sell sheep and goat’s milk cheese and yogurt. Vegan soup, pancakes, wood-fired pizza, and bagels from a celebrated local deli make it a good bet for lunch. Beverage makers sell locally made cider, beer, liqueurs, and spirits during market hours, Sundays from 8:30 a.m. to 1:30 p.m.</h6> </td>
            <td><img src="images/market1.jpg" width= "700" height="300" alt="Market" /></td>
          </tr>
          <tr>
            <td>
              <h4>Mount Pleasant Farmers Market</h4></br>
                </h6>Live music, book sales, and a bike clinic animate this Mt. Pleasant market, open 9 a.m. to 1 p.m. on Saturdays. Farmers, bakers, and pickle makers from the mid-Atlantic sell everything from baby greens to grass-fed beef, kimchi, mint, and basil. </h6> </td>
              <td><img src="images/market2.jpg" width= "700" height="300" alt="Market" /></td>
            </tr>
            <tr>
              <td>
                <h4>Columbia Heights Farmers Market</h4></br>
                <h6>Handmade pasta, plant-based sausages, microgreens, and Eastern Shore mushrooms make this market a favorite among vegetarians. The market hosts 20 farmers and food producers Saturday mornings from 9 a.m. to 1 p.m. in the colorful Civic Plaza. </h6> </td>
                <td><img src="images/market3.jpg" width= "700" height="300" alt="Market" /></td>
              </tr>
              <tr>
                <td>
                  <h4>Silver Spring Farmers Market</h4></br>
                  <h6>Meat and dairy lovers will enjoy this farmers market, which sells pasture-raised meat, poultry, and eggs, as well as goat, cow, and sheep’s milk cheeses and yogurts. Beets, kale, and kohlrabi are among the featured produce. After food shopping, pick up some beeswax candles, soaps, and lotions and sip some apple and hard cider, or Maryland-produced wine and beer. It’s open Saturdays from 9 a.m. to 1 p.m.</h6> </td>
                  <td><img src="images/market4.jpg" width= "700" height="300" alt="Market" /></td>
                </tr>
                <tr>
                  <td>
                    <h4>Freshfarm Penn Quater Market</h4></br>
                    <h6>Located next to the Smithsonian National Portrait Gallery, the market features wood-fired pizza from Timber Pizza, scones and brownies from Rare Opportunity Farm and Bakehouse, and other mouthwatering fare. Fall produce finds include spring onions, radishes, broccoli, and fresh herbs like parsley, sage, and thyme. Get these items and more on Thursdays from 3 to 7 p.m. </h6> </td>
                    <td><img src="images/market5.jpg" width= "700" height="300" alt="Market" /></td>
                  </tr>
                </div>



  <div class="bg-footer" id="footer"><?php include '../includes/footer.inc.php'; ?></div>

</div> <!-- closing div for container -->
</body>
</html>
