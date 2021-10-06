<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
?>

<?php


if (isset($_POST['deleteUser']))
{
    $id = $_POST['id'];
    
    $sql='DELETE FROM alkalmazott WHERE id='.$id.';';

    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);

    if($result)
    {
        echo '<h2 style="text-align: center;">A kiválasztott felhasználó törölve.</h2>';
    } else echo '<h2 style="text-align: center;">Hiba a lekérdezés lefutásakor.</h2>';
}

if (isset($_POST['modifyUser']))
{

    $id = $_POST['id'];
    
    $sql='SELECT * FROM alkalmazott WHERE id='.$id.';';
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    list($id,$teljesnev,$felhasznalonev,$jelszo,$jog)=mysqli_fetch_row($result);


    echo "<div class='col-4'>";
        echo '<form name="update" method="post" action="../controller/uploadModifiedUser.php" enctype=multipart/form-data>';
            echo "<div class='card' style='width: 100%; background-color: #ECA400;'>";
                echo "<div class='card-body'>";
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                    echo "<p class='card-text' style='color: #1f2833;'>Teljes név:</p>";
                    echo '<input type="text" name="teljesnev" placeholder="Teljes név" value="'.$teljesnev.'"><br><br>';
    
                    echo "<p class='card-text' style='color: #1f2833;'>Felhasználónév:</p>";
                    echo '<input type="text" name="felhasznalonev" placeholder="Felhasználónév" value="'.$felhasznalonev.'"><br><br>';
    
                    echo "<p class='card-text' style='color: #1f2833;'>Új jelszó:</p>";
                    echo '<input type="password" name="jelszo" placeholder="Jelszó"><br><br>';
            
                    echo "<p class='card-text' style='color: #1f2833;'>Jog:</p>";
                    echo '<select class="custom-select" name="jog" required>';
                    
                        switch($jog)
                        {
                            
                            case "felvivo" : echo '<option value="felvivo" selected="selected">Felvivő</option>';
                                    echo '<option value="user">Doglozó</option>';
                                    echo '<option value="futar">Futár</option>';
                                    break;
                            case "dolgozo" : echo '<option value="dolgozo" selected="selected">Dolgozó</option>';
                                    echo '<option value="felvivo">Felvivő</option>';
                                    echo '<option value="futar">Futár</option>';
                                    break;
                            case "futar" : echo '<option value="futar" selected="selected">Futár</option>';
                                    echo '<option value="felvivo">Felvivő</option>';
                                    echo '<option value="dolgozo">Dolgozó</option>';
                                    break;
                        }
                        echo '</select><br><br>';

                    echo "<button type='submit' name='uploadModifiedUser' class='btn btn-success btn-lg'>Mentés</button>";
                echo "</div>";
            echo "</div>";
        echo '</form>';
    echo "</div>";
}

?>
