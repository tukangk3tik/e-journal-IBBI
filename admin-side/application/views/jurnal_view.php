<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
            <div class="modal fade" tabindex="-1" role="dialog" id="form-jurnal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><h3>Form Jurnal</h3></div>
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
                                <label for="nim">NIM</label>
                                <input type="text" id="nim" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jurusan">Jurusan</label>
                                <select id="jurusan" class="form-control" value="">
                                    <option value="SI">Sistem Informasi</option>
                                    <option value="TI">Teknik Informatika</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="tahun">Tahun</label>
                                <input type="text" id="tahun" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="jumlahhal">Jumlah Halaman</label>
                                <input type="text" id="jumlahhalaman" class="form-control">
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
        <button class="btn btn-success pull-right" data-toggle="modal" id="tambah">
            <span class="glyphicon glyphicon-plus"></span> Tambah
        </button>
        <!--h4>Daftar Jurnal:</h4-->
        <div class="form-inline">
            <div class="form-group">
                <label for="jurusan">Jurusan &nbsp;</label>
                <select name="" id="jurusan" class="form-control">
                    <option value="si">Sistem Informasi</option>
                    <option value="ti">Teknik Informatika</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">&nbsp; Tahun &nbsp;</label>
                <select name="" id="tahun" class="form-control">
                    <option value="18">2018</option>
                    <option value="17">2017</option>
                    <option value="16">2016</option>
                    <option value="15">2015</option>
                    <option value="14">2014</option>
                    <option value="13">2013</option>
                    <option value="12">2012</option>
                    <option value="11">2011</option>
                    <option value="10"><= 2010 </option>
                </select>
            </div>
            <button id="submit" class="btn btn-primary">Submit</button>
        </div>
        <div class="clearfix"></div>
        <table class="table table-bordered table-striped table-hover" style="margin-top: 10px; text-align: center;">
            <thead>
                <tr>
                    <td>ID Jurnal</td>
                    <td>Judul</td>
                    <td>NIM</td>
                    <td>Tahun</td>
                    <td>Jumlah Halaman</td>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody id="table-jurnal" >
            </tbody>
        </table>
    </div>

    <script src="assets/js/app/jurnal.js"></script>
<?php $this->load->view("components/footer");?>