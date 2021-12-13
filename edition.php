<?php 
include("bdd.php");
// si on est connecté 
if (isset($_SESSION['login'])) 
{
    // alors on met le login dans une variable 
    $login_entree=$_SESSION['login'];
    // Je vais recuperer les informations de la personne connecter 
    // $requete_connect =mysqli_query($bdd,"SELECT * FROM utilisateurs WHERE login='$login_entree' ");
    // $result= mysqli_fetch_assoc($requete_connect);var_dump(($result));
      $nom=$_SESSION['nom'];
    $prenom=$_SESSION['prenom'];

}

else {
    header('Location: index.php');

}
// exit();
    
    
  




if(isset($_POST['soumis'])) 
{
    
    if($_POST['pass'] == $_POST['pass2'])

    {
        $newlogin= htmlspecialchars($_POST['newlogin']);
        $newnom= htmlspecialchars($_POST['newnom']);
        $newprenom= htmlspecialchars($_POST['newprenom']);
        $newpass= password_hash($_POST['pass'], PASSWORD_DEFAULT);


        $requete =mysqli_query($bdd, "SELECT COUNT(*) FROM `utilisateurs` WHERE login = '$newlogin'");
         $result = mysqli_fetch_all($requete);
        $count= count($result);
        var_dump($result);
        var_dump($count);


        if($result[0][0] == 1 && $_POST['newlogin'] !=$login_entree)
        {
       echo $erreur="login non disponible ! ";
        }

        else 
        {
            
    
            $requete_insert= mysqli_query($bdd, "UPDATE `utilisateurs` SET `login`= '$newlogin',`prenom`= '$newprenom',`nom`= '$newnom',`password`= '$newpass'where login = '$login_entree'");
        
            $_SESSION['login']= $newlogin;
            $_SESSION['nom']= $newnom;
            $_SESSION['prenom']= $newprenom;
            $_SESSION['password']= $newpass;
            var_dump($_SESSION);

            echo "UPDATE `utilisateurs` SET `login`= '$newlogin',`prenom`= '$newprenom',`nom`= '$newnom',`password`= '$newpass'where login = '$login_entree'";

            header('location: profil.php?id='.$_SESSION['id']);
        }
        

    }
        else 
        
        {
            echo $erreur= "Erreur de saisie";
        }
        
   
}


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

<form action="" method="POST">
    <table>
        </table>
        <input type="text" name="newlogin" placeholder="Modifier votre login" value="<?php echo $login_entree;?>"/><br>
        <input type="text" name="newnom" placeholder="modifier votre nom" value="<?php echo $nom;?>"
        /><br>
        <input type="text" name="newprenom" placeholder="modifier votre prenom" value="<?php echo $prenom;?>"/><br>
        <input type="password" name="pass" placeholder="Nouveau Password"/><br>
        <input type="password" name="pass2" placeholder="verifier votre password"/><br>
        <input type="submit" name="soumis" value=" Mettre vos informations a jour">
        <?php 
        if(isset($erreur))
             {
                 echo '<font color="red"> '.$erreur.'</font>';
             }
        
            ?>

</form>

<?php
        include("footer.php")
        ?>
</body>
</html>
