<?php 

require('actions/users/securityAction.php');
require('actions/questions/showAllQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--code css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="assets/index.css">
    <!--code javascript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javascript -->
    
    <title>Le forum d'ascaris </title>
</head>

<body>
   <?php include ('includes/navbar.php'); ?>
   <br><br>

   <div class="container">

      <form method="GET" class="form-search">
         <div class="form-group row">


            <div class="col-8">
               <input type="search" name="search" class="form-control"> 
            </div>
            <div class="col-4">
               <button class="btn btn-success" type="submit"> Rechercher </button>
            </div>

         </div>

      </form>

      <br>
      <?php

         while($question = $getAllQuestions->fetch()){
            ?>

          <div class="card">
             <div class="card-header">
                <p class="titre"><a href="article.php?id=<?php echo $question['id']; ?>"> 
                <?= $question['title']; ?></a></p>
             </div>
             <div class="card-body">
             <?= $question['content']; ?>
             </div>
             <div class="card-footer">
               <p class="pseudo">Publié par <a href="profil.php?id=<?= $question['id_author']; ?>"> <?= $question['pseudo_author']; ?></a> le <?= $question['date_publication']; ?></p>
             </div>
          </div>
          <br>
            <?php
         }
      ?>




   </div>
   




</body>



</html>


