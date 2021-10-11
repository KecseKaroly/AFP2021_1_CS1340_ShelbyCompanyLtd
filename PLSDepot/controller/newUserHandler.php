<?php
    if(isset($_POST["newuser"]))  
    {
        require "database.php";
        
        
        
        $dbname="pls";
        $con=connect("root","", $dbname);
        
        $query="insert into alkalmazott(teljesnev, felhasznalonev, jelszo, jog) values ('".$_POST['teljesnev']."' ,'" .$_POST['felhasznalonev']."' ,'" .md5($_POST['jelszo'])."' ,'" .$_POST['jog']."')";
                if(mysqli_query($con, $query))
                        echo "Records added successfully.";
                        else{
                                echo "ERROR: Could not execute $query. " . mysqli_error($con);
                            }

        


        mysqli_close($con);
        echo '<meta http-equiv="refresh" content="0; URL=../view/profiles.php">';

            
    }
       

    
?>
