<?php
//Seite darf nur per POST aufgerufen werden
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST['privateKey']) || empty($_POST['publicKey'])) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Bestätigung</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>BESTÄTIGUNG</header>
<h1>Danke für Ihre Reservation!</h1>
<h2>Bitte merken Sie Ihr public- und private key um später Ihre Reservation anschauen zu können.</h2>
<h3>Ihr private-key:</h3>
<h4>(mit den können Sie Ihre Reservation bearbeiten)</h4>

<input type="text" id="privateKey" value="<?php echo htmlspecialchars($_POST['privateKey'] ?? ''); ?>" readonly>

<h3>Ihr public-key:</h3>
<h4>(mit den können Sie Ihre Reservation einblenden lassen)</h4>

<input type="text" id="publicKey" value="<?php echo htmlspecialchars($_POST['publicKey'] ?? ''); ?>" readonly>

<a href="index.html">Zurück zur Hauptseite</a>

</body>
</html>