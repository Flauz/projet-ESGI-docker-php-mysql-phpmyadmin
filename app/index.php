<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From users';
$result = mysqli_query($conn, $query);
?>

<html>

<head>
    <title>Hello World</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <?php echo "<h1><center>Hello World</center></h1>"; ?>

        <?php
        echo '<table class="table table-striped" border="1px solid black" border-radius="10px">';
        echo '<thead><tr><th>n°</th><th>first name</th><th>last name</th></tr></thead>';
        while ($value = $result->fetch_array(MYSQLI_ASSOC)) {
            echo '<tr>';
            foreach ($value as $element) {
                echo '<td>' . $element . '</td>';
            }

            echo '</tr>';
        }
        echo '</table>';

        echo '<a href="form.php"><p>Sign up</p></a>';

        $result->close();

        mysqli_close($conn);

        ?>
    </div>
</body>

</html>