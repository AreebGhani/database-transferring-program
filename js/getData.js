$(document).ready(function() {

    $('#getbtn').click(function() {

        var getbtn = "getbtn";

        $.ajax({

            url: './php/getdata.php',

            type: 'POST',

            data: { getbtn: getbtn },

            success: function(responsedata) {

                $('#response').html(responsedata);

            }

        });

    });

});