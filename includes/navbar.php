<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Le forum </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="my-questions.php">Mes questions </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php"> Publier une question </a>
        </li>
       
        <?php

        if(isset($_SESSION['auth'])){
        ?> 
        <li class="nav-item">
          <a class="nav-link" href="profil.php?id=<?= $_SESSION['id']; ?>"> Mon profil </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="actions/users/logoutAction.php"> Déconnexion </a>
        </li>
        <?php 
        }
        ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit"> Chercher </button>
      </form>
    </div>
  </div>
</nav>