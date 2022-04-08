<?php require('actions/questions/myQuestionsAction.php');
      require('actions/users/securityAction.php');
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
                      <?php echo $question['title'];?>
                    </h5>
                    <div class="card-body">
                        <p class="card-text">
                            <?php echo $question['description']; ?>
                        </p>
                        <a href="#" class="btn btn-primary">Acceder à la question </a>
                        <a href="#" class="btn btn-warning">Modifier la question </a>
                        
                    </div>
                    </div>
                    <br></br>
                <?php

            }
            
            ?>

        
    
    


</div>
</body>
</html>