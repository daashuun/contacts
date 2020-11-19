<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Телефонная книга</title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/contacts.css">

    <script src="/js/jquery/jQuery.min.js" type="text/javascript"></script>
    <script src="/js/jquery/jquery.inputmask.min.js" type="text/javascript"></script>

    <script src="/js/main.js" type="text/javascript"></script>
</head>
<body>

<div id = 'main'>
    <div class = 'block' id = 'new_contact'>
        <div class = 'block_head'>
            <p>Добавить контакт</p>
        </div>
        <form id = 'form'>
            <input type="text" placeholder = "Имя" name = 'name' id = 'name' pattern="^[А-Яа-яЁё\s]+$" required>
            <input type="text" placeholder = "Телефон" name = 'phone' id = 'phone' pattern="\+7?{0,1}9[0-9]{10}" required>
            <input type="submit" id = "add" value="Добавить">
        </form>
    </div>
    <div class = 'block' id = 'contacts'>

        <?php require "php/contacts.php"; ?>

    </div>
</div>
    
</body>
</html>