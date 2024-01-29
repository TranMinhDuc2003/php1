<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $x = 10;
    // if($x=10){
    //     echo "x = 10";
    // }else{
    //     echo "x ! 10";
    // }

    //    echo $y = ($x==10) ?  "y = 10" : "y ! 10"


    // $i = 0;    
    // while ($i < 10) {
    //     $i++;
    //     echo "the number is: $i <br>";
    // }


    // $i = 0;
    // do {
    //     $i++;
    //     echo "the number is: $i <br>";
    // } while ($i > 10);


    //     $z =10;
    // function sum($a, $b=0)
    // {
    //     echo $a + $b;
    //     global  $z;
    //     echo $z;
    // }

    // sum(1,6);

    $a = 10;
    $i = 0;

    // function vonglap()
    // {
    //     global $a;
    //     global $i;
    //     echo "cac so tu 1 den a la: <br>";
    //     // for ($i=0; $i <= $a; $i++) { 
    //     //     echo "$i <br>";
    //     // }

    //     while ($i < $a) {
    //         echo "$i <br>";
    //         $i++;

    //     }
    // }

    // vonglap();

    $print = function () use ($i, $a) {
        echo "cac so tu 1 den a la: <br>";
        for ($i = 0; $i <= $a; $i++) {
            echo "$i <br>";
        }
    };

    echo $print();
    ?>
</body>

</html>