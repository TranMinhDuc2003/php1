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
        if(isset($_POST["submit"])){
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];
            if($Username == "duc" && $Password=='12345'){
                session_start();
                $_SESSION['Username'] = $Username;
                setcookie('user',$Username,time()+10,'/');
                header("Location: index.php");
            }
        }
    ?>
<form action="" method="post" enctype="multipart/form-data">
        <label for=""> Username</label>
        <input type="text" name="Username" id="">
        
        <label for=""> Password</label>
        <input type="text" name="Password" id="">
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>