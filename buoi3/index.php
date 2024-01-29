<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $product = array("dien thoai"=>["124","dien thoai","1.00.000 vnd"],"laptop" =>["145","latop","3.000.000 vnd"]);
        
    ?>
    <table >
        <tr>
            <th>ma sp</th>
            <th>ten sp</th>
            <th>gia</th>
        </tr>
        <tr>
            <?php
                foreach ($product as $value) {
                    echo "<tr>";
                    foreach ($value as $value2) {
                        echo "<td>$value2</td>";
                    }
                    echo "</tr>";
                };
            ?>
        </tr>
    </table>
</body>
</html>