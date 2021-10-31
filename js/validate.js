$(document).ready(function() {

    $('#submit').click(function() {

        var e = $('#select').val();

        if (e == null) {

            $('#form').submit(function(event) {

                event.preventDefault();

            });

            location.replace('./index.html?emptymessage=Please Select No. Of Columns . . . ! !');

        }

    })

});