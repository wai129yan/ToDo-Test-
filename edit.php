<?php

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

            <form class="" action="edit.php" method="post">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" value="" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" rows="8" cols="80"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="submit">
                    <a href="index.php" type="button" class="btn btn-warning">Back</a>
            </form>
        </div>
    </div>

</body>

</html>