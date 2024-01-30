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
        // aaffafafaaga
    ?>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Img</th>
                <th>Price</th>
                <th>Desc</th>
                <th>Category Id</th>
                <th>Category name</th>
            </tr>
            <img src="" alt="">
        </thead>
        <tbody>
            <?php
            foreach ($products as $value) {
                echo "<tr>";
                    echo "<td>{$value['productId']}</td>";
                    echo "<td>{$value['ProductName']}</td>";
                    echo "<td><img width='200px' src='./img/{$value['Image']}'></td>";
                    echo "<td>{$value['ProductPrice']}</td>";
                    echo "<td>{$value['Description']}</td>";
                    echo "<td>{$value['CategoryId']}</td>";
                    echo "<td>{$value['CategoryName']}</td>";
                    echo "<td><button><a href ='edit.php?id={$value['productId']}'>Edit</a></button></td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
</body>

</html>