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
  <?php include '../includes/headV.inc.php';  ?>
  <?php include '../includes/navV.inc.php'; ?>
</div>
<div class="container">


  <div class="ancmnts horizontal-scrollable" id="announcements">
    <h3 class="ancmnts-head text-center">Announcements</h3>
    <!-- carousel of most recent announcements -->
    <!-- can we store all announcements in DB then call/display an image, title, and description of each announcement here for users to click on for more details..? -->

    <div class="row text-center">
      <div class="col-xs-4">
        <img src="/images/ancmnt1.png" alt="announcement1" class="announcement"><br>
        <h5>Announcement Title</h5>
        <p>First line / description</p>
      </div>
      <div class="col-xs-4">
        <img src="/images/ancmnt2.png" alt="announcement2" class="announcement"><br>
        <h5>Announcement Title</h5>
        <p>First line / description</p>
      </div>
      <div class="col-xs-4">
        <img src="/images/ancmnt3.png" alt="announcement3" class="announcement"><br>
        <h5>Announcement Title</h5>
        <p>First line / description</p>
      </div>
    <!--  <div class="col-xs-4">
        <img src="../../images/ancmnt4.png" alt="announcement4"><br>
        <h4>Announcement Title</h4>
        <p>First line of announcement or description</p>
      </div>
      <div class="col-xs-4">
        <img src="../../images/ancmnt5.png" alt="announcement5"><br>
        <h4>Announcement Title</h4>
        <p>First line of announcement or description</p>
      </div>
      <div class="col-xs-4">
        <img src="../../images/ancmnt6.png" alt="announcement6"><br>
        <h4>Announcement Title</h4>
        <p>First line of announcement or description</p>
      </div>
      <div class="col-xs-4">
        <img src="../../images/ancmnt7.png" alt="announcement7"><br>
        <h4>Announcement Title</h4>
        <p>First line of announcement or description</p>
      </div> -->
    </div>


  </div>
  <div class="followers" id="followers">
    <h3>Followers</h3>
    <!-- carousel of links to customer profiles where vendor clicks on name or image and it sets the url query string as that customer id -->
  </div>
  <div class="" id="reports">
    <h3>Reports</h3>
    <!-- images / descriptions of reports -->
    <div class="slideshow-container">
      <div class="mySlides">
        <div class="numberstext">1 / 3</div>
        <img src="/images/reportVendor.png" style="width:100%;" alt="vendorReport">
        <div class="text">Vendor Report 1</div>
      </div>
      <div class="mySlides">
        <div class="numberstext">2 / 3</div>
        <img src="/images/reportAdmin.png" style="width:100%;" alt="adminReport">
        <div class="text">Admin Report 1</div>
      </div>
      <div class="mySlides">
        <div class="numberstext">3 / 3</div>
        <img src="/images/ancmnt8.png" style="width:100%;" alt="img3">
        <div class="text">Sample Third Photo</div>
      </div>
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center;">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>

    <script type="text/javascript">
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    }
    </script>

  </div>
  <div class="bg-footer" id="footer"><?php include '../includes/footer.inc.php'; ?></div>

</div> <!-- closing div for container -->
</body>
</html>
