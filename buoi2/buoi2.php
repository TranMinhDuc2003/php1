<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $info= [
        "0"=>[
            "name"=> "duc",
            "stt"=> "ph21536",
            "code"=>"wed2014",
            "mail"=>"ductmph21536"

        ],
        "1"=>[
            "name"=> "duc",
            "stt"=> "ph21536",
            "code"=>"wed2014",
            "mail"=>"ductmph21536"

        ],
        "2"=>[
            "name"=> "duc",
            "stt"=> "ph21536",
            "code"=>"wed2014",
            "mail"=>"ductmph21536"

        ]
    ];
    ?>
    <table border="1">

        <tr>
            <td>ho ten</td>
            <td>ma vs</td>
            <td>ma lop</td>
            <td>email</td>
        </tr>

        <tr>
        <?php
            foreach ($info as $value) {
                var_dump ($value);
                echo "<tr>";
                foreach ($value as $key => $value2) {
                    echo "<td>$value2</td>";
                }
                echo "</tr>";
            }
            ?>
        </tr>
        
    </table>

</body>

</html>