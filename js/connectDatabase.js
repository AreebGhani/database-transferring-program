$(document).ready(function() {

    var form = $('#form');

    $.ajax({

        url: form.attr('action'),

        type: 'POST',

        data: $('#form input').serialize(),

        success: function(data, status) {

            console.log(data);

            console.log(status);

        }

    });

});