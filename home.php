<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Pavé d'Affinois</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="modules/bootstrap-4.5.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="home">
  <div class="container d-flex flex-column align-items-center">
    <?php include 'partials/header.php'; ?>
    <h1>Vous avez trouvé un ticket avec un code unique ?</h1>
    <p class="description">Remplissez-vite le formulaire ci-dessous pour découvrir combien vous avez gagné !</p>

    <form class="form" action="">
      <input class="code" type="text" placeholder="Code Unique" required>
      <input type="text" placeholder="Civilité*" required>
      <div class="row-input">
        <div>
          <input type="text" placeholder="Nom*" required>
        </div>
        <div>
          <input type="text" placeholder="Prénom*" required>
        </div>
      </div>
      <div class="row-input">
        <div>
          <input type="email" placeholder="Adress mail*" required>
        </div>
        <div>
          <input type="text" placeholder="Tèl*" required>
        </div>
      </div>
      <!-- <div class="iban"> -->
      <!-- <div class="square-container">
         
        </div> -->
      <input type="text" placeholder="IBAN*" maxlength="30" required>
      <!-- </div> -->
      <div class="row-input">
        <div>
          <input type="text" placeholder="BIC*" required>
        </div>
      </div>
      <div class="row-input photo">
        <div>
          <label for="ticket-gagnant">Photo du ticket gagnant*</label>
          <input type="file" id="ticket-gagnant" required>
        </div>
        <div>
          <label for="ticket-de-caisse">Photo du ticket de caisse*</label>
          <input type="file" id="ticket-de-caisse" required>
        </div>
      </div>
      <div class="mentions-obligatoires">*mentions obligatoires</div>
      <div class="conditions-container">
        <div class="checkbox">
          <input type="checkbox" name="rules" required>
          <label for="scales">J’ai lu et j’accepte le <a href="reglement.php">règlement</a> du jeu*</label>
        </div>
        <div class="checkbox">
          <input type="checkbox" name="rules" required>
          <label for="scales">J’accepte que mes données personnelles
            soient utilisées dans le cadre du jeu*</label>
        </div>
        <p class="conditions">
          Pavé d’Affinois met en œuvre des traitements de données à caractère personnel ayant pour ﬁnalités la conservation des preuves d’achat, la gestion et le suivi de l’organisation de l’opération de jeu, la vériﬁcation et le contrôle du respect des dispositions du règlement de jeu, l’analyse de la régularité de la participation, la gestion de la relation avec les participants, le pilotage, le reporting et les statistiques. Vous disposez d’un droit d’accès, de rectiﬁcation, de portabilité, d’effacement de vos données à caractère personnel et de limitation du traitement de vos données ainsi que d’un droit d’opposition et du droit de déﬁnir des directives relatives à la conservation, à l’effacement et à la communication de vos données à caractère personnel après votre décès. Pour en savoir plus sur la protection de vos données, consultez l’article 6 des mentions légales.
        </p>
      </div>

      <button type="submit" class="btn btn-primary mx-auto mt-5 d-block">Valider</button>
    </form>
    <?php include 'partials/footer.php'; ?>
  </div>
</body>

</html>
