<?php 
include("bdd.phpinfo")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <?php
    include("link.php") ?>

    <title>inscription</title>
</head>
<?php
include("header.php")
?>

<body>
<form id="bas">
    <table>
            <input placeholder="Nom">
            <input placeholder="Prenom">
            <input placeholder="Password">
            <input placeholder="Confirmé votre Pass">
            <input placeholder="Email">
         <button type = "submit">Envoyer</button>
         </table>
        </form>
</body>

<?php
include("footer.php")
?>


</html>