<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
        <div class="modal fade" tabindex="-1" role="dialog" id="form-penulisjurnal">
            <div class="modal-dialog">                    
                <div class="modal-content">
                    <div class="modal-header"><h3> Form Penulis</h3></div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="idpenulis">ID Penulis</label>
                            <input type="text" class="form-control" id="idpenulis">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="tgllahir">Tanggal Lahir</label>
                            <input type="text" class="form-control" id="tgllahir">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="Alamat">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" id="jurusan">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="prodi">Program Studi</label>
                                    <select id="prodi" class="form-control">
                                        <option value="s1">S1</option>
                                        <option value="d3">D3</option>     
                                    </select>
                                </div>
                            <div class="form-group col-md-4">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email">
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
            <h1><span class="glyphicon glyphicon-briefcase"></span> Penulis <small> Berisi Informasi Data Penulis</small></h1>
        </div>
        <button class="btn btn-success pull-right" data-toggle="modal" data-target="#form-penulisjurnal">
            <span class="glyphicon glyphicon-plus"></span> Tambah</button>
            <div class="clearfix"></div>
        <table class="table table-bordered table-striped tale-hover" style="margin-top: 10px">
            <thead>
                <tr>
                    <td>ID Penulis</td>
                    <td>Nama</td>
                    <td>Tanggal Lahir</td>
                    <td>Alamat</td>
                    <td>Program Studi</td>
                    <td>Email</td>
                    
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>111</td>
                    <td>Budi</td>
                    <td>18 Oktober 2018</td>
                    <td>Medan</td>
                    <td>S1</td>
                    <td>budi@gmail.com</td>
                    <td><button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-penulisjurnal">
                        <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                        <td><button class="btn btn-danger btn-block">
                                <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>112</td>
                    <td>Joni</td>
                    <td>11 Oktober 2018</td>
                    <td>Medan</td>
                    <td>S1</td>
                    <td>joni@gmail.com</td>
                    <td><button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-penulisjurnal">
                        <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                        <td><button class="btn btn-danger btn-block">
                                <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>113</td>
                    <td>Doni</td>
                    <td>10 Oktober 2018</td>
                    <td>Medan</td>
                    <td>D3</td>
                    <td>doni@gmail.com</td>
                    <td><button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-penulisjurnal">
                        <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                        <td><button class="btn btn-danger btn-block">
                                <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                    </td>
                <tr>
                    <td>114</td>
                    <td>Kayla</td>
                    <td>9 Oktober 2018</td>
                    <td>Medan</td>
                    <td>D3</td>
                    <td>kayla@gmail.com</td>
                    <td><button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-penulisjurnal">
                        <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                        <td><button class="btn btn-danger btn-block">
                                <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                    </td>
                </tr>
                <tr>
                    <td>115</td>
                    <td>Rani</td>
                    <td>8 Oktober 2018</td>
                    <td>Medan</td>
                    <td>D3</td>
                    <td>rani@gmail.com</td>
                    <td><button class="btn btn-warning btn-block"
                        data-toggle="modal" data-target="#form-penulisjurnal">
                        <span class="glyphicon glyphicon-pencil"></span> Rubah</button>
                        <td><button class="btn btn-danger btn-block">
                                <span class="glyphicon glyphicon-trash"></span> Hapus</button>
                    </td>
                </tr>   
            </tbody>
        </table>
    </div>

<?php $this->load->view("components/footer");?>