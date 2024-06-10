<?php
require 'config.php';

if($_POST){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $id = $_POST['id'];

    $pdoStatement = $pdo->prepare("Update todo set title='$title',description='$desc' where id='$id'");
    $result = $pdoStatement->execute();
     if ($result) {
        echo "<script>alert('New ToDo is Updated'); window.location.href='index.php';</script>";
    }
    

}else{
    $pdoStatement = $pdo->prepare("SELECT * FROM todo WHERE id=".$_GET['id']);
    $pdoStatement->execute();
    $result = $pdoStatement->fetchAll();

    // print"<pre>";
    // print_r($result);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-body">
            <h2>Edit New</h2>

            <form class="" action="" method="post">
                <input type="hidden" name="id" value="<?php echo $result[0]['id']?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $result [0]['title'];?>">
                </div>

                <div class="form-group">
                    <label for="">Description</label>
                    <textarea name="description" class="form-control" rows="8"
                        cols="80"><?php echo $result [0]['description'];?></textarea>
                </div>

                <div class=" form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                    <a href="index.php" type="button" class="btn btn-warning">Back</a>
            </form>
        </div>
    </div>

</body>

</html>