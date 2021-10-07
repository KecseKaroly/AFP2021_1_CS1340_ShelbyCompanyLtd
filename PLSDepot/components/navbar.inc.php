<head>

  <nav class="navbar navbar-fixed-top navbar-expand-lg bg-light">
    <a href="../view/menu.php">
      <img src="../img/PLS_logo.png" alt="" class="img-fluid" style="width: 80%;">
    </a>
    <div class="container">
      <div class="navbar">
        <ul class="navbar-nav d-flex flex-row">
          <div class="row">
            <?php
              if(isset($_SESSION['user']))
              {
                echo '<a class="nav-link" href="#">';
                  echo '<div class="col">';
                    echo '<img src="../img/megbizasok-menu.png" alt="Megbízások" style="width: 30%;">';
                  echo '</div>';
                echo '</a>';
              }

              if($aut=="admin" || $aut=="felvevo") {
                echo '<a class="nav-link" href="newentryform.php">';
                  echo '<div class="col">';
                    echo '<img src="../img/uj_megbizas-menu.png" alt="Új megbízás" width="30%">';
                  echo '</div>';
                echo '</a>';
              }

              if($aut=="admin")
              {
                echo '<a class="nav-link" href="../view/profiles.php">';
                  echo '<div class="col">';
                    echo '<img src="../img/felhasznalok_kezelese-menu.png" alt="Felhasználók" width="30%">';
                  echo '</div>';
                echo '</a>';
              }
            ?>
            
          </div>
        </ul>
      </div>
      <a class="nav-link" href=index.php>
        <img src="../img/kijelentkezes-menu.png" alt="Kijelentkezés" width="95%">
      </a>
    </div>
  </nav>


</head>
