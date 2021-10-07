<?php
    session_start();
    $_SESSION['userLogin'] = "";
    require('../components/init.inc.php');
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <form action="../controller/loginHandler.php" method="post" action="controller/loginHandler.php" enctype="multipart/form-data">
                    <label class="form-label">Felhasználónév</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Felhasználónév">
                    <label class="form-label" style="margin-top: 20px;">Jelszó</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Jelszó">
                    <button type="submit" class="btn btn-login text-center" name="login" style="margin-top: 20pt;">Bejelentkezés</button>
                </form>
            </div>
        </div>
        
        <div class="col-2"></div>
    </div>
</div>

<?php
    require('../components/footer.inc.php')
?>