<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "bai 1: <br>";
        $x= (2==3); // cqual to (faise)

        $x = (2 != 3); // not equal to (true)

        $x = (2 > 3); // not equal to (alternative)

        $x = (2 === 3); // identical (false)

        $x = (2 !== 3); // not identical (true)

        $x = (2 > 3); // false,greater than (false)

        $x = (2 < 3); // less than (true)

        $x = (2 >= 3); // greater than or equal to (false)

        $x = (2 <= 3); // less than or equal to (true)
        
        echo "bai 2: <br>";
        $s = "Hello\nworld <br>";
        echo "$s";
        $s = 'It\'n<br>';
        echo $s;
        echo "\nHello<br>World<br>";
        echo "\u{00c2a9}";
        echo "\u{c2a9} <br>";

        $a = 'hello';
        $$a = 'world';

        echo "$a ${$a} <br>";

        echo "bai 3: <br>";
        function sum(){
            $a = 10;
            $b = 20;
            echo "tong a va b la ".$a+$b."";
        }
        sum();
    ?>
</body>
</html>