<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
    $dbname="pls";
    $con=connect("root","",$dbname);
    session_start();
    $query="select jog from alkalmazott where felhasznalonev='".$_SESSION['user']."'";
    $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
    list($aut)=mysqli_fetch_row($res);
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '')
    {
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    die();
    
}
    
?>

<div class="content">
        <div class="container" style="border: 5pt; border-color: black;">
                <div class="row">
                    <img src="../img/PLS_logo.png" alt="" class="img-fluid">
                </div>
                <div class="row">
                    <div class="col">
                        <a href="">
                            <div class="col text-center" style="background-color: #807ccc; border-radius: 20pt 20pt 20pt 20pt;">
                                <img src="../img/list.svg" alt="" style="width: 20%;">
                                <p style="text-align: center;">Megbízások</p>
                            </div>
                        </a> 
                    </div>                     
                    <?php
                        if($aut=="admin" || $aut=="felvevo")
                        {
                        echo '<a href="newentryform.php">
                            <div class="col text-center" style="background-color: #807ccc; border-radius: 20pt 20pt 20pt 20pt;">
                                <img src="../img/neworder.svg" alt="" width="20%">
                                <p>Új megbízás</p>    
                            </div>
                        </a>';
                        } 
                    ?>
          
                    <a href=index.php>
                        <div class="col text-center" style="background-color: #E34234; border-radius: 20pt 20pt 20pt 20pt; margin-top: 20px">
                            <img src="../img/logout.svg" alt="Kijelentkezés" width="50%">

                        </div>
                    </a>
                </div>
        </div>
    </div>


<?php
    require('../components/footer.inc.php');
?>
