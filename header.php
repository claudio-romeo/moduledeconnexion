


<header>
      <nav>
          <ul>
              <li class="tete"><a href="index.php">Accueil</a></li>
          </ul>

          <ul class="listindex">
              <li><a href="inscription.php">inscription</a></li>
              <li><a href="profil.php">profil</a></li>
<?php 
if(isset($_SESSION['id']))
{
?>
              <li><a href="deconnexion.php">deconnexion</a></li>
<?php
}
else {
?>
    <li><a href="connexion.php">connexion</a></li>
    <?php
}
?>
          </ul>
      </nav>
  </header>