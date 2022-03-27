<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin interface</title>
    <link rel="stylesheet" href="../../static/css/all.css">
    <link rel="stylesheet" href="../../static/css/bootstrap.css">
    <link rel="stylesheet" href="../../static/css/main.css">
</head>

<body>
    <?php
    require_once '../../models/blog.php';

    use Blog\Models\Blogs;

    $blogs = new Blogs();
    ?>
    <div class="container-fluid">
        <div class="btable">
            <div class="status">
                <?php require_once '../layouts/status.php'; ?>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Introduction</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($blogs->all() as $blog) {
                    ?>
                        <tr>
                            <td><?php echo $blog['id']; ?></td>
                            <td><?php echo $blog['title']; ?></td>
                            <td><?php echo $blog['introduction']; ?></td>
                            <td>
                                <a href="../../controller/delete.php?id=<?php echo $blog['id']; ?>">
                                    Delete
                                </a>
                            </td>
                            <td>
                                <a href="../../controller/edit.php?id=<?php echo $blog['id']; ?>">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>