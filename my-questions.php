<?php   
        require('actions/users/securityAction.php');
        require('actions/questions/myQuestionsAction.php');
      
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
    <link rel="stylesheet" href="assets/style.css">
    
    
    <!--code javascript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javascript -->
    
    <title>Forum</title>
</head>

<body>
    <?php include ('includes/navbar.php') ?>

    <br></br>
    <div class="container">
    <?php
            while($question = $getAllMyQuestions->fetch()){
    ?>
                
                <div class="card">
                    <h5 class="card-header">
                    <a href="article.php?id=<?php echo $question['id']; ?>"> 
                      <?php echo $question['title'];?>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?php echo $question['description']; ?>
                        </p>
                        <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Acceder à la question </a>
                        <a href="edit-question.php?id=<?=$question['id'];?> " class="btn btn-warning">Modifier la question </a>
                        <a href="actions/questions/deleteQuestionAction.php?id=<?=$question['id'];?> " class="btn btn-danger">Supprimer la question </a>
                    </div>
                    </div>
                    <br></br>
                <?php

            }
            
            ?>

        
    
    


</div>
</body>
</html>