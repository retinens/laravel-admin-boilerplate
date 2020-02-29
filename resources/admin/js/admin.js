
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

require('@coreui/coreui');
import swal from 'sweetalert';
require("jquery-validation/dist/jquery.validate.min");
require("jquery-validation/dist/localization/messages_fr");
jQuery.validator.setDefaults({
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    }
});

$('.form-validate').validate({
    submitHandler: function(form) {
        form.submit();
    }
});

require('select2');

$('.select2').select2({
    theme: 'bootstrap4'
});

require ('datatables.net');
require('datatables.net-bs4');


$('.dataTable').dataTable({
    "language": {
        "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json"
    }
});


window.toastr = require('toastr/toastr');

$('.deleteConfirm').click(function (event) {
    event.preventDefault();
    swal({
        title: "Supprimer?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    })
        .then((willDelete) => {
            if (willDelete) {
                $('#destroy-form-'+$(this).data("id")).submit();
            }
        })

});


