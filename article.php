<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php');
    require('actions/questions/postAnswerAction.php');
    require('actions/questions/showAllAnswersOfQuestionAction.php');
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
   <?php include 'includes/navbar.php'; ?>
    <br><br>

    <div class="container">


    <?php  
    
        // si il y'a une errormsg , afficher errorMsg
        if(isset($_errorMsg)){
            echo $errorMsg;

        }

        //
        if(isset($question_publication_date)){
        ?>
        <section class="show-content">
            <h3><?= $question_title; ?></h3>
            <hr>
            <p><?= $question_content; ?></p>
            <hr>
            <small><?= '<a href="profil.php?id='.$question_id_author.'">'.$question_pseudo_author . '</a> ' . $question_date_publication; ?></small>
        </section>
        <br>
        <section class="show_answers">

            <form class="form-group" method="POST">
                <div class="mb-3">
                    <label for="answer" class="form-label">Réponse :</label>
                    <textarea name="answer" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-primary" type="submit" name="validate">Répondre </button>
                </div>
            </form>
            <br>
            
               

            <?php
                while($answer = $getAllAnswersOfThisQuestion->fetch()){  
            ?>

                <div class="card">
                    <div class="card-header">
                        <a href="profil.php?id=<?= $answer['id_author']; ?>"><?= $answer['pseudo_author']?></a>
                    </div>
                    <div class="card-body">
                        <?= $answer['content'] ?>  
                    </div>
                    <div class="card-footer">
                    <?= $answer['date_answer'] ?> 
                    </div>
                </div>
                <br>
            <?php 
            }
            ?>    

        </section>
       <?php 
    }

    ?>
    <br>

    

    </div>






</body>
</html>