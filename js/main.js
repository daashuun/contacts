

$(document).ready(function(){
    $('#phone').inputmask("+7 999 999 99 99");

    $('body').on('click', '.close', function() {
        var contact = $(this).parent();
        $.ajax({
            type: "GET",
            url: "../php/delete.php",
            data: {'contact' : $(contact).attr('id')},
            dataType: "text",
            success: function () {
                $('#contacts').load('../php/contacts.php');
            }
        });
    });

    $('#form').bind('submit', function() {
        var name = $('#name');
        var phone = $('#phone');
        $.ajax({
            type: "GET",
            url: "../php/new.php",
            data: {'name' : name.val(), 'phone' : phone.val()},
            dataType: "text",
            success: function (data) {
                if (data) {
                    name.val('');
                    phone.val('');
                    $('#contacts').load('../php/contacts.php');
                    $('#has').remove();
                } else {
                    $('#new_contact').append("<p id='has'>Контакт уже существует.</p>");
                }
            }
        });
        return false;
    });

});
