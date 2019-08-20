<!DOCTYPE html>
<html>
<head>
  <title>Dodar Myanmar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/basic.css">
  <link rel="stylesheet" type="text/css" href="css/hover-min.css">
  <link rel="stylesheet" type="text/css" href="css/hover.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img class="head_img" src="images/logo.png">
  </a>
  <button class="navbar-toggler"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <div class="icon-one">
    <div class="hamburger hamburger-one"></div>
  </div>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul id="menu" class="navbar-nav ml-auto">
      <li  class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="aboutus.php">ABOUT</a>
      </li>
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICE
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="travel.php">Travel & Tour</a>
          <a class="dropdown-item" href="travelpackage.php">Travel Packages</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          PRODUCT
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="tea-service.php">Tea</a>
          <a class="dropdown-item" href="door-service.php">Door</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("menu");
var btns = header.getElementsByClassName("nav-item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
