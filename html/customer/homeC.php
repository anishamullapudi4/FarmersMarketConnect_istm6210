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
        <img src="../vendor/images/ancmnt1.jpg" style="width:100%;" alt="Announcement1">
        <div class="text">Announcement 1 Title</div>
      </div>
      <div class="mySlidesAncmnt">
        <div class="numberstext">2 / 3</div>
        <img src="../vendor/images/ancmnt2.jpg" style="width:100%;" alt="Announcement2">
        <div class="text">Announcement 2 Title</div>
      </div>
      <div class="mySlidesAncmnt">
        <div class="numberstext">3 / 3</div>
        <img src="../vendor/images/ancmnt3.jpg" style="width:100%;" alt="Announcement3">
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
  <div class="followers" id="followers">
    <h3>Followers</h3>
    <!-- carousel of links to customer profiles where vendor clicks on name or image and it sets the url query string as that customer id -->
      <table class="followersTable">
        <tr>
          <th>@Tabby231</th>
          <th>@java_joe</th>
          <th>@Melanie27</th>
          <th>@MattyMatt</th>
        </tr>
        <tr>
          <td><img src="images/follower1.jpg" class="followerImg"></td>
          <td><img src="images/follower2.jpg" class="followerImg"></td>
          <td><img src="images/follower3.jpg" class="followerImg"></td>
          <td><img src="images/follower4.jpg" class="followerImg"></td>
        </tr>
      </table>

  </div>
  <div class="" id="reports">
    <h3>Reports</h3>
    <!-- images / descriptions of reports -->
    <div class="slideshow-container">
      <div class="mySlidesReport">
        <div class="numberstext">1 / 3</div>
        <img src="/images/reportVendor.png" style="width:100%;" alt="vendorReport">
        <div class="text">Vendor Report 1</div>
      </div>
      <div class="mySlidesReport">
        <div class="numberstext">2 / 3</div>
        <img src="/images/reportAdmin.png" style="width:100%;" alt="adminReport">
        <div class="text">Admin Report 1</div>
      </div>
      <div class="mySlidesReport">
        <div class="numberstext">3 / 3</div>
        <img src="/images/ancmnt8.png" style="width:100%;" alt="img3">
        <div class="text">Sample Third Photo</div>
      </div>
      <a class="prev" onclick="plusSlidesR(-1)">&#10094;</a>
      <a class="next" onclick="plusSlidesR(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center;">
      <span class="dot" onclick="currentSlideR(1)"></span>
      <span class="dot" onclick="currentSlideR(2)"></span>
      <span class="dot" onclick="currentSlideR(3)"></span>
    </div>

    <script type="text/javascript">
    // Announcements Slides
    let slideIndex = 1;
    showSlidesA(slideIndex);

    // Next/previous controls
    function plusSlidesA(m) {
    showSlidesA(slideIndex += m);
    }

    // Thumbnail image controls
    function currentSlideA(m) {
    showSlidesA(slideIndex = m);
    }

    function showSlidesA(m) {
    let i;
    let slides = document.getElementsByClassName("mySlidesAncmnt");
    let dots = document.getElementsByClassName("dot");
    if (m > slides.length) {slideIndex = 1}
    if (m < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }

    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }


    // Reports Slideshow
    let slideIndexR = 1;
    showSlidesR(slideIndexR);

    // Next/previous controls
    function plusSlidesR(n) {
    showSlidesR(slideIndexR += n);
    }

    // Thumbnail image controls
    function currentSlideR(n) {
    showSlidesR(slideIndexR = n);
    }

    function showSlidesR(n) {
    let j;
    let slidesR = document.getElementsByClassName("mySlidesReport");
    let dotsR = document.getElementsByClassName("dot");
    if (n > slidesR.length) {slideIndexR = 1}
    if (n < 1) {slideIndexR = slidesR.length}
    for (j = 0; j < slidesR.length; j++) {
      slidesR[j].style.display = "none";
    }

    for (j = 0; j < dotsR.length; j++) {
      dotsR[j].className = dotsR[j].className.replace(" active", "");
    }
    slidesR[slideIndexR-1].style.display = "block";
    dotsR[slideIndexR-1].className += " active";
    }

    </script>

  </div>
  <div class="bg-footer" id="footer"><?php include '../includes/footer.inc.php'; ?></div>

</div> <!-- closing div for container -->
</body>
</html>
