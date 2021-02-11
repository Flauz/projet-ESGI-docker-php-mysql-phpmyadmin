<?php
$conn = mysqli_connect('db', 'user', 'test', 'testdatabase', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From Users';
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<html>
 <head>
  <title>Groupe 5</title>

  <meta charset="utf-8"> 

  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
    <?php echo "<h1><center>Groupe 5 ESGI Projet DOCKER</center></h1>";
          echo "<h3><center>Voici la liste des utilisateurs:</center></h3>"; ?>

    <?php
    echo '<table class="table table-striped" border="3">';
    echo '<thead><tr><th>N°</th><th>PRENOM</th><th>NOM</th><th>PASSWORD</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
       
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }

        echo '</tr>';
    }
    echo '</table>';

    $result->close();

    mysqli_close($conn);

    ?>
    </div>

    <div>
	</br>
	    <P>
            <center>
                <a href="inscription.php" class="btn btn-primary btn-lg active" role="button">Cliquez ici pour vous inscrire</a>
            </center>
        </P>
    </div>
</body>
</html>