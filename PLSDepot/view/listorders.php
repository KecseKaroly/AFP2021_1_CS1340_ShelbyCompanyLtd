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
        echo '<div class="container">';
        echo '<div class="table-responsive-md">';
        echo '<table class="table table-striped" style="text-shadow: none;">
            <thead>
              <tr>';
                if($aut == 'admin' || $aut == 'felvivo')
                {
                echo '<th scope="col"> </th>';
                }
            echo '
                
                <th scope="col"><a href=listorders.php?order=1>Megnevez??s</a></th>
                <th scope="col"><a href=listorders.php?order=2>S??ly</a></th>
                <th scope="col"><a href=listorders.php?order=3>??r</a></th>
                <th scope="col"><a href=listorders.php?order=4>Felad??s d??tuma</a></th>
                <th scope="col"><a href=listorders.php?order=5>C??mzett neve</a></th>
                <th scope="col"><a href=listorders.php?order=6>Partnerc??g neve</a></th>
                <th scope="col"><a href=listorders.php?order=7>F??zis</a></th>';
                if($aut == 'dolgozo' || $aut == 'futar')
                    echo '<th>F??zis M??dos??t??s</th>';
                if($aut == 'admin' || $aut == 'felvivo')
                {
                echo '<th scope="col">M??dos??t??s</th>
                <th scope="col">T??rl??s</th>';
                }
        
        echo '</tr>
            </thead>
            <tbody>';
    
        
   
    
    $con=mysqli_connect('localhost',"root","", "pls",3306);
    $result=mysqli_query($con,$sql) or die ("Nem siker??lt ".$sql);
        while(list($id,$megnevezes,$suly,$ar,$feladas_datum,$cimzettneve,$partnercegneve,$fazis, $alkalmazottid)=mysqli_fetch_row($result)) {
        
            echo "<tr>";
                echo '<form name="deletemodifyOrder" method="post" action="deletemodifyOrder.php" enctype=multipart/form-data>';
            if($aut == 'admin' || $aut == 'felvivo')
            {
                echo "<th scope='row'>";
                    echo "<button type='submit' name='reszletek' class='btn btn-primary'>R??szletek</button>";            
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
                            case 1 : echo "El??k??sz??t??s";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 2 : echo "Csomagol??s";
                                if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 3 : echo "Felc??mz??s";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 4 : echo "Kisz??ll??t??s";
                                    if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            case 5 : echo "Kisz??ll??tva";
                                if($alkalmazottid != 0)
                                        echo " alatt";
                                    break;
                            
                        }
                echo "</td>";
                if($aut == 'dolgozo')
                {
                    echo "<td>";
                    if($alkalmazottid == 0 && $fazis != 4)
                        echo "<button type='submit' name='elvallalas' class='btn btn-primary'>Elv??llalom</button>";
                    else if($fazis != 4 && $alkalmazottid == $sajatid)
                        echo "<button type='submit' name='changestatus' class='btn btn-primary'>K??SZ</button>";
                    echo "</a></td>";
                }
            
                else if($aut == 'futar')
                {
                    echo "<td>";
                    if($alkalmazottid == 0 && $fazis == 4)
                        echo "<button type='submit' name='elvallalas' class='btn btn-primary'>Elv??llalom</button>";
                    else if($fazis != 5 && $alkalmazottid == $sajatid)
                        
                        echo "<button type='submit' name='changestatus' class='btn btn-primary'>K??SZ</button>";
                        
                    echo "</a></td>";
                }
                
                echo '<input type="hidden" name="partnercegneve" value="'.$fazis.'">';
                
                if($aut == 'admin' || $aut == 'felvivo')
                {
                    echo "<td><button type='submit' name='modifyOrder' class='btn btn-warning'>M??dos??t??s</button></td>";
                    echo "<td><button type='submit' name='deleteOrder' class='btn btn-danger'>T??rl??s</button></td>";
                }
                
                echo '</form>';
            echo "</tr>";
        }
        echo '</table></div>';
        echo '</div>';
    }
    
    ?> 


