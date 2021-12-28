<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRUD Operation on JSON File using PHP</title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
    <a href="index.php">Back</a>
    <p>
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname">
    </p>
    <p>
        <label for="lastname">Lastname</label>
        <input type="text" id="lastname" name="lastname">
    </p>
    <p>
        <label for="address">Address</label>
        <input type="text" id="address" name="address">
    </p>
    <p>
        <label for="gender">Telephone</label>
        <input type="text" id="telephone" name="telephone">
    </p>
   <!-- <p>
        <label for="gender">Avatar</label>
        <input type="file" id="avatar" name="avatar">
    </p>-->
    <input type="submit" name="save" value="Save">
</form>

<?php 

require __DIR__.'/contact.php';

$user = [
    'id' => '',
    'firstname' => '',
    'lastname' => '',
    'address' => '',
    'telephone' => '',
];

$user = array_merge($user, $_POST);

var_dump($user);

?>