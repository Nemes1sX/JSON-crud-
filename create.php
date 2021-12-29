<?php 
include 'partials/header.php';
require __DIR__.'/contact.php';

$contact = [
    'id' => '',
    'firstname' => '',
    'lastname' => '',
    'address' => '',
    'telephone' => '',
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $contact = array_merge($contact, $_POST);
    $contact = createContact($_POST);

    header("Location: index.php");
}


?>

<?php include '_form.php' ?>