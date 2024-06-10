<?php
require "config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


</head>

<body>
    <?php 
    $pdoStatement = $pdo->prepare("SELECT * FROM todo ORDER BY id DESC");
    $pdoStatement->execute();
    $result = $pdoStatement->fetchAll();
    ?>
    <div class="card">

        <div class="card-body">
            <h2>ToDo Body</h2>

            <a type="button" class="btn btn-success" href="add.php">Create</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                     $i=1;
                    if ($result){
                        foreach($result as $value){
                    ?>
                    <tr>

                        <td><?php echo  $i?></td>
                        <td><?php echo $value['title']?></td>
                        <td><?php echo $value['description']?></td>
                        <td><?php echo date('Y-m-d',strtotime($value['created_at']))?></td>
                        <td>
                            <a type="button" class="btn btn-warning"
                                href="edit.php ? id= <?php echo $value['id']?>">Edit</a>
                            <a type="button" class="btn btn-danger"
                                href="delete.php ? id= <?php echo $value['id']?>">Delete</a>
                        </td>
                    </tr>
                    <?php
                    $i ++;
                    }
                    }
                    ?>
                </tbody>

            </table>

        </div>

    </div>
</body>

</html>