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

  $blanc = $db->prepare("SELECT * from blanc");
  $blanc->execute();
  $blanc = $blanc->fetchAll();

  $rose = $db->prepare("SELECT * from rose");
  $rose->execute();
  $rose = $rose->fetchAll();

  $rouge = $db->prepare("SELECT * from rouge");
  $rouge->execute();
  $rouge = $rouge->fetchAll();

  $champ = $db->prepare("SELECT * from champagne");
  $champ->execute();
  $champ = $champ->fetchAll();

  $pichet = $db->prepare("SELECT * from pichet");
  $pichet->execute();
  $pichet = $pichet->fetchAll();
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

<body class="boissons">

  <a href="tel:0782900156">
    <svg class="appel" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
    </svg>
  </a>

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
          <a href="galerie.html" class="btn-item">Galerie</a>
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
          <li class="burger-item burger-item2"><a class="link" href="carte.php">Carte</a></li>
          <li class="burger-item burger-item3"><a class="link active" href="boissons.php">Boissons</a></li>
          <li class="burger-item burger-item4"><a class="link" href="menus.html">Menus</a></li>
          <li class="burger-item burger-item5"><a class="link" href="galerie.html">Galerie</a></li>
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
          <span class="grande-bouteille">75cl</span>
          <span class="petite-bouteille">37,50cl</span>
        </div>
        <div class="produits">
        <?php
          foreach($blanc as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['pprix']?></div>
            <div class="prix"><?=$ligne['gprix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Vins Rosés</h2>
          <span class="grande-bouteille">75cl</span>
          <span class="petite-bouteille">37,50cl</span>
        </div>
        <div class="produits">
        <?php
          foreach($rose as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['pprix']?></div>
            <div class="prix"><?=$ligne['gprix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Vins Rouges</h2>
          <span class="grande-bouteille">75cl</span>
          <span class="petite-bouteille">37,50cl</span>
        </div>
        <div class="produits">
        <?php
          foreach($rouge as $ligne) {
        ?>
          <div class="ligne">
            <div class="plat"><p><?=$ligne['libelle']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['pprix']?></div>
            <div class="prix"><?=$ligne['gprix']?></div>
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
          foreach($champ as $ligne) {
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
          <h2>Pichets "Vin de Tables"</h2>
        </div>
        <div class="produits">
        <?php
          foreach($pichet as $ligne) {
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

    </div>

  </section>

  <footer>
    <p>Copyright © 2023 PALAIS IMPERIAL</p>
    <a href="mentions.html">Mentions Légales </a>
  </footer>
    
</body>
</html>