<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    <?php
    include "pdo.php";
    ?>
    <?php

    ?>
    <?php
    session_start();
    if (!isset($_SESSION['Username'])) {
        header("Location: login.php");
    }
    $sql = "SELECT toyproduct.*, category.CategoryName FROM toyproduct JOIN category ON  toyproduct.CategoryId = category.CategoryId ";
    $result = $conn->query($sql);
    $products = $result->fetchAll();
    // print_r($products);
    // aaffafafaaga
    ?>

    <table class="table table-bordered">
        <h1>quan ly san pham</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Img</th>
                <th>Price</th>
                <th>Desc</th>
                <th>Category name</th>
            </tr>
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
                echo "<td>{$value['CategoryName']}</td>";
                echo "<td><button><a href ='edit.php?id={$value['productId']}'>Edit</a></button></td>";
                echo "<td><button><a href ='delete.php?id={$value['productId']}'>deleteit</a></button>  </td>";
                echo "</tr>";
            }
            ?>
        </tbody>

    </table>
    <a href="logout.php" class="btn btn-primary">logout</a>
    <a href="add.php">add</a>
</body>

</html>