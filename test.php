<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <?php include 'head.php'; ?>


    <style>

      .map {
        height: 800px;
        width: 100%;
        margin: 0;
        padding: 0;
        position: relative;

      }
      .ol-zoom {
    top: .5em;
    right: .5em;
    left: inherit;

}
    </style>

</head>
<body>
<?php include 'navbar.php'; ?>

<div class="ml-3" id="menu-top">
<h5 class="">รายการข้อมูลสถิติที่เลือก</h5>
<p>จำนวนเกษตรในเขตปฎิรูปที่ดิน</p>
</div>
<div id="wrapper">

<!-- Sidebar Main Menu -->
<?php require_once('menu-left.php'); ?>
<div id="content-wrapper">
    <div class="">
<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
<div class="map mt-n3" id="map"></div>

<script src="libs/v6.1.1-dist/ol.js"></script>
<script src="main.js"></script>
<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
    </div>
</div>



</div>
<?php include 'footer.php'; ?>
</body>
</html>
<script>
$(".sidebar" ).removeClass('toggled');

$( "#slideoff" ).click(function() {
   $('#sidebarToggle').click();
   var className = $('#checkclassul').attr("class");
    if(className == "sidebar navbar-nav toggled"){
      $('.tabcontent').css("display", "none")

    }else{
      $('.tabcontent').css("display", "block")
    }
});
function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
/*
$(".tablinks" ).click();
*/
</script>
