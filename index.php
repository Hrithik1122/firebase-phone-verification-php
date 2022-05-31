<html>
<head>
    <title>Phone Number Authentication with Firebase Using Php</title>
</head>
<body>
<h1>Enter number to create account</h1>
<form>
    <input type="text" id="number" placeholder="+919876543210">
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">Send Code</button>
</form><br>
<h1>Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify Code</button>

</form>

<h3 align="center">Developed By ❤️ Hrithik Bansal</h3>
<h3 align="center"><a href="https://github.com/Hrithik1122/">Github</a></h3>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    // Change this configuration according to you projecthrithik
    var firebaseConfig = {
        apiKey: "AIzaSyCDmDjyLAJNMT4uME5z1Sxcg4ombXA4t9w",
  authDomain: "hrithik-7aecd.firebaseapp.com",
  databaseURL: "https://hrithik-7aecd-default-rtdb.firebaseio.com",
  projectId: "hrithik-7aecd",
  storageBucket: "hrithik-7aecd.appspot.com",
  messagingSenderId: "492655935748",
  appId: "1:492655935748:web:6640f4dd3640f410f41051",
  measurementId: "G-C51KFH5H0T"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>