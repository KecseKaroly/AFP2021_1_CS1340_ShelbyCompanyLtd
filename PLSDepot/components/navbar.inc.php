<script src="../js/redirect.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/navbar.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<head>
<img src="../img/PLS_logo.png" class="center" alt="" onclick="Redirect(1)" width="20%">
<div class="topnav" id="myTopnav">
  <?php
    $tabcounter = 0;
    $secondrow = false;
    session_start();
    $aut = $_SESSION['aut'];
    if(isset($_SESSION['user']))
    {
        echo '<a href="../view/menu.php">Menü</a>';
        echo '<a href="../view/listorders.php">Megbízások</a>';
    }
    if($aut=="admin" || $aut=="felvivo")
    {
        echo '<a href="../view/newentryform.php">Új megbízás</a>';
    }
    if($aut=="admin")
    {
        echo '<a href="../view/profiles.php">Felhasználók kezelése</a>';
    }
    echo '<a href="../view/index.php" style="background-color: #cc4747; float: right;">Kijelentkezés</a>';
  ?>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">

    <i class="fa fa-bars"></i>
  </a>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</head>
