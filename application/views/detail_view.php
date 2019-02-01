<html lang="en">
<head>
    <base href="<?= base_url(); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <?php foreach($ket as $item){}; $hasil = "{$tampil->jenis}"; ?>
    <title><?= "{$item->judul}"  ?></title>
    <style>
        h1{
            text-align: center;
        }
        table{
            width: 100%;
            border-collapse: collapse;
        }
        td,th {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1><?php echo "{$item->judul}"; ?></h1>
    <table class="table table-bordered table-hover" style="margin-bottom: 10px;">
        <thead><tr><th style="text-align: center;"><h3>
            <?php 
                    switch ($hasil) {
                        case $hasil==6:
                            echo '<option value="6">Judul, Kata Pengantar, Daftar Isi</option>';
                            break;
                        case $hasil==1:
                            echo '<option value="1">BAB I</option>';
                            break;
                        case $hasil==2:
                            echo '<option value="2">BAB II</option>';
                            break;
                        case $hasil==3:
                            echo '<option value="3">BAB III</option>';
                            break;
                        case $hasil==4:
                            echo '<option value="4">BAB IV</option>';
                            break;
                        case $hasil==5:
                            echo '<option value="5">BAB V</option>';
                            break;
                    };

            ?></h3></th></tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo "{$tampil->isi}";?>
                </td>
            </tr>
        </tbody>
    </table>
    <form action='jurnal/jurnaldtl' method='POST'>
        <input hidden type='text' name='idjurnal' value='<?php echo "{$item->idjurnal}"; ?>'>
        <input type='submit' class='btn btn-warning' value='Kembali'>
    </form>
    </div>
    <script src="assets/js/converter.js"></script>
</body>
</html>


