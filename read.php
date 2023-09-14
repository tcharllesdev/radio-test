<?php
$fakeTok = "562random";
include "php/read.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Test</title>
    <style>
        table, tr, th, td {
            border: 1px solid #aaa;
            border-collapse: collapse;
            padding: 5px;
        }

        th {
            background: #eee
        }
    </style>
</head>
<body>
<?php if (mysqli_num_rows($result)) { ?>
    <br/>
    <mark>
        <?php if (isset($_GET['ms'])) {
            echo $_GET['ms'];
        } ?>
    </mark>
    <table>
        <tr>
            <th>#</th>
            <th>Gênero</th>
            <th>Renda</th>
            <th>Dor</th>
            <th>Mudar</th>
            <th>Terapia</th>
            <th>Horário</th>
            <th>Ação</th>
        </tr>
        <?php
        $i = 0;
        while ($users = mysqli_fetch_assoc($result)) {
            $i++;
            ?>
            <tr>
                <td><?= $users['id'] ?></td>
                <!-- <td><?= $i ?></td> -->
                <td><?= $users['gender'] ?></td>
                <td><?= $users['renda'] ?></td>
                <td><?= $users['dor'] ?></td>
                <td><?= $users['mudar'] ?></td>
                <td><?= $users['terapia'] ?></td>
                <td><?php echo $users['timestamp']; ?></td>
                <td>
                    <a href="php/delete.php?id=<?= $users['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table><br>
    <a href="index.php">Create</a>

<?php } else { ?>
    <h1>Empty!</h1>
    <a href="index.php">Create</a>
<?php } ?>
</body>
</html>
