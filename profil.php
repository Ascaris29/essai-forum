<?php 
session_start();
require('actions/users/showUsersProfilAction.php');
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

