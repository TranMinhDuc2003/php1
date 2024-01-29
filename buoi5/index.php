<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 50;
    function int()
    {
        $sum = 0;
        global $x;
        for ($i = 0; $i < $x; $i++) {
            if ($i % 2 != 0) {
                echo "$i \n";
                $sum += $i;
            }
        }
        echo $sum;
    }

    int();
    ?>
</body>

</html>