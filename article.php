<?php 
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
        if(isset($question_date_publication)){
        ?>


       <?php 
    }

    ?>
    <?= $question_title ?>

    </div>






</body>
</html>