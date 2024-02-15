<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(isset($_SESSION['inloggad'])){
    echo "Inloggad";
} else {
    echo "Inte inloggad";
}
?>