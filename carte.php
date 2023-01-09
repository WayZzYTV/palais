<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  include_once('./php/config.php');

  $db = connexion_bdd();

  $thai = $db->prepare("SELECT * from thai");
  $thai->execute();
  $thai = $thai->fetchAll();

  $maison = $db->prepare("SELECT * from maison");
  $maison->execute();
  $maison = $maison->fetchAll();

  $vapeur = $db->prepare("SELECT * from vapeur");
  $vapeur->execute();
  $vapeur = $vapeur->fetchAll();

  $potage = $db->prepare("SELECT * from potage");
  $potage->execute();
  $potage = $potage->fetchAll();

  $hors = $db->prepare("SELECT * from hors");
  $hors->execute();
  $hors = $hors->fetchAll();

  $fruits = $db->prepare("SELECT * from fruits");
  $fruits->execute();
  $fruits = $fruits->fetchAll();

  $volaille = $db->prepare("SELECT * from volaille");
  $volaille->execute();
  $volaille = $volaille->fetchAll();

  $viande = $db->prepare("SELECT * from viande");
  $viande->execute();
  $viande = $viande->fetchAll();

  $nouilles = $db->prepare("SELECT * from nouilles");
  $nouilles->execute();
  $nouilles = $nouilles->fetchAll();
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
          <a href="carte.php" class="btn-item active">Carte</a>     
        </li>
        <li class="nav-item">
          <a href="boissons.php" class="btn-item">Boissons</a>     
        </li>      
        <li class="nav-item">
          <a href="menus.html" class="btn-item">Menus</a>
        </li>
        <li class="nav-item">
          <a href="galerie.html" class="btn-item">Galerie</a>
        </li>        
        <li class="nav-item">
          <a href="contact.html" class="btn-item">Contact</a>  
        </li>
      </ul>
        
      <div class="menu-btn">
        <div class="menu-btn__burger"></div>
      </div>
        
      <div class="corps-burger">
        <ul class="burger-list">
          <li class="burger-item burger-item1"><a class="link" href="index.html">Accueil</a></li>
          <li class="burger-item burger-item2"><a class="link active" href="carte.php">Carte</a></li>
          <li class="burger-item burger-item3"><a class="link" href="boissons.php">Boissons</a></li>
          <li class="burger-item burger-item4"><a class="link" href="menus.html">Menus</a></li>
          <li class="burger-item burger-item5"><a class="link" href="galerie.html">Galerie</a></li>
          <li class="burger-item burger-item6"><a class="link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    
      <script src="./script/main.js"></script>   
    </nav>   
  </header>

  <section class="page">

    <div class="liste-carte">

      <div class="carte">
        <div class="titre">
          <h2>Spécialités Thaïlandaises</h2>
          <span>pimenté</span>
        </div>
        <div class="produits">
        <?php
          foreach($thai as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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
          <h2>Spécialités Maison</h2>
          <span>* réservation</span>
        </div>
        <div class="produits">
        <?php
          foreach($maison as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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
          <h2>Potages</h2>
        </div>
        <div class="produits">
        <?php
          foreach($potage as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Hors d'oeuvres</h2>
        </div>
        <div class="produits">
        <?php
          foreach($hors as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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
          <h2>Fruits de Mer</h2>
        </div>
        <div class="produits">
        <?php
          foreach($fruits as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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
          <h2>Volailles</h2>
        </div>
        <div class="produits">
        <?php
          foreach($volaille as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>

        <div class="titre">
          <h2>Viandes</h2>
        </div>
        <div class="produits">
        <?php
          foreach($viande as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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
          <h2>Cuisine Vapeur</h2>
        </div>
        <div class="produits">
        <?php
          foreach($vapeur as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
            <div class="trait"></div>
            <div class="prix"><?=$ligne['prix']?></div>
          </div>
        <?php
          }
        ?>
        </div>
        
        <div class="titre">
          <h2>Légumes Nouilles Riz</h2>
        </div>
        <div class="produits">
        <?php
          foreach($nouilles as $ligne) {
        ?>
          <div class="ligne">
            <div class="code"><?=$ligne['code']?><span>.</span></div>
            <div class="plat"><p><?=$ligne['plat']?></p></div>
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