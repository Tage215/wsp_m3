<!doctype html>
<html lang="sv">

<head>
    <meta charset="utf-8">
    <title>Länka in sidor med PHP</title>
    <link href="css/styleSheet.css" rel="stylesheet" type="text/css">
</head>

<body>
    <section id="leftColumn">
        <aside>
            <h1>Namn</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nulla tristique elementum nisl, et vehicula neque laoreet ut.
                Praesent sed ultrices purus.
            </p>
        </aside>
    </section>
    <!-- End leftColumn -->
    <main role="main">
        <section>
            <hgroup>
                <h1>Min blogg Nu</h1>
                <h2>I dag gör vi mallar</h2>
            </hgroup>
            <p>Lorem ipsum id duo autem qualisque, cu laoreet eleifend cum. Eu sea
                vidit altera civibus, harum deserunt argumentum ne vim. Eu paulo
                corpora appareat pro, brute everti iuvaret ne vis. Diam incorrupte
                voluptatibus cu vel, nam congue soluta praesent at.
            </p>
        </section>
    </main>       
</body>

</html>

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