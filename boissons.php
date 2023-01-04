<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  include_once('./php/config.php');

  $db = connexion_bdd();

  $apero = $db->prepare("SELECT * from aperitif");
  $apero->execute();
  $apero = $apero->fetchAll();

  $digestif = $db->prepare("SELECT * from digestif");
  $digestif->execute();
  $digestif = $digestif->fetchAll();

  $biere = $db->prepare("SELECT * from biere");
  $biere->execute();
  $biere = $biere->fetchAll();

  $soft = $db->prepare("SELECT * from soft");
  $soft->execute();
  $soft = $soft->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Palais impérial</title>
    <link rel="shortcut icon" href="./ressources/ICONE.svg" type="image/x-icon"/>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

  <header>
    <nav>

      <ul class="nav-list">
        <li class="nav-item">
          <a class="logo" href="index.html">Palais <span>impérial</span></a>
        </li>           
        <li class="nav-item">
          <a href="index.html" class="btn-item">Accueil</a> 
        </li>           
        <li class="nav-item">
          <a href="carte.php" class="btn-item">Carte</a>     
        </li>
        <li class="nav-item">
          <a href="boissons.php" class="btn-item active">Boissons</a>     
        </li>      
        <li class="nav-item">
          <a href="menus.html" class="btn-item">Menus</a>
        </li>
        <li class="nav-item">
          <a href="#" class="btn-item">Galerie</a>
        </li>        
        <li class="nav-item">
          <a href="#" class="btn-item">Contact</a>  
        </li>
      </ul>
        
      <div class="menu-btn">
        <div class="menu-btn__burger"></div>
      </div>
        
      <div class="corps-burger">
        <ul class="burger-list">
          <li class="burger-item burger-item1"><a class="link" href="index.html">Accueil</a></li>
          <li class="burger-item burger-item2"><a class="link" href="carte.html">Carte</a></li>
          <li class="burger-item burger-item3"><a class="link active" href="boissons.php">Boissons</a></li>
          <li class="burger-item burger-item4"><a class="link" href="menus.html">Menus</a></li>
          <li class="burger-item burger-item5"><a class="link" href="#">Galerie</a></li>
          <li class="burger-item burger-item6"><a class="link" href="#">Contact</a></li>
        </ul>
      </div>
    
      <script src="./script/main.js"></script>   
    </nav>   
  </header>

  <section class="page">

    <div class="liste-vins">

      <div class="carte">
        <div class="titre">
          <h2>Apéritifs</h2>
        </div>
        <div class="produits">
        <?php
          foreach($apero as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Digestifs</h2>
        </div>
        <div class="produits">
        <?php
          foreach($digestif as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

      </div>

      <div class="carte">
        <div class="titre">
          <h2>Bières</h2>
        </div>
        <div class="produits">
        <?php
          foreach($biere as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Softs</h2>
        </div>
        <div class="produits">
        <?php
          foreach($soft as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

      </div>

      <div class="carte-vin">
        <div class="titre">
          <h2>Vins Blancs</h2>
        </div>
        <div class="produits">
        <?php
          foreach($apero as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Vins Rouges</h2>
        </div>
        <div class="produits">
        <?php
          foreach($digestif as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Champagnes</h2>
        </div>
        <div class="produits">
        <?php
          foreach($digestif as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Pichets "Vin de Tables"</h2>
        </div>
        <div class="produits">
        <?php
          foreach($digestif as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

      </div>

    </div>

  </section>

  <footer>
    <p>Copyright © 2023 PALAIS IMPERIAL</p>
    <a href="mentions.html">Mentions Légales </a>
  </footer>
    
</body>
</html>