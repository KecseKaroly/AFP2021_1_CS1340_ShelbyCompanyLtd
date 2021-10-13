<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
    include('../components/navbar.inc.php');
?>

<?php

if (isset($_POST['deleteOrder']))
{
    $id = $_POST['id'];
    
    $sql='DELETE FROM megbizas WHERE id='.$id.';';

    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    
    $sql='DELETE FROM csomag_elokeszites WHERE megbizasid='.$id.';';

    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);

    if($result)
    {
        echo '<h2 style="text-align: center;">A kiválasztott megrendelés törölve.</h2>';
         echo '<meta http-equiv="refresh" content="0; URL=../view/listorders.php">';
    } else echo '<h2 style="text-align: center;">Hiba a lekérdezés lefutásakor.</h2>';
}

if (isset($_POST['modifyOrder']))
{

    $id = $_POST['id'];
    
      $sql = "SELECT megbizas.id, megbizas.megnevezes, megbizas.suly, megbizas.ar FROM megbizas WHERE id = ".$id.";";
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    list($id,$megnevezes,$suly,$ar)=mysqli_fetch_row($result);

echo '<div class="container text-center">';
    echo "<div class='col'>";
        echo '<form name="update" method="post" action="../controller/uploadModifiedOrder.php" enctype=multipart/form-data>';
            echo "<div class='card' style='width: 100%; background-color: #807ccc; border-radius: 30pt 30pt 30pt 30pt;'>";
                echo "<div class='card-body'>";
                    echo '<input type="hidden" name="id" value="'.$id.'">';
                    echo "<p class='card-text' style='color: #1f2833;'>Megnevezés:</p>";
                    echo '<input type="text" required="required" name="megnevezes" placeholder="Megnevezés" value="'.$megnevezes.'"><br><br>';
    
                    echo "<p class='card-text' style='color: #1f2833;'>Súly:</p>";
                    echo '<input type="text" required="required" name="suly" placeholder="Ár" value="'.$suly.'"><br><br>';                
    
                    echo "<p class='card-text' style='color: #1f2833;'>Ár:</p>";
                    echo '<input type="text" required="required" name="ar" placeholder="Ár" value="'.$ar.'"><br><br>';
                    

                    echo "<button type='submit' name='uploadModifiedOrder' class='btn btn-light btn-lg'>Mentés</button>";
                echo "</div>";
            echo "</div>";
        echo '</form>';
    echo "</div>";
echo "</div>";
}


if (isset($_POST['changestatus']))
{
    $id = $_POST['id'];
    $fazis = $_POST['fazis'];
    $sql = 'INSERT INTO csomag_elokeszites VALUES ('.$id.',0,'.($fazis+1).',default)';
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    
    $sql = 'UPDATE csomag_elokeszites SET fazisKesz = 1 WHERE megbizasid = '.$id.' AND fazis ='.$fazis.';';
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    echo '<meta http-equiv="refresh" content="; URL=listorders.php">';
}

if (isset($_POST['elvallalas']))
{
    $id = $_POST['id'];
    $fazis = $_POST['fazis'];
    
    $sql = "SELECT alkalmazott.id FROM alkalmazott WHERE felhasznalonev = '".$_SESSION['user']."';";
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    list($alkalmazottid)=mysqli_fetch_row($result);
    
    $sql = 'UPDATE csomag_elokeszites SET alkalmazottid = '.(int)$alkalmazottid.' WHERE megbizasid='.$id.' AND fazis='.$fazis.';';
    $con=connect("root","", "pls");
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    echo '<meta http-equiv="refresh" content="0; URL=listorders.php">';
}


if (isset($_POST['reszletek']))
{
    
    
    $id = $_POST['id'];
    $sql = "SELECT megbizas.megnevezes, csomag_elokeszites.fazis, alkalmazott.teljesnev FROM megbizas INNER JOIN csomag_elokeszites ON megbizas.id = csomag_elokeszites.megbizasid INNER JOIN alkalmazott ON csomag_elokeszites.alkalmazottid = alkalmazott.id WHERE csomag_elokeszites.fazis < 5 AND csomag_elokeszites.megbizasid = ".$id.";";
    $con=mysqli_connect('localhost',"root","", "pls",3306);
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
    
    echo '<div class="container-md">';
        echo '<table class="table table-light" style="text-shadow: none;">
            <thead>
              
                
                <th scope="col"><a href=listorders.php?order=1>Megnevezés</a></th>
                <th scope="col"><a href=listorders.php?order=2>Fázis</a></th>
                <th scope="col"><a href=listorders.php?order=3>Alkalmazott</a></th>';
                
        
        echo '</tr>
            </thead>
            <tbody>';
        while(list($megnevezes,$fazis,$teljesnev)=mysqli_fetch_row($result)) {
        
            echo "<tr>";
                echo "<td>".$megnevezes."</td>";
                echo "<td>";
                        switch($fazis)
                        {
                            case 1 : echo "Előkészítés";
                                    break;
                            case 2 : echo "Csomagolás";
                                    break;
                            case 3 : echo "Felcímzés";
                                    break;
                            case 4 : echo "Kiszállítás";
                                    break;
                            case 5 : echo "Kiszállítva";
                                    break;
                            
                        }
                echo "</td>";
                echo "<td>".$teljesnev."</td>";
            echo "</tr>";
        }
        echo '</table></div>';
}
?>
