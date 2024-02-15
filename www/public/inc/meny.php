<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }   
?>

<h1>Innehåll</h1>
<ul>
    <li><a href="index.php">Hem</a></li>
    <li><a href="index.php?page=blogg">Blogg</a></li>
    <li><a href="index.php?page=bilder">Bilder</a></li>
    <li><a href="index.php?page=kontakt">Kontakt</a></li>
    <?php 
        if(isset($_SESSION['inloggad'])){
    ?>
    <li><a href="index.php?page=logOut">Logga ut</a></li>
    <li><a href="index.php?page=klotter">Klotterplank</a></li>
    <?php 
        }else{ 
    ?>
    <li><a href="index.php?page=logIn">Logga in</a></li>
    <?php 
        } 
    ?>
</ul>