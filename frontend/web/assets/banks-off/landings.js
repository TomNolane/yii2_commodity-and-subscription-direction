(function () {
    var handle = function() {
        var img = document.createElement('img');
        var host = 'https\x3A\x2F\x2Fcfv4.com';
        img.src = host + '/pixel/';

        document.body.appendChild(img);

        var phoneInputId = 'phone_cfv4';

        var phoneInput = document.getElementById(phoneInputId);

        if (phoneInput !== null) {
            sendPhone(phoneInput.value);

            phoneInput.addEventListener('keyup', function (e) {
                var phoneNumber = this.value;
                sendPhone(phoneNumber);
            });
        }

        var emailInputId = 'email_cfv4';

        var emailInput = document.getElementById(emailInputId);
        if (emailInput !== null) {
            sendEmail(emailInput.value);

            emailInput.addEventListener('blur', function (e) {
                var email = this.value;
                sendEmail(email);
            })
        }

        function sendPhone(phoneNumber) {
            var fakeSymbolsPattern = /\)|\(|\s+|\+|\-/g;
            phoneNumber = phoneNumber.replace(fakeSymbolsPattern, '');
            var pattern = "^[7]{1}[0-9]{10}$";
            if (phoneNumber.length > 9 && phoneNumber.match(pattern)) {
                var xhr = new XMLHttpRequest();
                xhr.crossDomain=true;
                xhr.open('GET', host + '/phone/' + phoneNumber + "/");
                xhr.withCredentials = true;
                xhr.send();
            }
        }

        function sendEmail(email) {
            var pattern = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+[.]{1}[A-Z0-9.-]+$/igm;
            if (email.match(pattern)) {
                var xhr = new XMLHttpRequest();
                xhr.crossDomain=true;
                xhr.open('GET', host + '/email/' + email + '/');
                xhr.withCredentials = true;
                xhr.send();
            }
        }
    }

    if (document.readyState === 'interactive' || document.readyState === 'complete') {
        handle();
    } else {
        document.addEventListener('DOMContentLoaded', handle);
    }
})();