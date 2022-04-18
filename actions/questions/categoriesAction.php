<?php

require('actions/database.php');


$categories = $bdd->query('SELECT * FROM categories ORDER BY nom DESC LIMIT 0,5' );
