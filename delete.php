<?php

include 'partials/header.php';
require __DIR__ . '/contact.php';


if (!isset($_POST['id'])) {
    include "partials/404.php";
    exit;
}
$contactId = $_POST['id'];
deleteContact($contactId);

header("Location: index.php");