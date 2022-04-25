<?php
    
    $bdd = new PDO('mysql:host=localhost;dbname=badminton;charset=utf8', 'root', 'root');
    $idAdh = $_GET['id'];

    $requete = "SELECT * FROM adherent,type WHERE typeAdh=numType AND matriculeAdh=$idAdh ";

    $requete = $bdd->query($requete);
    
    $ligne = $requete->fetch();
    $nom = $ligne['nomAdh'];
    $prenom = $ligne['prenomAdh'];

   ?>

   <!DOCTYPE html>
   <html>
   <head>
   	<title>Details Adhérent</title>
   	<meta charset="utf-8">
       <link rel="stylesheet" href="bootstrap4.css">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="index.php">Badminton Project</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
       </button>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                   <a class="nav-link" href="gestionAdh.php">Gestion des adhérents </a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="ajoutAdh.php">Nouveau adhérent</a>
               </li>
               <li class="nav-item">
                   <a class="nav-link" href="chercheAdh.php">Rechercher un adhérent<span
                               class="sr-only">(current)</span></a>
               </li>

           </ul>
       </div>
   </nav>
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-lg-6">
               <div class="card w-100">
                   <div class="card-header">Détails adhérent : <?php echo $nom ; ?>  <?php echo $prenom ; ?></div>
                   <div class="card-body">
                       <table class="table">
                           <?php echo "<tr>
   							<th>Nom</th>
   							<th>".$nom."</th>
   							</tr>";
                           echo "<tr>
   				 			<th>Prénom</th>
   				 			<th>".$prenom."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Matricule</th>
   				 			<th>".$ligne['matriculeAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Adresse</th>
   				 			<th>".$ligne['adresseAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Ville</th>
   				 			<th>".$ligne['villeAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Code Postale</th>
   				 			<th>".$ligne['cpAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Niveau</th>
   				 			<th>".$ligne['niveauAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Type</th>
   				 			<th>".$ligne['typeAdh']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Libelle</th>
   				 			<th>".$ligne['libelleType']."</th>
   				 			</tr>"	;
                           echo "<tr>
   				 			<th>Montant</th>
   				 			<th>".$ligne['montantLicence']."</th>
   				 			</tr>"	;


                           ?>
                       </table>
                   </div>
               </div>
           </div>
       </div>
   </div>






<br><br><br>
<a href="gestionAdh.php">Retour vers la page précédente</a>

  
   </center>
   </body>
   </html>