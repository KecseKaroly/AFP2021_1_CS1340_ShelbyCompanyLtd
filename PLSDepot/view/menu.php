<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
    $dbname="pls";
    $con=connect("root","",$dbname);
    session_start();
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '')
    {
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    die();
    
}
    
?>

<div class="content">
    <script src="../js/redirect.js"></script>    
    <div class="container-md" style="border: 5pt; border-color: black;">
        <div class="row">
            <div class="col text-center">
                <img src="../img/PLS_logo.png" alt="" class="img-fluid" onclick="Redirect(0)" width="80%">
            </div>
            
        </div>          

        <div class="row">
            <div class="col text-center">
                <img src="../img/megbizasok-menu.png" class="img-fluid" alt="Megbízások" onclick="Redirect(1)">
            </div>
                                
            <?php
                if($_SESSION['aut']=="admin" || $_SESSION['aut']=="felvevo")
                {
                echo '<div class="col text-center">
                        <img src="../img/uj_megbizas-menu.png" class="img-fluid" alt="" onclick="Redirect(2)">
                      </div>';
                } 
            ?>
        </div>

        <div class="row">
            <div class="col text-center">
                <img src="../img/felhasznalok_kezelese-menu.png" class="img-fluid" alt="" onclick="Redirect(3)">
            </div>
            <div class="col-3 text-center">
                <img src="../img/kijelentkezes-menu.png" class="img-fluid" alt="Kijelentkezés" onclick="Redirect(4)">
            </div>
        </div>     
    </div>
</div>


<?php
    require('../components/footer.inc.php');
?>
