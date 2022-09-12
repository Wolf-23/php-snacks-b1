<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 4 PHP</title>
    </head>
    <body>
        <?php
            $numArray = [];
            while(count($numArray) < 15) {
                $num = rand(1, 100);
                if(!in_array($num, $numArray)) {
                    $numArray[] = $num;
                }
            }
            var_dump($numArray);
        ?>
    </body>
</html>