<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

<div class="container">
        <div class="page-header">
            <h1><span class="glyphicon glyphicon-user"></span> 
                Form Profil <small>Menampilkan profil user</small></h1> 
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/avatar.jpg" 
                    class="img-circle img-thumbnail">
            </div>
            <div class="col-md-6">
                <form action="">
                    <div class="form-group">
                        <label for="userid">User ID</label>
                        <input type="text" class="form-control"
                            id="userid">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control"
                            id="nama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea id="alamat" rows="5"
                            class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Telepon</label>
                        <input type="text" class="form-control"
                            id="telepon">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"
                            id="email">
                    </div>
                    <input type="submit" class="btn btn-success"
                        value="Simpan">
                </form>
            </div>
        </div>
    </div>

<?php $this->load->view("components/footer");?>