
    <?php

header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Origin: *");
header('content-type: application/json; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Document</title>
</head>
<body>

    <h1>RPG DO BRUNO</h1>

    <script type="module">

  // Import the functions you need from the SDKs you need

  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-app.js";

  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.1/firebase-analytics.js";

  // TODO: Add SDKs for Firebase products that you want to use

  // https://firebase.google.com/docs/web/setup#available-libraries


  // Your web app's Firebase configuration

  // For Firebase JS SDK v7.20.0 and later, measurementId is optional

  const firebaseConfig = {

    apiKey: "AIzaSyCR2oo_uapJflZLSPBDlE3ZSSkRHyqLFaQ",

    authDomain: "fichasopd.firebaseapp.com",

    projectId: "fichasopd",

    storageBucket: "fichasopd.appspot.com",

    messagingSenderId: "828901901103",

    appId: "1:828901901103:web:8c2bf37f6705b8b03f17da",

    measurementId: "G-KPJLXT3Z8H",

  };

  // Initialize Firebase

  const app = initializeApp(firebaseConfig);


  const analytics = getAnalytics(app);

  $.get("https://fichasopd-default-rtdb.firebaseio.com/batata", function(data) {
            alert( "Deu certo " + data.name + " .");
        }, "json");

</script>

</body>
</html>