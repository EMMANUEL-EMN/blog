<?php

namespace Blog\Models;

use mysqli;

class Blogs
{

    private $hn = 'localhost';
    private $un = 'root';
    private $pw = '';
    private $db = 'blog';

    protected function db()
    {
        $conn = new mysqli($this->hn, $this->un, $this->pw, $this->db);
        return $conn;
    }

    public function validate($data)
    {
        $data = htmlentities($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }

    public function all()
    {
        $sql = "SELECT * FROM `blogs`";
        $runq = $this->db()->query($sql);
        $result = $runq->fetch_all(MYSQLI_ASSOC);
        return $result;
    }

    /*
    * @param array $data
    
    *all data from form

    */
    public function save(array $data)
    {
        $sql = "INSERT INTO `blogs`(
            `id`,
            `title`,
            `introduction`,
            `heading1`,
            `content1`,
            `heading2`,
            `content2`,
            `heading3`,
            `content3`,
            `image`
        )
        VALUES(
             NULL,
            '$data[0]',
            '$data[1]',
            '$data[2]',
            '$data[3]',
            '$data[4]',
            '$data[5]',
            '$data[6]',
            '$data[7]',
            '$data[8]'
        )";
        $runq = $this->db()->query($sql);
        return $runq;
    }

    public function update(array $data)
    {
        $sql = "UPDATE
                    `blogs`
                SET
                    `id` = NULL,
                    `title` = '$data[0]',
                    `introduction` = '$data[1]',
                    `heading1` = '$data[2]',
                    `content1` = '$data[3]',
                    `heading2` = '$data[4]',
                    `content2` = '$data[5]',
                    `heading3` = '$data[6]',
                    `content3` = '$data[7]',
                    `image` = '$data[8]'
                WHERE
                    `id`='$data[9]'";
        $runq = $this->db()->query($sql);
        return $runq;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `blogs` WHERE `id` = '$id'";
        $runq = $this->db()->query($sql);
        return $runq;
    }

    public function blog($id)
    {
        $sql = "SELECT * FROM `blogs` WHERE `id` = '$id'";
        $runq = $this->db()->query($sql);
        $result = $runq->fetch_assoc();
        return $result;
    }

    public function uploadFile(string $imagename, string $file)
    {
        $dir = "../static/images/";
        $file_path = $dir . basename($imagename);
        $upload = move_uploaded_file($file, $file_path);
        return $upload;
    }
}
