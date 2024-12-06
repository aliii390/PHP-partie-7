
<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('location: ./index.php');
    return;
}

if (
    !isset(
        $_POST['file'],
        
    
    )
) {
    header('location: ./index.php');
    return;
}

if (
    empty($_POST['file']) 
  
   
    
  
) {
    header('location: ./index.php');
    return;
}

// input sanitization
$file = htmlspecialchars(trim($_POST['file']));






// a remplir en fonction de vos prerequis
if(
    strlen($file) > 50 
   

    
) {
    // redirection si c'est pas bon
    header('location: ./index.php');
    return;
}





// mon code une fois que toute les données sont bonnes
$test = $_POST['file'];

    $filname = pathinfo($test)['filename'];
    $extension = pathinfo($test)['extension'];
    
    
    if($extension === "pdf"){
        echo "c'est bien un fichier pdf <br>";
    }else{
        echo "ce n'est pas un fichier pdf <br>";
    }

    
    echo "Nom du fichier : $file<br> ";
    echo "juste  le nom du fichier sans extension : $filname <br>";
    echo "l'extension :" . " ".  $extension;
   





