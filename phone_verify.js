window.onload = function() {
    render();
};

function render() {
    // window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
    // 'size': 'invisible',
    // 'callback': function(response) {
    // reCAPTCHA solved, allow signInWithPhoneNumber.
    //onSignInSubmit();
    //phoneAuth()
    //}
    //});
    window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier(
        "recaptcha-container"
    );
    recaptchaVerifier.render();
}

function phoneAuth() {
    //get the number
    var number = document.getElementById("number").value;
    //phone number authentication function of firebase
    //it takes two parameter first one is number,,,second one is recaptcha
    firebase
        .auth()
        .signInWithPhoneNumber(number, window.recaptchaVerifier)
        .then(function(confirmationResult) {
            //s is in lowercase
            window.confirmationResult = confirmationResult;
            coderesult = confirmationResult;
            console.log(coderesult);
            alert("Message sent to your phone");
        })
        .catch(function(error) {
            alert(error.message);
        });
}

function codeverify() {
    var code = document.getElementById("verificationCode").value;
    coderesult
        .confirm(code)
        .then(function(result) {
            if (result.user.uid) {
                let phoneNumber = result.user.phoneNumber;
                window.location = "register.html";
                console.log(user);
            } else {
                window.location = "phone_verify.html";
            }
        })
        .catch(function(error) {
            alert(error.message);
        });
}