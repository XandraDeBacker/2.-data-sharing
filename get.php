<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form class="" action=" " method="get">
      <input type="text" name="rownumber" value="">
      <input type="submit" name="btn" value="submit">
    </form>




    <div>


<?php
echo $_GET['rownumber'];
if(isset($_GET['rownumber'])){
  $row = $_GET['rownumber'];
  echo '<table style = "border-collapse : collapse ; border:1px solid black">';
for($i = 1; $i <= $row; $i++) {
  echo "<tr style='border:2px solid black'><td style='border:2px solid black'>" . $i . "</td>
  <td>" . $i . "</td><td style='border:2px solid black'>" . $i . "</td></tr>";
}
  echo '</table>';
}


?>
</div>



  </body>
</html>
