<?php
include 'dbc-inc.php';

$sql = "select * from reg";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
} catch (PDOException $e) {
    echo "Erros: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queries</title>

    <style>
        .center {
            margin: auto;
            width: 20%;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container center">
        <table border="1px">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                </tr>
            </thead>

            <tbody>

                <?php
                foreach ($stmt as $row) {
                    echo '<tr>';
                    echo '<td>' . $row['username'] . '</td>';
                    echo '<td>' . $row['email'] . '</td>';
                    echo '<td>' . $row['psw'] . '</td>';
                    echo '</tr>';
                }

                ?>

            </tbody>
        </table>
    </div>
</body>

</html>