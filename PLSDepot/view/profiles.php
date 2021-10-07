<?php
    require('../components/init.inc.php');
    require ('../controller/database.php');
    $dbname="pls";
    $con=connect("root","",$dbname);
    session_start();
    $query="select jog from alkalmazott where felhasznalonev='".$_SESSION['user']."'";
    $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
    list($aut)=mysqli_fetch_row($res);
    if((empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '') || $aut!="admin"){
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    }
    include('../components/navbar.inc.php');
?>


<?php
    if(true) {
        echo '<div class="container-md">';
        
        echo '<form name = "addnewprofiles" method="post" action="addnewuser.php" enctype=multipart/form-data>';
        echo '<button type="submit" class="btn btn-login text-center" name="newuser" style="margin-top: 20px;">Felvétel</button>';
        echo '</form>';   
        echo '<table class="table table-light" style="text-shadow: none;">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Teljes név</th>
                <th scope="col">Felhasználónév</th>
                <th scope="col">Jog</th>
                <th scope="col">Módosítás</th>
                <th scope="col">Törlés</th>
              </tr>
            </thead>
            <tbody>';
    

    $sql = "SELECT * FROM alkalmazott WHERE jog != 'admin'";
    $con=mysqli_connect('localhost',"root","", "pls",3306);
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
        while(list($id,$teljesnev,$felhasznalonev,$jelszo,$jog)=mysqli_fetch_row($result)) {
        
            echo "<tr>";
                echo '<form name="deletemodifyUser" method="post" action="deletemodifyUser.php" enctype=multipart/form-data>';
                echo "<th scope='row'>".$id."</th>";
                echo '<input type="hidden" name="id" value='.$id.'>';
                echo "<td>".$teljesnev."</td>";
                echo '<input type="hidden" name="teljesnev" value="'.$teljesnev.'">';
                echo "<td>".$felhasznalonev."</td>";
                echo '<input type="hidden" name="felhasznalonev" value="'.$felhasznalonev.'">';
                echo "<td>".$jog."</td>";
                echo '<input type="hidden" name="jog" value="'.$jog.'">';
                echo "<td><button type='submit' name='modifyUser' class='btn btn-warning btn-lg'>Módosítás</button></td>";
                echo "<td><button type='submit' name='deleteUser' class='btn btn-danger btn-lg'>Törlés</button></td>";
                echo '</form>';
            echo "</tr>";
        }
    }
    echo '<div class="container-md">';
    
    echo '</div>';
    ?> 

</div>
