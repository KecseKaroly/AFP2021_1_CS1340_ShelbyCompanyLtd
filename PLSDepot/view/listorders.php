<?php
    require('../components/navbar.inc.php');
    require('../components/init.inc.php');
    require ('../controller/database.php');
    $dbname="pls";
    $con=connect("root","",$dbname);
    $query="select id,jog from alkalmazott where felhasznalonev='".$_SESSION['user']."'";
    $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
    list($sajatid,$aut)=mysqli_fetch_row($res);
    if((empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == '')){
        echo '<meta http-equiv="refresh" content="0; URL=index.php">';
    }
?>



<?php
    

    if(!isset($_GET['order']))
	$order=0;
    else $order=$_GET['order'];

    if ($order==0)
    	$orderstring=" order by id";
    else if($order==1) $orderstring=" order by megbizas.megnevezes";
    else if($order==2) $orderstring=" order by megbizas.suly";
    else if($order==3) $orderstring=" order by megbizas.ar";
    else if($order==4) $orderstring=" order by megbizas.feladas_datum";
    else if($order==5) $orderstring=" order by cimzett.nev";
    else if($order==6) $orderstring=" order by partnercegek.nev";
    else if($order==7) $orderstring=" order by csomag_elokeszites.fazis";

    


    if($aut == 'admin' || $aut == 'felvivo')
            $sql = "SELECT megbizas.id, megbizas.megnevezes, megbizas.suly, megbizas.ar, megbizas.feladas_datum, cimzett.nev, partnercegek.nev, csomag_elokeszites.fazis, csomag_elokeszites.alkalmazottid FROM cimzett INNER JOIN megbizas ON cimzett.id = megbizas.cimzettid INNER JOIN partnercegek ON megbizas.partnercegid = partnercegek.id INNER JOIN csomag_elokeszites ON megbizas.id = csomag_elokeszites.megbizasid WHERE csomag_elokeszites.fazisKesz = FALSE";
        else
            $sql = "SELECT megbizas.id, megbizas.megnevezes, megbizas.suly, megbizas.ar, megbizas.feladas_datum, cimzett.nev, partnercegek.nev, csomag_elokeszites.fazis, csomag_elokeszites.alkalmazottid FROM cimzett INNER JOIN megbizas ON cimzett.id = megbizas.cimzettid INNER JOIN partnercegek ON megbizas.partnercegid = partnercegek.id INNER JOIN csomag_elokeszites ON megbizas.id = csomag_elokeszites.megbizasid WHERE csomag_elokeszites.fazis < 5 AND csomag_elokeszites.fazisKesz = FALSE ";
    $sql.=$orderstring;
?>

<?php
    if(true) {
        echo '<div class="container-md">';
        echo '<table class="table table-light" style="text-shadow: none;">
            <thead>
              <tr>';
                if($aut == 'admin' || $aut == 'felvivo')
                {
                echo '<th scope="col"> </th>';
                }
            echo '
                
                <th scope="col"><a href=listorders.php?order=1>Megnevezés</a></th>
                <th scope="col"><a href=listorders.php?order=2>Súly</a></th>
                <th scope="col"><a href=listorders.php?order=3>Ár</a></th>
                <th scope="col"><a href=listorders.php?order=4>Feladás dátuma</a></th>
                <th scope="col"><a href=listorders.php?order=5>Címzett neve</a></th>
                <th scope="col"><a href=listorders.php?order=6>Partnercég neve</a></th>
                <th scope="col"><a href=listorders.php?order=7>Fázis</a></th>';
                if($aut == 'dolgozo' || $aut == 'futar')
                    echo '<th>Fázis Módosítás</th>';
                if($aut == 'admin' || $aut == 'felvivo')
                {
                echo '<th scope="col">Módosítás</th>
                <th scope="col">Törlés</th>';
                }
        
        echo '</tr>
            </thead>
            <tbody>';
    
        
   
    
    $con=mysqli_connect('localhost',"root","", "pls",3306);
    $result=mysqli_query($con,$sql) or die ("Nem sikerült ".$sql);
        while(list($id,$megnevezes,$suly,$ar,$feladas_datum,$cimzettneve,$partnercegneve,$fazis, $alkalmazottid)=mysqli_fetch_row($result)) {
        
            echo "<tr>";
                echo '<form name="deletemodifyOrder" method="post" action="deletemodifyOrder.php" enctype=multipart/form-data>';
            if($aut == 'admin' || $aut == 'felvivo')
            {
                echo "<th scope='row'>";
                    echo "<button type='submit' name='reszletek' class='btn btn-primary'>Részletek</button>";            
                echo"</th>";
            }
                
                echo '<input type="hidden" name="id" value='.$id.'>';
            
                echo "<td>".$megnevezes."</a></td>";
                echo '<input type="hidden" name="megnevezes" value="'.$megnevezes.'">';
            
                echo "<td>".$suly."</a></td>";
                echo '<input type="hidden" name="suly" value="'.$suly.'">';
            
                echo "<td>".$ar."</a></td>";
                echo '<input type="hidden" name="suly" value="'.$ar.'">';
            
                echo "<td>".$feladas_datum."</a></td>";
                echo '<input type="hidden" name="feladasdatum" value="'.$feladas_datum.'">';
            
                echo "<td>".$cimzettneve."</a></td>";
                echo '<input type="hidden" name="cimzettneve" value="'.$cimzettneve.'">';
            
                echo "<td>".$partnercegneve."</a></td>";
                echo '<input type="hidden" name="partnercegneve" value="'.$partnercegneve.'">';
            
                echo "<td>";
                         echo '<input type="hidden" name="fazis" value="'.$fazis.'">';
                        switch($fazis)
                        {
                            case 1 : echo "Előkészítés";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 2 : echo "Csomagolás";
                                if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 3 : echo "Felcímzés";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 4 : echo "Kiszállítás";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 5 : echo "Kiszállítva";
                                if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            
                        }
                echo "</td>";
                if($aut == 'dolgozo')
                {
                    echo "<td>";
                    if($alkalmazottid == 0 && $fazis != 4)
                        echo "<button type='submit' name='elvallalas' class='btn btn-primary'>Elvállalom</button>";
                    else if($fazis != 4 && $alkalmazottid == $sajatid)
                        echo "<button type='submit' name='changestatus' class='btn btn-primary'>KÉSZ</button>";
                    echo "</a></td>";
                }
            
                else if($aut == 'futar')
                {
                    echo "<td>";
                    if($alkalmazottid == 0 && $fazis == 4)
                        echo "<button type='submit' name='elvallalas' class='btn btn-primary'>Elvállalom</button>";
                    else if($fazis != 5 && $alkalmazottid == $sajatid)
                        
                        echo "<button type='submit' name='changestatus' class='btn btn-primary'>KÉSZ</button>";
                        
                    echo "</a></td>";
                }
                
                echo '<input type="hidden" name="partnercegneve" value="'.$fazis.'">';
                
                if($aut == 'admin' || $aut == 'felvivo')
                {
                    echo "<td><button type='submit' name='modifyOrder' class='btn btn-warning btn-lg'>Módosítás</button></td>";
                    echo "<td><button type='submit' name='deleteOrder' class='btn btn-danger btn-lg'>Törlés</button></td>";
                }
                
                echo '</form>';
            echo "</tr>";
        }
        echo '</table></div>';
    }
    
    ?> 


