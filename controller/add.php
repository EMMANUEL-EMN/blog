<?php

require_once '../models/blog.php';

use Blog\Models\Blogs;

$system = new Blogs();

$title = $system->validate($_POST['title']);
$introduction = $system->validate($_POST['introduction']);
$heading1 = $system->validate($_POST['heading1']);
$content1 = $system->validate($_POST['content1']);
$heading2 = $system->validate($_POST['heading2']);
$content2 = $system->validate($_POST['content2']);
$heading3 = $system->validate($_POST['heading3']);
$content3 = $system->validate($_POST['content3']);

$imageName = $system->validate($_FILES['image']['name']);
$image = $_FILES['image']['tmp_name'];

$data = [
    $title, $introduction, $heading1, $content1,
    $heading2, $content2, $heading3, $content3, $imageName
];

$blogIsSaved = $system->save($data);

if ($blogIsSaved == true) {
    $imageIsUploaded = $system->uploadFile($imageName, $image);
    if ($imageIsUploaded == true) {
        header('Location: ../views/admin/add.php?status=1');
    } else {
        header('Location: ../views/admin/add.php?status=2');
    }
} else {
    header('Location: ../views/admin/add.php?status=0');
}
