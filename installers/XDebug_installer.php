<!DOCTYPE html>
<html>
<head>
  <title>XDebug installer</title>
</head>
<body>
  <form action="XDebug_installer.php" method="POST">
 Sudo credentials for authentication: <input type="text" name="sudopass"> <br />
<input type="submit">
</form>

<?php 
  userInput = $_POST['sudopass'];
  if (isset($userInput)) {
    system("su " . $userInput);   // LOL.. 
    }
  else {
    echo "<b><p>Sudo password not inputted</p></b>";
  }
?>

</body>
</html>

  
