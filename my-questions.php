<?php   
        require('actions/users/securityAction.php');
        require('actions/questions/myQuestionsAction.php');
      
?>


<!DOCTYPE html>
<html lang="en">
<?php include ('includes/head.php') ?>
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