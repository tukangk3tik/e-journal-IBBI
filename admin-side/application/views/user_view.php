<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" id="form-userjurnal">
            <div class="modal-dialog">                    
                <div class="modal-content">
                    <div class="modal-header"><h3> Form User</h3></div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="userid">User ID</label>
                            <input type="text" class="form-control" id="userid">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="masukkan password anda">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>                
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Jenis</label>
                                <select id="status" class="form-control">
                                    <option value="ak">Akademik</option>
                                    <option value="do">Dosen</option>
                                    <option value="mh">Mahasiswa</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success">
                        <span class="glyphicon glyphicon-floppy-disk"></span> Simpan</button>
                        <button class="btn btn-danger" data-dismiss="modal">
                        <span class="glyphicon glyphicon-remove"></span> Batal </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-briefcase"></span> User <small> Berisi Informasi Data User</small></h1>
        </div>
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#form-userjurnal">
            <span class="glyphicon glyphicon-plus"></span> Tambah</button>
        <div class="clearfix"></div>
        <table class="table table-bordered table-striped tale-hover" style="margin-top: 10px">
            <thead>
                <tr>
                    <td>User Id</td>
                    <td>Nama</td>
                    <td>Password</td>
                    <td>Email</td>
                    <td>Jenis</td>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>Budi</td>
                    <td>47839947</td>
                    <td>Budi@gmail.com</td>
                    <td>Mahasiswa</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-userjurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>Dicky</td>
                    <td>23520996</td>
                    <td>dickypanjaitan1@gmail.com</td>
                    <td>Mahasiswa</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-userjurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>Felix</td>
                    <td>7789479</td>
                    <td>felix@gmail.com</td>
                    <td>Admin</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-userjurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>Joni</td>
                    <td>08047839</td>
                    <td>Joni@gmail.com</td>
                    <td>Dosen</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-userjurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>Jorbut</td>
                    <td>68589339</td>
                    <td>jorbut@gmail.com</td>
                    <td>Admin</td>
                    <td><button class="btn btn-warning btn-block" data-toggle="modal" data-target="#form-userjurnal"><span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                    <td><button class="btn btn-danger btn-block"><span class="glyphicon glyphicon-trash"></span> Hapus</button></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php $this->load->view("components/footer");?>