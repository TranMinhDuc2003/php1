<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $dsSinhVien = array(

        array("SV001", "Nguyen Van A", 8.5, 7.5),
        array("SV002", "Tran Thi B", 9.0, 8.0),
        array("SV003", "Le Van C", 7.5, 6.5),
        array("SV004", "Pham Thi D", 6.0, 7.0),
        array("SV005", "Hoang Van E", 8.0, 8.5)

    );


    ?>
    <table border="1">
        <tr>
            <th>masv</th>
            <th>ten</th>
            <th>diem
            <th>diem</th>
        </tr>
        <th>
            <?php
            foreach ($dsSinhVien as  $value) {
                echo "<tr>";
                echo "<td>$value[0]</td>";
                echo "<td>$value[1]</td>";
                echo "<td>$value[2]</td>";
                echo "<td>$value[3]</td>";
                echo "</tr>";
                
            }
            
            ?>
        </th>

    </table>
</body>

</html>