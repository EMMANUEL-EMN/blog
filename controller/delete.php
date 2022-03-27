<?php

require_once '../models/blog.php';

use Blog\Models\Blogs;

$system = new Blogs();

$blogId = $system->validate($_GET['id']);

$blogIsDeleted =  $system->delete($blogId);

if ($blogIsDeleted == true) {
    header('Location: ../views/admin/blogs.php?status=1');
} else {
    header('Location: ../views/admin/blogs.php?status=0');
}
