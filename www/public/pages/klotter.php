<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8" />
    <title>Klotterplank</title>
</head>

<body>
<h1>Klotterplanket</h1>

<form method="post">
    <label>Meddelande</label><br>
    <textarea name="message" cols="45" rows="5"></textarea><br />    
    <input type="submit" value="Skicka">
</form>

<?php 
if(isset($_POST["message"])){
    $msg = trim(strip_tags($_POST["message"]));

    $name = "<hr><p>Från: " . $_SESSION["user"] . "</p>";
    $msg = "<p>" . $msg . "</p>";

   
    file_put_contents("msg.dat",$name.$msg,FILE_APPEND);
    /**
     * Om filen finns så skrivs innehållet ut
     * Om den inte finns så skapas en tom fil med namnet msg.dat
     *
     * OBS! Sökvägen nedan till 'msg.dat' kan behövas ändras. 
     */
    if(file_exists("msg.dat")){
        echo file_get_contents("msg.dat");
    }
}
?>
</body>
</html>