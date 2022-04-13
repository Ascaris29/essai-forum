<?php 
    session_start();
    require('actions/questions/ShowArticleContentAction.php');
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
        if(isset($question_date_publication)){
        ?>
        <h3><?= $question_title; ?></h3>
        <hr>
        <p><?= $question_content; ?></p>
        <hr>
        <small><?= $question_pseudo_author . ' ' . $question_date_publication; ?></small>


       <?php 
    }

    ?>


    

    </div>






</body>
</html>