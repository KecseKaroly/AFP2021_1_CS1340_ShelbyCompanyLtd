<head>

  <script src="../js/redirect.js"></script>

  <style>
    .img {
      padding: 20pt;
      
    }
  </style>

  <nav class="navbar navbar-fixed-top navbar-expand-lg bg-light">
      
    <div class="container-fluid">
      <div class="col-4 text-center">
        <img src="../img/PLS_logo.png" alt="" class="img-fluid" style="width: 80%; padding-left: 30pt;" onclick="Redirect(0)">
      </div>
      <div class="navbar">
        <ul class="navbar-nav d-flex flex-row">
          <div class="row">
            <?php
              $tabcounter = 0;
              $secondrow = false;
              session_start();
              $aut = $_SESSION['aut'];
              if(isset($_SESSION['user']))
              {
                
                  echo '<div class="col-3">';
                    echo '<img src="../img/megbizasok-menu.png" class="img-fluid" alt="Megbízások" onclick="Redirect(1)">';
                  echo '</div>';
                
                $tabcounter++;
              }
              if($aut=="admin" || $aut=="felvivo") {
                  echo '<div class="col-3">';
                    echo '<img src="../img/uj_megbizas-menu.png" class="img-fluid" alt="Új megbízás" onclick="Redirect(2)">';
                  echo '</div>';
              }
              if($aut=="admin")
              {     
                echo '<div class="col-3">';
                  echo '<img src="../img/felhasznalok_kezelese-menu.png" class="img-fluid" alt="Felhasználók" onclick="Redirect(3)">';
                echo '</div>';
              }
              if(isset($_SESSION['user']))
              {
              echo '<div class="col-1">';
                echo '<img src="../img/kijelentkezes-menu.png" class="img-fluid" alt="Kijelentkezés" onclick="Redirect(4)">';
              echo '</div>';
              }
            ?>
          </div>
        </ul>
      </div>


    </div>
  </nav>

</head>
