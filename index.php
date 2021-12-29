<?php

require 'contact.php';

$contacts = getContacts();

?>

<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new contact</a>
    </p>

    <table class="table">
        <thead>
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?php echo $contact['firstname'] ?></td>
                <td><?php echo $contact['lastname'] ?></td>
                <td><?php echo $contact['address'] ?></td>
                <td><?php echo $contact['phone'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $contact['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $contact['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>