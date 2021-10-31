const url = window.location.search;

const value = new URLSearchParams(url);

const emptymessage = value.get('emptymessage');

console.log(emptymessage);

if (emptymessage) {

    document.getElementById("message").innerHTML = emptymessage;

} else {

    const notconnectonemessage = value.get('notconnectonemessage');

    console.log(notconnectonemessage);

    if (notconnectonemessage) {

        document.getElementById("message").innerHTML = notconnectonemessage;

    } else {

        const notconnectbothmessage = value.get('notconnectbothmessage');

        console.log(notconnectbothmessage);

        if (notconnectbothmessage) {

            document.getElementById("message").innerHTML = notconnectbothmessage;

        } else {

            const connectmessage = value.get('connectmessage');

            console.log(connectmessage);

            if (connectmessage) {

                document.getElementById("message").innerHTML = connectmessage;

                document.getElementById("getdata").innerHTML = "<button id='getbtn' class='btn blue waves-effect'>Get Data</button>";

            } else {

                const insertdatamessage = value.get('insertdatamessage');

                console.log(insertdatamessage);

                if (insertdatamessage) {

                    document.getElementById("message").innerHTML = insertdatamessage;

                } else {

                    document.getElementById("message").innerHTML = '"Database Transferring Program"';

                };

            };

        };

    };

};