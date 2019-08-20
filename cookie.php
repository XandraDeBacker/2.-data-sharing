<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie php</title>
  </head>
  <body>

<p></p>

<form class="" action=" " method="get">
  <textarea id="myTextarea"> Enter your text:

</textarea>
  <input type="submit" onclick= "setCookie()" name="btn" value="submit">
</form>
<!--De naam van de cookie is input-text en de value is wat er in zal worden geschreven -->
<script type="text/javascript">
function setCookie (){
  document.cookie= "yourText="+ document.getElementById('myTextarea').value
  // event.preventDefault();
  console.log(document.getElementById('myTextarea').value);
}
</script>
<?php
//
if(!isset($_COOKIE["yourText"])) {
    echo "Cookie named ' yourText ' is not set!";
} else {
    echo "Cookie ' yourText ' is set!";
    echo "Value is: " . $_COOKIE["yourText"];
}


?>







  </body>
</html>
