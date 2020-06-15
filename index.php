<?php
    $parola_dasostituire = 'sed';
    $sostituzione = '***';
    $testo = 'Lorem ipsum dolor sit amet, sed consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis sed nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint sed occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est sed laborum.';
    // echo $testo;
    $finale = str_replace($parola_dasostituire, $sostituzione, $testo);
    // echo $finale;
 ?>
 <p>
     <?php echo $finale; ?>
 </p>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    </body>
</html>
