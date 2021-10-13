<?php
    require('../components/navbar.inc.php');
    require('../components/init.inc.php');
    require ('../controller/database.php');
    $dbname="pls";
    $con=connect("root","",$dbname);
    $query="select jog from alkalmazott where felhasznalonev='".$_SESSION['user']."'";
    $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
    list($aut)=mysqli_fetch_row($res);
    if((empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') || $aut!="admin"){
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    }
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="../controller/newUserHandler.php" method="post" enctype="multipart/form-data">
                    

                    <label class="form-label" style="margin-top: 20px;">Teljes név</label>
                    <input type="text" required="required" class="form-control" id="teljesnev" name="teljesnev"" placeholder="Teljes név">
                                                                                                                                             
                    <label class="form-label" style="margin-top: 20px;">Felhasználónév</label>
                    <input type="text" required="required" id="felhasznalonev" name="felhasznalonev" class="form-control" placeholder="Felhasználónév">
                                                                                                                                 
                    <label class="form-label" style="margin-top: 20px;">Jelszó</label>
                    <input type="password" required="required" id="jelszo" name="jelszo" class="form-control" placeholder="Jelszó">
                                                                                                                      
                                                                                                                      
                    <label class="form-label">Jogosultság</label>    
                    <select id = "partnercegek_nev" name = "jog" class="form-select" required="required">
                        <option selected>Válasszon...</option>
                        <option value="felvevo">Rendelésfelvevő</option>
                        <option value="dolgozo">Dolgozó</option>
                        <option value="futar">Futár</option>
                    </select>                                                                                          
                                                                                                                      
                                                                                                                      
                                                                                                                      
                    <button type="submit" class="btn btn-login text-center" name="newuser" style="margin-top: 20px;">Felvétel</button>
                                                                                                                     
                                                                                                                     
                </form>
            </div>
        </div>
    </div>
</div>
                          
                          
                          
                          
