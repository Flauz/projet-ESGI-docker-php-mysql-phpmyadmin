<?php
$conn = mysqli_connect('db', 'user', 'test', 'myDb', 3306);
mysqli_set_charset($conn, "utf8");
$query = 'SELECT * From users';
$result = mysqli_query($conn, $query);
?>

<html>

<head>
    <title>Hello...</title>

    <meta charset="utf-8">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <?php echo "<h1><center>Hello World</center></h1>"; ?>

        <?php

        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['password'])) {

            echo 'Bonjour ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' ' . $_POST['password'] . ' !';
        }

        echo '<form method="post">
                <table class="table table-striped" border="1px solid black">
                    <thead>
                        <tr>
                            <td>first name</td>
                            <td><input type="text" name="firstname"</td>
                        </tr>
                        <tr>
                            <td>last name</td>
                            <td><input type="text" name="lastname"</td>
                        </tr>
                        <tr>
                            <td>password</td>
                            <td><input type="password" name="password"</td>
                        </tr>
                    </thead>
                </table>
                <button type="submit">Sign up</button>

                </form>';

        echo '<a href="index.php"><p>list of users</p></a>';

        $result->close();

        mysqli_close($conn);

        ?>
    </div>
</body>

</html>


<?php
