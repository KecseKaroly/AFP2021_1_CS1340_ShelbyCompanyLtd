<?php
    if(isset($_POST["newentry"]))  
    {
        require "database.php";
        
        
        
        $dbname="pls";
        $con=connect("root","", $dbname);
        $query="select count(id) as total from cimzett where  nev = '".$_POST['cimzett_nev']."' and lakcim = '" .$_POST['cimzett_lakcim']."'";
        $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
        list($result)=mysqli_fetch_row($res);
        if ($result == 0) {
            $query="insert into cimzett(nev, lakcim, telefonszam, email) values ('".$_POST['cimzett_nev']."' ,'" .$_POST['cimzett_lakcim']."' ,'" .$_POST['cimzett_tel']."' ,'" .$_POST['cimzett_email']."')";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }
        }
        
        $query="insert into megbizas(megnevezes, suly, ar, feladas_datum, cimzettid ,partnercegid) values ('".$_POST['csomaginfo_megnevezes']."','".$_POST['csomaginfo_suly']."','".$_POST['csomaginfo_ar']."', CURRENT_TIMESTAMP,
        (select id from cimzett where  nev = '".$_POST['cimzett_nev']."' and lakcim = '" .$_POST['cimzett_lakcim']."'), (select id from partnercegek where  nev = '".$_POST['partnercegek_nev']."'))";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }

        $query="select max(id) from megbizas";
        $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
        list($id)=mysqli_fetch_row($res);
        
        $query="INSERT INTO csomag_elokeszites VALUES(".$id.",0,1,0)";
        $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));


        mysqli_close($con);
        echo '<meta http-equiv="refresh" content="0; URL=../view/newentryform.php">';

            
    }
       

    
?>

