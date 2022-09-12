<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 2 - PHP</title>
    </head>
    <body>
        <?php
            $name = $_GET['name'];
            $mail = $_GET['mail'];
            $age = $_GET['age'];
            $avviso = '';

            if($name != '' && $mail != '' && $age != '') {
                if(strlen(trim($name)) > 3 && strlen(trim($mail)) >= 5 && strpos($mail, '@') !== false && strpos($mail, '.') !== false && is_numeric($age) == true) {
                    $avviso = 'Accesso riuscito!';
                } else {
                    $avviso = 'Accesso negato!';
                }
            } else {
                $avviso = 'Dati non inserito correttamente!';
            }
        ?>

        <h3>
            <?php echo $avviso ?>
        </h3>
    </body>
</html>