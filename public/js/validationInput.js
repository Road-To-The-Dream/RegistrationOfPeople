$(document).ready(function () {
    let host = $('div.hidden').data('host');

    $('#form').submit(function (e) {
        e.preventDefault();

        let isValidFIO = $('#fio').val();
        let isValidEmail = ($('#email').val().match(/.+?\@.+/g) || []).length === 1;

        if (!isValidFIO) {
            $('#fio').after('<p class="m-0 text-danger">Field is empty</p>');
        }

        if (!isValidEmail) {
            $('#email').after('<p class="m-0 text-danger">Field is empty</p>');
        }
    })
});