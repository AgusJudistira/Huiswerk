<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Math table</title>
    <style>
        th {
            color: white;
            background-color: blue;
            padding: 12px;
        }
        
        td, tr {
            padding: 12px;
            font-family: monospace;
            font-size: 20px;
        }
        
        td {
            text-align: right;
            padding-right: 24px;
        }

         
        tr:nth-child(odd) {
            background-color: aliceblue;
        }

        tr:nth-child(even) {
            background-color: lightblue;
        }
        
    </style>
  </head>

  <body>
      <table border="1">
        <?php
            echo "<thead><tr><th colspan='3'>";
            echo nl2br("PHP assignment by: Agus Judistira (Math table)\n");
            echo "</th></tr></thead>";
          
            function createMathTable($howBig) {

              for($i = 1; $i <= $howBig; $i++) {
                  echo "<tr>";
                  for($j = 1; $j <= 3; $j++) {
                    echo "<td align='center'>";
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
