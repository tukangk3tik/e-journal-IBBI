<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" id="form-penulis">
            <div class="modal-dialog">                    
                <div class="modal-content">
                    <div class="modal-header"><h3> Form <span id="mode"> </span> Penulis </h3></div>
                    <div class="modal-body">
                        <form action="" autocomplete="off">
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="tanggallahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggallahir" name="tanggallahir"> 
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tempatlahir">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempatlahir" name="tempatlahir"> 
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="jurusan">Jurusan</label>
                                    <select id="jurusan" name="jurusan" class="form-control" onchange="gantiKons(this)">
                                        <option disabled selected value="">--pilih-jurusan--</option>
                                        <option value="SI">Sistem Informasi</option>
                                        <option value="TI">Teknik Informatika</option>     
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="konsentrasi">Konsentrasi</label>
                                    <select id="konsentrasi" name="konsentrasi" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="telepon">Telepon</label>
                                    <input type="text" class="form-control" id="telepon" name="telepon">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>
                            </div>
                         </form>
                    </div>
                    
                    <div class="modal-footer">
                        <button class="btn btn-success" id="simpan"> 
                        <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                        <button class="btn btn-danger" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Batal </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-briefcase"></span> Penulis <small> Berisi Informasi Data Penulis</small></h1>
        </div>
        <button class="btn btn-default" id="reload">
            <span class="glyphicon glyphicon-refresh"></span> Reload
        </button>
        <button class="btn btn-success pull-right" data-toggle="modal" id="tambah">
            <span class="glyphicon glyphicon-plus"></span> Tambah</button>
            <div class="clearfix"></div>
        <table class="table table-bordered table-striped tale-hover" style="margin-top: 10px">
            <thead>
                <tr>
                    <td>NIM</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Tempat Lahir</td>
                    <td>Alamat</td>
                    <td>Jurusan</td>
                    <td>Konsentrasi</td>
                    <td>Telepon</td>
                    <td>Email</td>
                    
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
    
            </tbody>
        </table>
    </div>

    <script src="assets/js/converter.js"></script>
    <script src="assets/js/app/penulis.js"></script>
<?php $this->load->view("components/footer");?>