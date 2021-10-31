function option(value) {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {

        if (this.readyState == 4 && this.status == 200) {

            document.getElementById("inputfield").innerHTML = this.responseText;

        }

    };

    xhttp.open("GET", "./php/option.php?datavalue=" + value, true);

    xhttp.send();

};