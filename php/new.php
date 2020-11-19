<?php

require "connection.php";

$phone = $_GET['phone'];
$name = $_GET['name'];

$count = count_contacts();
$has = false;
for ($i=1; $i<$count+1; $i++) {
    $sql = "SELECT name, phone FROM contacts WHERE id = '{$i}';";
    $result = connection($sql);
    $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($contacts as $contact) {
        if (($contact['name']==$_GET['name'])||($contact['phone']==$_GET['phone'])) {
            $has = true;
            break;
        }
    }
};

if ($has) {
    echo false;
} else {

    $sql = "INSERT INTO contacts (phone, name) VALUES ('{$phone}', '{$name}');";

    connection($sql);
    echo true;

}

?>