<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Snack 7 - PHP</title>
    </head>
    <body>
        <?php
            $alunni = [
                [
                    "name" => "Simone",
                    "lastname" => "Giusti",
                    "voti" => [9,8,9,10,8,9]
                ],
                [
                    "name" => "Alessio",
                    "lastname" => "Vietri",
                    "voti" => [10,9,8,7,9,8]
                ],
                [
                    "name" => "Jacopo",
                    "lastname" => "Damiani",
                    "voti" => [7,9,8,9,10,8]
                ]
                ,[
                    "name" => "Riccardo",
                    "lastname" => "Lupinu",
                    "voti" => [5,4,2,7,8,7]
                ]
            ];
        ?>
        <div>
            <?php
                for($x = 0; $x < count($alunni); $x++) {
                    $sommaVoti = 0;
                    $media = 0;
                    for($i = 0; $i < count($alunni[$x]["voti"]); $i++) {
                        $sommaVoti += $alunni[$x]["voti"][$i];
                        $media = $sommaVoti / count($alunni[$x]["voti"]);
                        $media = round($media, 2);
                    }
                    echo "<h3>Alunno: " . $alunni[$x]["name"] . " " . $alunni[$x]["lastname"] . "</h3>";
                    echo "<h4>Media dei voti: $media</h4>";
                }
            ?>
        </div>
    </body>
</html>