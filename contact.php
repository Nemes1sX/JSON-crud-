<?php


function getContacts() 
{
    return json_decode(__DIR__.'/contacts.json');
}

function getContactById($id) 
{
    $contacts = getUsers();

    foreach ($contacts as $contact) {
        if ($contact['id'] == $id) {
            return $contact;
        }
    }

    return null;
}

function createContact($data) 
{
    $contacts = getContacts();

    $data["id"] = rand(1, 10000);
    $contacts[] = $data;
   
    putJson($contacts); 
    return $data;
}

function updateContact($data, $id) {
    $updateUser = [];
    $contacts = getContacts();
    
    foreach ($contacts as $i => $contact) {
        if ($contact['id'] == $id) {
            $contacts[$i] = $updateUser = array_merge($contact, $data);
        }
    }

    return $updateUser;
}

function deleteContact($id) {
    $contacts = getUsers();

    foreach ($contacts as $i => $contact) {
        if ($contact['id'] == $id) {
            array_splice($contacts, $i, 1);
        }
    }

    putJson($contacts);
}

function putJson($contacts) {
    file_put_contents(__DIR__.'/contacts.json', json_encode($contacts, JSON_PRETTY_PRINT));
}

?>