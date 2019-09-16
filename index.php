<html>

<head>
        <meta charset="utf-8" />
    <title>Javascript kullanıcı işlemleri</title>
    <style>
        @import url("css/styles.css");
    </style>
    <script src="js/common_functions.js"></script>
</head>

<?php print "test";?>

<body>
    <div id="main_wrapper">
    <form id="user_crud" method="POST" action="login.php">
        <p>Giriş yapmak için gerekli bilgileri giriniz.</p>
        <div id="username_wrapper" class="form_item">
            <label for="username">Username</label>
            <input type="text" name="username" class="input_text">
        </div>
        <div id="pass_wrapper" class="form_item">
            <label for="password">Password</label>
            <input type="password" name="password" class="input_text">
        </div>
        <input type="submit" id="form_submit">
        <p class="register_link"><a href="register.html">Kayıt</a></p>
    </form>
    </div>
</body>

</html>