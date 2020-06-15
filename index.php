<?php
    //salvo in una variabile il parametro get
    $parola_dasostituire = $_GET["badwords"];
    //salvo in un'altra variabile la stringa con gli asterischi
    $sostituzione = '***';
    //in testo salvo il testo
    $testo = 'Lorem ipsum dolor sit amet, sed consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis sed nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint sed occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est sed laborum.';
    // con str_replace rimpiazzo la badwords che mi arriva in get con gli asterischi e lo salvo in una variabile
    $finale = str_replace($parola_dasostituire, $sostituzione, $testo);
    // con strlen calcolo il numero di caratteri che compongono il testo e lo salvo in una variabile
    $lunghezza = strlen($testo);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <title>php</title>
    </head>
    <body>
        <div>
            <p>
                <!-- stampo nel paragrafo il testo modificato -->
                <?php echo $finale; ?>
            </p>
            <!-- stampo nello span il numero di caratteri -->
            <span>questo paragrafo ha <?php echo $lunghezza; ?> caratteri</span>
        </div>
    </body>
</html>
