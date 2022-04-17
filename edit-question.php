<?php 
        require('actions/users/securityAction.php');
        require('actions/questions/getInfosOfEditedQuestionAction.php');
        require('actions/questions/editQuestionAction.php');
      
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
<?php include ('includes/navbar.php'); ?>    

<br><br>

    <div class="container">
    <?php 
          if(isset($errorMsg)){ 
            echo '<p>'.$errorMsg.'</p>'; 
            }
    ?>
    <?php 
        if(isset($question_content)){ 
        ?>

            
            <form method="POST">

        
            <div class="mb-3">
                <label for="pseudo" class="form-label"> Titre de la question </label>
                <input type="text" class="form-control" name="title" value="<?= $question_title; ?>">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label"> Description de la question </label>
                <textarea class="form-control" name="description"> <?= $question_description; ?>
            </textarea>
            </div>
            <div class="mb-3">
                <label for="firstname" class="form-label"> Contenu de la question </label>
                <textarea type="text" class="form-control" name="content"> <?=$question_content; ?>
            </textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="validate"> Modifier la question </button>
    
            <br><br>
           
        </form>    
        <?php




        }
        ?>
    
   
    </div>



</body>
</html>