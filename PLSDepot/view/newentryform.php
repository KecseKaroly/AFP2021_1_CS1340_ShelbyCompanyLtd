<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
    include('../components/navbar.inc.php');
    
    $dbname="pls";
    $con=connect("root","",$dbname);
    
    if( (empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') || $_SESSION['aut']!="admin" && $_SESSION['aut']!="felvivo"){
        echo '<script>window.alert()</script>';
      echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    }
    
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="../controller/newEntryHandler.php"" method="post" action="controller/loginHandler.php" enctype="multipart/form-data">
                    <label class="form-label">Partnercég</label>    
                    <select id = "partnercegek_nev" name = "partnercegek_nev" class="form-select">
                        <option selected>Válasszon...</option>
                        <option value="BestGigabyte">BestGigabyte</option>
                        <option value="eMeg">eMeg</option>
                        <option value="MédiaMárk">MédiaMárk</option>
                        <option value="Alza">alza</option>
                        <option value="Second Shop">Second Shop</option>
                        <!--Itt az option value tulajdonképpen a cég id-ja a partnercég táblában. Az aktuális dátumot majd a lekérdezés adja hozzá-->
                    </select>

                    <label class="form-label" style="margin-top: 20px;">Termék neve</label>
                    <input type="text" class="form-control" id="csomaginfo_megnevezes" name="csomaginfo_megnevezes" placeholder="Termék neve">
                    <label class="form-label" style="margin-top: 20px;">Súly (kg)</label>
                    <input type="number" id="csomaginfo_suly" name="csomaginfo_suly" class="form-control" placeholder="Súly (kg)" min=0 max=100>
                    <label class="form-label" style="margin-top: 20px;">Ár (ft)</label>
                    <input type="number" id="csomaginfo_ar" name="csomaginfo_ar" class="form-control" placeholder="Ft" min=0>
                    <label class="form-label" style="margin-top: 20px;">Címzett neve</label>
                    <input type="text" class="form-control" id="cimzett_nev" name="cimzett_nev" placeholder="Címzett neve">
                    <label class="form-label" style="margin-top: 20px;">Lakcím</label>
                    <input type="text" class="form-control" id="cimzett_lakcim" name="cimzett_lakcim" placeholder="Lakcím">
                    <label class="form-label" style="margin-top: 20px;">Telefonszám</label>
                    <input type="number" class="form-control" id="cimzett_tel" name="cimzett_tel" placeholder="Telefonszám">
                    <label class="form-label" style="margin-top: 20px;">E-Mail cím</label>
                    <input type="text" class="form-control" id="cimzett_email" name="cimzett_email" placeholder="E-Mail cím">
                    <button type="submit" class="btn btn-login text-center" name="newentry" style="margin-top: 20px;">Felvétel</button>
                </form>
            </div>
        </div>
        
        <div class="col-2"></div>
    </div>
</div>

<?php
    require('../components/footer.inc.php')
?>
