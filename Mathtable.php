<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Math table</title>
    <style>
        body, td, thead {
            padding:12px;
            font-family: monospace;
            font-size: 20px;
        }
        
    </style>
  </head>

  <body>
      <table border="1">
        <?php
            echo "<thead>";
            echo nl2br("PHP assignment by: Agus Judistira (Math table)\n");
            echo "</thead>";
            function createMathTable($howBig) {

              for($i = 1; $i <= $howBig; $i++) {
                  echo "<tr>";
                  for($j = 1; $j <= 3; $j++) {
                    echo "<td >";
                    echo pow($i, $j);
                    echo "</td>";                          
                  }
                  echo "</tr>";
              }                 
            }

            createMathTable(10);
        ?>
    </table>
  </body>
</html>
