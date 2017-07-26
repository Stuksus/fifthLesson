<?php
$json = file_get_contents("tsconfig.json");
$decode = json_decode($json, true);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Document</title>
        <style>

            td{
                padding-right: 15px;
                font-size: 18px;
                margin-bottom: 10px;
            }
            body{
                font-size: 18px;
            }
        </style>
    </head>
    <body>
    <table>
    <tr>
        <td>Имя</td>
        <td>Фамилия</td>
        <td>Адресс проживания</td>
        <td>Телефонный номер</td>
    </tr>
    <?php foreach ($decode as $row) { ?>
        <tr class="ee">
            <td><?php echo $row ['firstName']; ?></td>
            <td><?= $row['lastName']; ?> </td>
            <td><?= $row['address']; ?></td>
            <td><?= $row['phoneNumber']; ?></td>
        </tr>
    <?php } ?>
    </table>
    </body>
</html>