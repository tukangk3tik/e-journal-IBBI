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

    <style>
        ul li {
            margin-top: 20px;
        }
    </style>
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
                <button class="ui-btn ui-shadow" id="cari">Cari!</button>
            </form>
            
            <div style="margin:10% 2% 2% 2%;">
                <h4>Daftar jurnal terbaru:</h4>
                <ul data-role="listview" id="list-jurnal" style="margin-top:1%;">
    
                </ul>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h3>STMIK IBBI</h3>
        </div>
    </div>

    <div data-role="page" id="page-jurnal">
        <div data-role="header" data-position="fixed">
            <a href="" class="ui-btn ui-shadow" data-rel="back" data-transition="slide" 
                data-direction="reverse">Back</a>
            <h1>e-Jurnal IBBI</h1>
        </div>
        <div role="main" class="ui-content">
            <div style="margin-top:5%;">
                <table>
                    <tbody id="table-detail">
                    <!-- ajax view here -->
                    </tbody>
                </table>
            </div>

            <div style="margin:10% 2% 2% 2%;">
                <h4>Detail jurnal:</h4>
                <ul data-role="listview" id="list-jurnal" style="margin-top:1%;">
                    <li>
                        <a href="#page-detail" data-id="1" data-transition="slide">
                            <h2>BAB I</h2>
                        </a>
                    </li>
                    <li>
                        <a href="#page-detail" data-id="2" data-transition="slide">
                            <h2>BAB II</h2>
                        </a>
                    </li>
                    <li>
                        <a href="#page-detail" data-id="3" data-transition="slide">
                            <h2>BAB III</h2>
                        </a>
                    </li>
                    <li>
                        <a href="#page-detail" data-id="4" data-transition="slide">
                            <h2>BAB IV</h2>
                        </a>
                    </li>
                    <li>
                        <a href="#page-detail" data-id="5" data-transition="slide">
                            <h2>BAB V</h2>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-role="footer" data-position="fixed">
            <h3>STMIK IBBI</h3>
        </div>
    </div>
    
    <div data-role="page" id="page-detail">
        <div data-role="header" data-position="fixed">
            <a href="" class="ui-btn ui-shadow" data-rel="back" data-transition="slide" 
                data-direction="reverse">Back</a>
            <h1>e-Jurnal IBBI</h1>
        </div>
        <div data-role="main">
            <div style="text-align: center; border-bottom: thin solid #0000;" id="judul-detail">
               
            </div>
            
            <div style="padding: 2% 5% 2% 5%; text-align: justify;" id="isi">
                
            </div>
        </div>
    </div>
    

    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/js/converter.js"></script>
    <script src="assets/js/app/mobile.js"></script>
    <script src="assets/js/jquery.mobile-1.4.5.min.js"></script>
</body>
</html>