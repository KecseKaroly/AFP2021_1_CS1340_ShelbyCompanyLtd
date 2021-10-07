<?php
            require 'database.php';
            if(isset($_POST["login"])){
                $dbname="pls";
                $con=connect("root","", $dbname);
                
		$query="select felhasznalonev,jelszo from alkalmazott where felhasznalonev='".$_POST['username']."'";
		$result=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
                
                list($username,$passwd)=mysqli_fetch_row($result);
		if($passwd==md5($_POST['password']) && $username==($_POST['username']))
		{
                    session_start();
                    $query="select jog from alkalmazott where felhasznalonev='".$_SESSION['user']."'";
                    $res=mysqli_query($con,$query) or die ("Hiba: ".mysqli_error($con));
                    list($_SESSION['aut'])=mysqli_fetch_row($res);
                    $_SESSION["user"]=$username;
                    $cookie_name = $username;
                    $a=getenv("REMOTE_ADDR"); 
                    $cookie_value = $a;
                    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
                    $_SESSION['userLogin'] = "Loggedin";
                    echo '<meta http-equiv="refresh" content="0; URL=../view/menu.php">';                  
        } 
        else{	
                    echo "<br/>Hibás jelszó vagy felhasználónév";	
                    echo "<br/><a href=../view/>Vissza a bejelentkezéshez</a>";
		}
		
                mysqli_close($con);
        
            }
                
        ?>
