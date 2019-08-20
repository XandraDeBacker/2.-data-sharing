<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data sharing between Front- & Back - end</title>
  </head>
  <body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  username: <input type="text" name="username">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $username = $_POST['username'];
    if (empty($username)) {
        echo "username is empty";
    } else {
        echo "Welcome, " . $username;
    }
}
?>
  </body>
</html>
