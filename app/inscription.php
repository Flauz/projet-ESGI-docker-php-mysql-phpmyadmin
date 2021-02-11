<?php

if (isset($_POST['signup'])) {

    $uprename = trim($_POST['uprename']);
    $uname = trim($_POST['uname']); 
    $upass = trim($_POST['pass']);

    // hash password with SHA256;
    $password = hash('sha256', $upass);

        $conn = mysqli_connect('db', 'user', 'test', 'testdatabase', 3306);
        mysqli_set_charset($conn, "utf8");
        $stmts = $conn->prepare("INSERT INTO Users(prenom,nom,password) VALUES(?, ?, ?)");
        $stmts->bind_param("sss", $uprename, $uname, $password);
        $res = $stmts->execute();//get result
        $stmts->close();

    

}
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/style.css" type="text/css"/>
</head>
<body>

<div class="container">

    <div id="login-form">
        <form method="post" autocomplete="off">

            <div class="col-md-12">

                <div class="form-group">
                    <center><h1 class="">Formulaire d'inscription</h1></center>
                </div>

                <div class="form-group">
                    <hr/>
                </div>

                <!-- <?php
                if (isset($errMSG)) {

                    ?>
                    <div class="form-group">
                        <div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                        </div>
                    </div>
                    <?php
                }
                ?> -->
               
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="uprename" class="form-control" placeholder="Votre prénom" required/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                        <input type="text" name="uname" class="form-control" placeholder="Votre nom" required/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        <input type="password" name="pass" class="form-control" placeholder="Votre mot de passe"
                               required/>
                    </div>
                </div>

                
                <div class="form-group">
                    <button type="submit" class="btn    btn-block btn-primary" name="signup" id="reg">Valider</button>
                </div>

                <div class="form-group">
                    <hr/>
                </div>
            </div>

        </form>
    </div>

</div>

<div>
	</br>
	    <P>
            <center>
                <a href="index.php" class="btn btn-primary btn-lg active" role="button">Afficher la liste des utilisateurs</a>
            </center>
        </P>
    </div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/tos.js"></script>

</body>
</html>