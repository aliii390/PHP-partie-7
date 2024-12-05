// process/default_form_process.php
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}

if (
    !isset(
        $_POST['name'],
        $_POST['nomdefamille']
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['name']) ||
    empty($_POST['nomdefamille'])
  
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$name = htmlspecialchars(trim($_POST['name']));
$nomDeFamille = htmlspecialchars(trim($_POST['nomdefamille']));



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


var_dump($_POST);