<?php
    if(isset($_POST["newentry"]))  
    {
        require "database.php";
        
        
        
        $dbname="pls";
        $con=connect("root","", $dbname);
        
        $query="insert into cimzett(nev, lakcim, telefonszam, email) values ('".$_POST['cimzett_nev']."' ,'" .$_POST['cimzett_lakcim']."' ,'" .$_POST['cimzett_tel']."' ,'" .$_POST['cimzett_email']."')";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }
        $query="insert into megbizas(megnevezes, suly, ar) values ('".$_POST['csomaginfo_megnevezes']."','"
                .$_POST['csomaginfo_suly']."','".$_POST['csomaginfo_ar']."')";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }
        $query="insert into csomaginfo(megnevezes, suly, ar) values ('".$_POST['csomaginfo_megnevezes']."','"
                .$_POST['csomaginfo_suly']."','".$_POST['csomaginfo_ar']."')";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }
                            
        


        mysqli_close($con);
        echo '<meta http-equiv="refresh" content="0; URL=../view/menu.php">';

            
    }
       

    
?>

