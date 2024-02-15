<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }  

    $_SESSION = array(); // Tömmer sessionsarrayen    
    session_destroy();
    
    echo "<h1>Utloggad</h1>"
?>