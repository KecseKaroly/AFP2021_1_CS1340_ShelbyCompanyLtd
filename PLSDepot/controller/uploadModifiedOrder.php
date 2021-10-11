<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
?>
<?php
if(isset($_POST['uploadModifiedOrder']))
{

    $id = (int)$_POST['id'];
    $megnevezes = $_POST['megnevezes'];
    $suly = $_POST['suly'];
    $ar = $_POST['ar'];
    
    $sql='UPDATE megbizas SET megnevezes="'.$megnevezes.'", suly="'.$suly.'", ar="'.$ar.'" WHERE id='.$id.';';
    
    

    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);

    if($result)
    {
        echo '<h2 style="text-align: center;">A kiválasztott megrendelés sikeresen módosítva.</h2>';
        echo '<meta http-equiv="refresh" content="2; URL=../view/listorders.php">';
    } else echo '<h2 style="text-align: center;">Hiba a lekérdezés lefutásakor.</h2>';
     echo '<meta http-equiv="refresh" content="2; URL=../view/listorders.php">';
}
?>
