$('[data-toggle="tooltip"]').tooltip();

$('body').on('submit', function () {
    $(this).find('button[type="submit"]').empty().append('<span class="fa fa-spin fa-spinner" role="status" aria-hidden="true"></span> Please Wait...').addClass('disabled');
});

$('.btn-form-modal').click(function () {
    let $modal = $('#' + $(this).data('modal'));
    $modal.find('form').attr('action', $(this).data('action'));
    $modal.modal('show');
});

$('body').on('click', '.btn-copy', function () {
    let copyText = document.getElementById($(this).data('target'));

    /* Select the text field */
    copyText.select();
    copyText.setSelectionRange(0, 99999); /*For mobile devices*/

    /* Copy the text inside the text field */
    document.execCommand("copy");

    let currentText = $(this).text();
    $(this).text('Copied!');
    setTimeout(function () {
        $(this).text(currentText);
    }.bind(this), 1000)
});