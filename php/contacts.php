
<div class = 'block_head'>
    <p>Список контактов</p>
</div>

<?php

    require "connection.php";
    
    $count = count_contacts();

    $id = 1;
    for ($i=$count; $i>0; $i--) {
        $sql = "SELECT phone, name FROM contacts WHERE id = '{$i}';";
        $result = connection($sql);
        if (!empty($result)){
            $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($contacts as $contact) {
                if (!empty($contact['name'])) {
                    $call = str_replace(' ', '', trim($contact['phone']));
                    ?>
                    <div class="contact" id="<?=$i?>">
                        <p class="contact_name"><?= $contact['name'] ?></p>
                        <img src="/img/close.png" alt="delete" class="close">
                        <br/>
                        <a href="tel:<?= $call ?>" class="contact_phone"><?= $contact['phone'] ?></a>
                    </div>
                    <?php
                }
            }
        }
    }

?>