<html>

<head>
    <title>Phone Number Authentication with Firebase Web</title>

    <!-- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="text-center">
                    <a href="#">
                        <img src="#" width="150px">
                    </a>
                </div>
                <div class="text-center">
                    <h5>Enter number to create account</h5>
                    <form>
                        <input class="form-control" type="text" id="number" placeholder="+628123456789">
                        <div class="text-center" id="recaptcha-container"></div>
                        <button class="btn btn-primary" type="button" onclick="phoneAuth();">SendCode</button>
                    </form><br>
                    <h5>Enter Verification code</h5>
                    <form>
                        <input class="form-control" type="text" id="verificationCode" placeholder="Enter verification code">
                        <button class="btn btn-primary" type="button" onclick="codeverify();">Verify code</button>
                    </form>
                </div>
            </div>
        </div>
        <div>


            <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
            <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>

            <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
            <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-analytics.js"></script>

            <!-- Add Firebase products that you want to use -->
            <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
            <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>

            <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

            <script>
                // Masukkan Firebase di sini
                var firebaseConfig = {
                    apiKey: "AIzaSyCWqypwJTf-hNAu2csdtPvM3VKu4eZnQkI",
                    authDomain: "blaze-gaming-65773.firebaseapp.com",
                    databaseURL: "https://blaze-gaming-65773.firebaseio.com",
                    projectId: "blaze-gaming-65773",
                    storageBucket: "blaze-gaming-65773.appspot.com",
                    messagingSenderId: "181921936719",
                    appId: "1:181921936719:web:6cb6c989d0e6e18826413a",
                    measurementId: "G-QKJGMDL7HG"
                };
                // Copy paste saja yaa
                firebase.initializeApp(firebaseConfig);
                firebase.analytics();
                const Auth = firebase.auth()
            </script>
            <script src="phone_verify.js" type="text/javascript"></script>
            <!-- ini untuk jQuery -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>