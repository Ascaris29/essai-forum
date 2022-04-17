<?php 
session_start();
require('actions/users/showUsersProfilAction.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php require ('includes/head.php'); ?>
<body>
<?php require('includes/navbar.php'); ?>
<br><br>


<div class="container">
        <?php 
        if(isset($errorMsg)){
            echo $errorMsg;   
        }


        if(isset($getHisQuestionExists)){
        ?>

        <div class="card">
            <div class="card-body">
                <h4>@<?= $user_pseudo; ?></h4>
                <hr>
                <p><?= $user_lastname . ' ' . $user_firstname; ?></p>
            </div>
        </div>
        <br>
        <?php

            while($question = $getHisQuestionExists->fetch()){
            ?>  
            <div class="card">
                <div class="card-header">
                    <?php echo $question['title']; ?>
                </div>
                <div class="card-body">
                    <?php echo $question['content']; ?>
                </div>
                <div class="card-footer">
                    <?php echo $question['pseudo_author']; ?> le <?= $question['date_publication']; ?>
                </div>
            </div>
            <br>
            <?php
            }
            ?>

<?php


















}

?>



</div>
</body>
</html>

