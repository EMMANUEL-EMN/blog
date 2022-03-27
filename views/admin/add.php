<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add blog</title>
    <link rel="stylesheet" href="../../static/css/all.css">
    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/main.css">
</head>

<body>
    <h2>ADD BLOG</h2>
    <div class="status">
        <?php require_once '../layouts/status.php'; ?>
    </div>
    <form action="../../controller/add.php" method="POST" enctype="multipart/form-data">
        <p>Title</p>
        <p>
            <input type="text" name="title" id="" required>
        </p>
        <p>Introduction</p>
        <p>
            <textarea name="introduction" id="" cols="30" rows="10"></textarea>
        </p>
        <p>Heading</p>
        <p>
            <input type="text" name="heading1" required>
        </p>
        <p>Content</p>
        <p>
            <textarea name="content1" id="" cols="30" rows="10"></textarea>
        </p>
        <p>Heading</p>
        <p><input type="text" name="heading2" id=""></p>
        <p>Content</p>
        <p>
            <textarea name="content2" id="" cols="30" rows="10"></textarea>
        </p>
        <p>Heading</p>
        <p>
            <input type="text" name="heading3" id="">
        </p>
        <p>Content</p>
        <p>
            <textarea name="content3" id="" cols="30" rows="10"></textarea>
        </p>
        <p>Image</p>
        <p>
            <input type="file" name="image" id="" required>
        </p>
        <p>
            <button class="btn btn-warning">CREATE BLOG</button>
        </p>
    </form>
</body>

</html>