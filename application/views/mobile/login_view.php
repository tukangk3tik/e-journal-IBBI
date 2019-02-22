<html lang="en">
<head>
    <base href="<?= base_url() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Jurnal IBBI Mobile</title>
    <link rel="stylesheet" href="assets/css/themes/ejurnal.min.css">
    <link rel="stylesheet" href="assets/css/themes/jquery.mobile.icons.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css">
</head>

<body>
    <div data-role="page">
        <div data-role="header"><h1>e-Jurnal IBBI</h1></div>
        <div role="main" class="ui-content">
            <div style="margin-top:20%;">
                <div style="text-align: center; margin-bottom: 10px;">
                    <img src="assets/img/logo-login.png" width="40%" height="auto" style="margin-bottom:5%;">
                </div>
                <form action="mobile/login/ceklogin" id="form-login" data-ajax="false" method="POST" autocomplete="off">
                    <div class="ui-field-content">
                        <input type="text" name="iduser" id="iduser" placeholder="ID">
                    </div>
                    <div class="ui-field-content">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Login" data-role="button" data-theme="b">
                </form>
            </div>
            <div data-role="footer"data-position="fixed">
                <h3>STMIK IBBI</h3>
            </div>
            </div>
    </div>

    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>