<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    form {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        display: block;
        margin-bottom: 8px;
        color: #555;
    }

    input {
        width: 100%;
        padding: 10px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type="submit"] {
        background-color: #4caf50;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<body>
    <?php
    include 'pdo.php'

    ?>
    <?php
    $errors = [];
    if (isset($_POST["submit"])) {
        $ProductName = $_POST["ProductName"];
        $ProductPrice = $_POST["ProductPrice"];
        $Description = $_POST["Description"];
        $CategoryId = $_POST["CategoryId"];

        if (empty($ProductName)) {
            $errors['ProductName'] = "moi nhap du lieu";
        }

        if (empty($ProductPrice)) {
            $errors['ProductPrice'] = "moi nhap du lieu";
        } elseif ($ProductPrice <= 0) {
            $errors['ProductPrice'] = "du lieu phai lon hon 0";
        }

        if (empty($errors)) {
            $add = "  INSERT INTO toyproduct( ProductName, ProductPrice, Description, CategoryId) VALUES ($ProductName,$ProductPrice,$Description,$CategoryId)";
            $conn->exec($add);
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">

        <label for="ProductName">ProductName:</label>
        <input type="text" name="ProductName"><br>
        <?php
        if (isset($errors['ProductName'])) {
            echo "{$errors['ProductName']}";
        }
        ?>

        <label for="ProductPrice">ProductPrice:</label>
        <input type="number" name="ProductPrice"><br>
        <?php
        if (isset($errors['ProductPrice'])) {
            echo "{$errors['ProductPrice']}";
        }
        ?>

        <label for="Description">Description:</label>
        <input type="text" name="Description"><br>

        <label for="CategoryId"> CategoryId:</label>
        <select name="CategoryId" id="">
            <?php
            $productsQuery = "SELECT * FROM category";
            $productsResult = $conn->query($productsQuery);

            $products = $productsResult->fetchAll(PDO::FETCH_ASSOC);

            foreach ($products as $value) {
                echo "<option value='{$value['CategoryId']}'>{$value['CategoryName']}</option>";
            }
            ?>
        </select><br>

        <input type="submit" name="submit" value="Add Flight">
    </form>
</body>

</html>