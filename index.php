<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    include "pdo.php";
    ?>
    <?php
        $sql = "SELECT toyproduct.*, category.CategoryName FROM toyproduct JOIN category ON  toyproduct.CategoryId = category.CategoryId ";
        $result = $conn->query($sql);
        $products = $result->fetchAll();
        // print_r($products);
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Desc</th>
                <th>Category Id</th>
                <th>Category name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $value) {
                echo "<tr>";
                    echo "<td>$value[0]</td>";
                    echo "<td>$value[1]</td>";
                    echo "<td>$value[2]</td>";
                    echo "<td>$value[3]</td>";
                    echo "<td>$value[4]</td>";
                    echo "<td>$value[5]</td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</body>

</html>