<?php 
include("bdd.php");
$requete = mysqli_query($bdd, "SELECT * FROM utilisateurs ORDER BY id DESC " );
$result = mysqli_fetch_all($requete);


?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    

<ul>
<?php 
    foreach($result as $key => $value)
    {
        echo "<li> $value[1] $value[2] $value[3] </li>";
    }
?>

  
</ul>
</body>
</html>