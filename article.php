<?php 
    session_start();
    require('actions/questions/showArticleContentAction.php');
    require('actions/questions/postAnswerAction.php');
?>


<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>

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
            <small><?= $question_pseudo_author . ' ' . $question_date_publication; ?></small>
        </section>
        <br>
        <section class="show_answers">

            <form class="form-group" method="POST">
                <div class="mb-3">
                    <label for="anwser" class="form-label">Réponse :</label>
                    <textarea name="answer" class="form-control"></textarea>
                    <br>
                    <button class="btn btn-primary" type="submit" name="validate">Répondre </button>
                </div>
              
            </form>

        </section>
       <?php 
    }

    ?>
    <br>

    

    </div>






</body>
</html>