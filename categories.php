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
    <link rel="stylesheet" href="assets/categories.css">
    <!--code javascript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- javascript -->
    
    <title>Forum</title>
</head>
<body>
   <?php require ('includes/navbar.php'); ?> 

   <table class="table">
       <h2> Catégories </h2>
  <thead>
    <tr>
      <th scope="col">Catégories</th>
      <th scope="col"> Sujets </th>
      <th scope="col"> Messages </th>
      <th scope="col"> Derniers messages </th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($cat = $categories->fetch()){
    ?>
    <tr>
      <th scope="row"> <?= $cat['nom']?>    </th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <?php
    }
    ?>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>





















</body>