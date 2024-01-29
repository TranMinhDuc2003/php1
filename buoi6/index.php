<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
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
    <!--  -->
    <?php
    include 'pdo.php';
    ?>
    <?php
    $erorrs = [];
    if (isset($_POST["submit"])) {
        $flight_number = $_POST['flight_number'];
        $total_passengers = $_POST['total_passengers'];
        $description = $_POST['description'];
        // $airline_id = $_POST['airline_id'];  
        // echo $flight_number;
        // echo $description;

        if (empty($flight_number)) {
            $erorrs['flight_number'] = 'moi nhap du lieu';
        }

        if (empty($total_passengers)) {
            $erorrs['total_passengers'] = 'moi nhap du lieu';
        } else if (!is_numeric($total_passengers) && $total_passengers < 0) {
            $erorrs['total_passengers'] = 'du lieu la number va phai lon hon 0';
        }

        if (empty($description)) {
            $erorrs['description'] = 'moi nhap du lieu';
        }




        if (isset($_FILES['flight_image'])) {
            $src = 'img/';
            $image = $_FILES['flight_image']['name'];
            $tmp_image = $src . $image;
            // echo $tmp_image;
            move_uploaded_file($_FILES['flight_image']['tmp_name'], $tmp_image);
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="flight_number">Flight Number:</label>
        <input type="text" name="flight_number"><br>
        <?php 
           if (isset($erorrs['flight_number'])) {
            echo "{$erorrs['flight_number']}";
           }
        ?>
        <br>

        <label for="image">Image URL:</label>
        <input type="file" name="flight_image" accept="image/*"><br>
        <br>

        <label for="total_passengers">Total Passengers:</label>
        <input type="text" name="total_passengers"><br>
        <br>

        <label for="description">Description:</label>
        <input type="text" name="description"><br>
        <br>


        <label for="airline_id">Airline:</label>
        <select name="airline_id">
            <?php
            $airlinesQuery = "SELECT * FROM airlines";
            $airlinesResult = $conn->query($airlinesQuery);
            $airlines = $airlinesResult->fetchAll(PDO::FETCH_ASSOC);

            foreach ($airlines as $value) {
                echo "<option value='{$value['airline_id']}'>{$value['airline_name']}</option>";
            }
            ?>
        </select><br>

        <input type="submit" name="submit" value="Add Flight">
    </form>

    <?php

    ?>


</body>

</html>