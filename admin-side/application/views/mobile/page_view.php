<html lang="en">
<head>
    <base href="<?= base_url() ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Jurnal IBBI</title>
    <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mobile.icons.min.css">
    <link rel="stylesheet" href="assets/css/jquery.mobile.structure-1.4.5.min.css">
</head>
<body>
    <div data-role="page" id="page-beranda">
        <div data-role="header" data-position="fixed">
            <h1>e-Jurnal IBBI</h1>
            <a href="mobile/login">Logout</a>
        </div>
        <div role="main" class="ui-content">
            <div>
                <h3 style="text-align:center;">Selamat datang di e-Jurnal IBBI</h3>
                <!-- <p>Silahkan cari jurnal yang anda butuhkan</p> -->
            </div>
            
            <form action="" autocomplete="off">
                <input type="text" id="katakunci" placeholder="Ketikkan kata kunci...">            
                <button class="ui-btn ui-shadow">Cari!</button>
            </form>
            
            <div style="margin-top:10%;">
                <h4>Daftar jurnal terbaru:</h4>
                <ul data-role="listview" id="list-jurnal" style="margin-top:1%;">
                    <li>
                        <a href="#page-jurnal" data-transition="slide">
                            <h2>Aplikasi Jurnal Online dengan OJS</h2>
                            <p>1513121479</p>
                            <p>2018</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h3>STMIK IBBI</h3>
        </div>
    </div>

    <div data-role="page" id="page-jurnal">
        <div data-role="header" data-position="fixed">
            <a href="" class="ui-btn ui-shadow" data-rel="back" data-direction="reverse">Back</a>
            <h1>e-Jurnal IBBI</h1>
        </div>
        <div role="main" class="ui-content">
            <div style="margin-top:5%;">
                <table>
                    <tbody>
                        <tr>
                            <td>Judul</td>
                            <td> : </td>
                            <td>Aplikasi Jurnal Online dengan OJS</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td> : </td>
                            <td>1513121479</td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td> : </td>
                            <td>Teknik Informatika</td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td> : </td>
                            <td>2018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h3>STMIK IBBI</h3>
        </div>
    </div>
    
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>