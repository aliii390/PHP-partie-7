
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}

if (
    !isset(
        $_POST['name'],
        $_POST['nomdefamille'],
        $_POST['gender'],
    
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['name']) ||
    empty($_POST['nomdefamille']) ||
    empty($_POST['gender']) 
   
    
  
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$name = htmlspecialchars(trim($_POST['name']));
$nomDeFamille = htmlspecialchars(trim($_POST['nomdefamille']));
$gender = htmlspecialchars(trim($_POST['gender']));




// a remplir en fonction de vos prerequis
if(
    strlen($name) > 50 ||
    strlen($nomDeFamille) > 50  ||
    strlen($gender) > 50 
   

    
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


echo "Nom : $nomDeFamille<br>";
echo "Prénom : $name<br>";
echo "Genre : $gender<br>";