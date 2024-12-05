// process/default_form_process.php
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('location: ./index.php');
    return;
}

if (
    !isset(
        $_GET['name'],
        $_GET['nomdefamille']
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_GET['name']) ||
    empty($_GET['nomdefamille'])
  
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$name = htmlspecialchars(trim($_GET['name']));
$nomDeFamille = htmlspecialchars(trim($_GET['nomdefamille']));



// a remplir en fonction de vos prerequis
if(
    strlen($name) > 50 ||
    strlen($nomDeFamille) > 50 
) {
    // redirection si c'est pas bon
    header('location: ./index.php');
    return;
}


// optionnel regex
// if (!preg_match('[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]', $email)) {
//     die("l'email est pas conforme");
// }

// etc .......



// mon code une fois que toute les données sont bonnes


var_dump($_GET);