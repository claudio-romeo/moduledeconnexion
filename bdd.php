
<?php 
session_start();
$bdd = mysqli_connect('localhost' , 'root','','claudio-romeo-moduleconnexion');
mysqli_set_charset($bdd, 'utf8');
?>

<?php 
// $bdd = new PDO('mysql:host=127.0.0.1;dbname=moduleconnexion','root','')
?>