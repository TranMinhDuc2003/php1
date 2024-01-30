<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
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
    include "pdo.php";
    ?>
    <?php
    $id = $_GET['id'];
    echo $id;
    $sql = "SELECT * FROM toyproduct WHERE productId = $id";
    $result = $conn->query($sql);
    $products = $result->fetch();
    print_r($products);

    ?>
    <?php
    $errors = [];
    if (isset($_POST["submit"])) {
        $ProductName = $_POST["ProductName"];
        $Image = $_FILES["Image"];
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

        if (empty('Description')) {
            $errors['Description'] = "moi nhap du lieu";
        }
        if (empty('CategoryId')) {
            $errors['CategoryId'] = "moi nhap du lieu";
        }
        if (isset($_FILES['Image'])) {
            $src = 'img/';
            $image = $_FILES['Image']['name'];
            $tmp_image = $src . $image;
            move_uploaded_file($_FILES['Image']['tmp_name'], $tmp_image);
        }

        if (empty($errors)) {
            $sql = "UPDATE toyproduct SET ProductName='$ProductName', ProductPrice='$ProductPrice', Image = '$image',Description ='$Description', CategoryId ='$CategoryId' WHERE productId =$id"  ;
            $conn->exec($sql);
            header("Location: index.php");
        }
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <label for=""> ProductName</label>
        <input type="text" name="ProductName" value="<?= $products['ProductName'] ?>">
        <?php
        if (isset($errors['ProductName'])) {
            echo "{$errors['ProductName']}";
        }
        ?>
        <label for=""> ProductPrice</label>git 
        <input type="number" name="ProductPrice" value="<?= $products['ProductPrice'] ?>">
        <label for="image">Image URL:</label>
        <input type="file" name="Image" accept="image/*" value="<?= $products['Image'] ?>"><br>
        <br>
        <label for=""> Descripion</label>
        <input type="text" name="Description" value="<?= $products['Description'] ?>">
        <label for=""> CategoryId</label>
        <select name="CategoryId" id="" value="<?= $products['CategoryId'] ?>">
            <?php
            $categoriesQuery = "SELECT * FROM Category";
            $categorytResult = $conn->query($categoriesQuery);

            $categories = $categorytResult->fetchAll(PDO::FETCH_ASSOC);

            foreach ($categories as $category) {
                $selected = ($products['CategoryId'] == $category['categoyId'] ? 'selected' : '');
                echo "<option value='{$category['CategoryId']}'>{$category['CategoryName']}</option>";
            }
            ?>
        </select><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>