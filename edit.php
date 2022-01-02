<?php

include 'partials/header.php';
require 'contact.php';

if (!isset($_GET['id'])) {
    include "partials/404.php";
    exit;
}
$contactId = $_GET['id'];

$contact = getcontactById($contactId);
if (!$contact) {
    include "partials/404.php";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $contact = array_merge($contact, $_POST);

    $contact = updateContact($_POST, $contactId);
    header("Location: index.php");
    }




?>

<?php include '_form.php' ?>
