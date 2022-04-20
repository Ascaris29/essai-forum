<?php
require('actions/users/securityAction.php');
require('actions/questions/categoriesAction.php');
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
    <link rel="stylesheet" href="assets/categorie.css">
    <!--code javascript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javascript -->
    
    <title>Forum</title>
</head>
<body>
   <?php require ('includes/navbar.php'); ?> 

   
   

   <table class="table">
       
       
         <tr class="entete">
        <?php
          while($cat = $categories->fetch()){
                     
         ?>
            <th scope="col"> <h5><?= $cat['nom']?> </h5> </th>
            <th scope="col"> Sujets </th>
            <th scope="col"> Messages </th>
            <th scope="col"> Derniers messages </th>
        
        </tr>  
        <tr>
        
            <td scope="row"> <h6><?= $cat['nom'] ?></h6></th>
            <td> 15989</td>
            <td> 98787665</td>
            <td> 05/05/2022 à 15h50 <br> de Max@</td>
        </tr>
    <?php
    }
    ?>
    
    
    </table>
 




















</body>