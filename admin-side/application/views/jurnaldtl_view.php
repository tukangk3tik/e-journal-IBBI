<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-briefcase"></span> Detail Jurnal <small>Berisi Informasi Data Jurnal Detail</small></h1>
        </div>
        <?php foreach($jurnal as $item){};?>
        <div class="col-md-8">
        <form action="#" method="POST">
            <div class="row">
            <table>
                <tr>
                    <td>ID Jurnal</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><?php echo "{$item->idjurnal}";?></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><?php echo "{$item->judul}";?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><?php echo "{$item->nim}";?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><?php echo "{$item->tahun}";?></td>
                </tr>
                <tr>
                    <td>Jumlah Halaman</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td><?php echo "{$item->jumlahhalaman}";?></td>
                </tr>
            </table>
            </div>
            <div class="row" style="padding-top: 20px;">
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select id="jenis" class="form-control" value="">
                    <option value="awalan">Judul, Kata Pengantar, Daftar Isi</option>
                    <option value="1">BAB I</option>
                    <option value="2">BAB II</option>
                    <option value="3">BAB III</option>
                    <option value="4">BAB IV</option>
                    <option value="5">BAB V</option>
                </select>
            </div>
            <div class="form-group">
                <label for="isi">Isi</label>
                <textarea name="isi" id="isi" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <input class="form-group btn btn-primary" type="submit" name="submit" value="Submit"> 
            </div>
        </form>
        </div>

        <div class="col-md-4">
            <table class="table table-bordered table-striped table-hover" style="margin-top: 10px; text-align: center;">
                <thead>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Link</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Awalan</td>
                        <td><span class="glyphicon glyphicon-ok-circle" style="color:green"></span></td>
                        <td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                    <tr>
                        <td>BAB I</td>
                        <td><span class="glyphicon glyphicon-ok-circle" style="color:green"></span></td>
                        <td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                    <tr>
                        <td>BAB II</td>
                        <td><span class="glyphicon glyphicon-ok-circle" style="color:green"></span></td>
                        <td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                    <tr>
                        <td>BAB III</td>
                        <td><span class="glyphicon glyphicon-ok-circle" style="color:green"></span></td>
                        <td><a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                    <tr>
                        <td>BAB IV</td>
                        <td><span class="glyphicon glyphicon-remove-circle" style="color:red;"></span></td>
                        <td><a disabled href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                    <tr>
                        <td>BAB V</td>
                        <td><span class="glyphicon glyphicon-remove-circle" style="color:red;"></span></td>
                        <td><a disabled href="#" class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> Lihat</a></td>
                    </tr>
                </tbody>
            </table>
            <a href="jurnal" class="form-group btn btn-warning btn-block" style="margin-top: 10px;">Kembali ke Halaman Jurnal</a>
            <div class="clearfix"></div>
        </div>
    </div>
    <script src="assets/js/converter.js"></script>
    <script src="assets/js/app/jurnal.js"></script>
<?php $this->load->view("components/footer");?>