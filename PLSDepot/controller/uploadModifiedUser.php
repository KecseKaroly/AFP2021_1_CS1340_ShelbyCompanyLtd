<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
?>
<?php
if(isset($_POST['uploadModifiedUser']))
{

    $id = (int)$_POST['id'];
    $teljesnev = $_POST['teljesnev'];
    $felhasznalonev = $_POST['felhasznalonev'];
    $jelszo = $_POST['jelszo'];
    $jog = $_POST['jog'];
    
    $sql='UPDATE alkalmazott SET teljesnev="'.$teljesnev.'", felhasznalonev="'.$felhasznalonev.'", jog="'.$jog.'", jelszo=md5("'.$jelszo.'") WHERE id='.$id.';';
    if($jelszo != null)
        $sql='UPDATE alkalmazott SET jelszo = md5("'.$jelszo.'") WHERE id='.$id.';';
    

    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);

    if($result)
    {
        echo '<h2 style="text-align: center;">A kiválasztott felhasználó sikeresen módosítva.</h2>';
        
    } else echo '<h2 style="text-align: center;">Hiba a lekérdezés lefutásakor.</h2>';
     echo '<meta http-equiv="refresh" content="2; URL=../view/profiles.php">';
    
}
?>
