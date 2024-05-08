<?php

  require_once("globals.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Perhekalenteri</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
  <body>
    <header>
      <h1>Perhekalenteri</h1>
    </header>
    <section>
      <div class="grid-container">
        <div class="item1">
          <form action="kalenteri.php" method="GET" target="_blank">

          Vuosi: <input type="number" name="year" value="<?php echo date("Y"); ?>"><br>
        </div>
        <div class="item2">

        Kuukausi:
        <select name="month">
        <?php
          foreach($months as $key => $value) {
            echo "<option value='$key'>$value</option>\n";
          }
        ?>
        </select><br>
        </div>
        <div class="item3">

        Otsikkofontti:
        <select name="header">
        <?php
          foreach($headerfonts as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br>
        </div>
        
        <div class="item4">
        Kuva:
        <select name="bgimage">
        <?php
          foreach ($bgimages as $key => $value) {
            echo "<option value='$key'>$value[name]</option>\n";
          }
        ?>
        </select><br>
        </div>
        <div class="item5">

        Perheenjäsenet:
        <textarea name="names" rows="5"><?= $defaultnames ?></textarea><br>
        </div>
        <div class="item6">
        <input type="submit" value="Avaa kalenterisivu" class="button">
        </div>

      </form>
        </div>
    </section>
    <footer>
      <hr>
      <div>perhekalenteri by VK</div>
    </footer>
  </body>
</html>
