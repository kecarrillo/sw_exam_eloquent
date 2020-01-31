<!DOCTYPE html>
<html lang="fr">
  <head>
      <meta charset="UTF-8">
      <title>Star Wars - Données autour des personnages</title>
  </head>
  <body>
      <main>
        <div class="container">
            <ul>
                <li><a href="index.php?page=list">Liste</a></li>
                <li><a href="index.php?page=form">Formulaire</a></li>
            </ul>
        </div>
        <?php
          if(isset($_GET['page'])){
            switch ($_GET['page']) {
              case 'list':
                include("main.php");
                break;
              case 'form':
                include("form.php");
                break;
            }
          }
        ?>
      </main>
  </body>
</html>
