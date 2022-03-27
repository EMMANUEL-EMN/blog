<?php
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
        echo '<p class="alert alert-success">successful Done</p>';
    } elseif ($_GET['status'] == 2) {
        echo '<p class="alert alert-success">Image is not successful added</p>';
    } else {
        echo '<p class="alert alert-danger">Not successful Done</p>';
    }
}
