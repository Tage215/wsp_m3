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

<h1>Välkommen till Webbserverprogrammering 1</h1>
<h2>Moment 2</h2>
<p>Vi kommer använda include() för att länka in sidor i vår mall.</p>