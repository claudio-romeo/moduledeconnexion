<?php 
include("bdd.php");

if (isset($_SESSION['id']))
{
    




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css" />

    <?php
    include("link.php") ?>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="edition">
<?php
include("header.php")
?>
    <h2>Profil de <?php

echo $_SESSION['login']; ?></h2>

<?php
        include("footer.php")
        ?>
</body>
</html>
<?php
}
?>