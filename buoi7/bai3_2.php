<!-- 
// bai 3
$str = "082307";

$hour = substr($str, 0, 2);
$minute = substr($str, 2, 2);
$second = substr($str, 4, 2);

$time = $hour .  $minute .  $second;

$formattedTime = chunk_split($time, 2, ':');

$formattedTime = rtrim($formattedTime, ":");

echo $formattedTime;
// bai 4

$inputString = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";

$arrayResult = explode("\n", $inputString);

print_r($arrayResult); -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <table>
        <?php
        $products = array(["product 101", "300,4", "laptop"], ["product 103", "300,4", "iphone"], ["product 102", "300,4", "sumsung"]);
        echo "All product";
        foreach ($products as $value) {
            echo '<tr class="bg-red-500 flex">';
            foreach ($value as $value2) {
                echo '<td >' . $value2 . '</td>';
            }
            echo '</tr>';
        }

        ?>
    </table>
</body>

</html>