<h1>Webbserverprogrammering 1 med Bygren</h1>
<?php 
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $date = date("Y-m-d");    
    echo "<time> $date </time>";
    if(isset($_SESSION['inloggad'])){
        $user = $_SESSION['user'];
        echo "Inloggad som: $user";
    }
?>