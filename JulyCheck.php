<!DOCTYPE html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <meta charset="UTF-8">
    <title>July check</title>

  </head>
  <body>
    <?php

      function july_check() {
        $today = date("m");
        $month = date("F");
        echo "<p>It's $month.</p>";
        if ($today == 7) {
          echo "It's July, so it can get really hot.";
        }
        else {
          echo "It’s not July, so at least we’re not in the peak of the heat.";
        }
      }

      july_check();

    ?>

  </body>
</html>
