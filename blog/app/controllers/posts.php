<?php


include(ROOT_PATH . "/app/database/db.php");

$topics = selectAll('topics');


if ( isset($_POST['add-post'])) {
    dd($_POST);
}