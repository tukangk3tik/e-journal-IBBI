<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
            <div class="modal fade" tabindex="-1" role="dialog" id="form-jurnal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><h3>Form Mahasiswa</h3></div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="idjurnal">ID Jurnal</label>
                                <input type="text" id="idjurnal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" id="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="idpenulis">ID Penulis</label>
                                <input type="text" id="idpenulis" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="fakultas">Fakultas</label>
                                <select id="fakultas" class="form-control">
                                    <option value="stmik">STMIK</option>
                                    <option value="stie">STIE</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" value="">
                                    <option value="si">Sistem Informasi</option>
                                    <option value="ti">Teknik Informatika</option>
                                    <option value="ak">Akuntansi</option>
                                    <option value="mn">Manajemen</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="tahun" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jumlahhal">Jumlah Halaman</label>
                                <input type="text" id="jumlahhal" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ringkasan">Ringkasan</label>
                                <textarea class="form-control" rows="5" id="ringkasan"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success">
                                <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                            <button class="btn btn-danger" data-dismiss="modal">
                                <span class="glyphicon glyphicon-remove"></span> Batal</button>
                        </div>
                    </div>
                </div>
            </div>

        <div class="page-header">
            <h1><span class="glyphicon glyphicon-briefcase"></span> Jurnal Online <small>Berisi Informasi Data Jurnal Online</small></h1>
        </div>
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#form-jurnal">
            <span class="glyphicon glyphicon-plus"></span> Tambah
        </button>
        <h4>Daftar Jurnal:</h4>
        <div class="clearfix"></div>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 10px; text-align: center;">
            <thead>
                <tr>
                    <td>ID Jurnal</td>
                    <td>Judul</td>
                    <td>ID Penulis</td>
                    <td>Tahun</td>
                    <td>Jumlah Halaman</td>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>J-TI17-008</td>
                    <td>Robotik Pembersih Kolam dari RaspberiPi</td>
                    <td>1513121489</td>
                    <td>2017</td>
                    <td>120</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-jurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button></td>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                    <td><a href="jurnaldetail" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-pencil"></span> Detail Jurnal</a></td>
                </tr>
                <tr>
                    <td>J-TI17-008</td>
                    <td>Robotik Pembersih Kolam dari RaspberiPi</td>
                    <td>1513121489</td>
                    <td>2017</td>
                    <td>120</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-jurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button></td>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                    <td><a href="jurnaldetail" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-plus"></span> <span class="glyphicon glyphicon-pencil"></span>  Detail Jurnal</a></td>
                </tr>    
            </tbody>
        </table>
    </div>

<?php $this->load->view("components/footer");?>