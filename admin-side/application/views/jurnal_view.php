<?php $this->load->view("components/header"); 
      $this->load->view("components/navbar");?>

    <div class="container">
            <div class="modal fade" tabindex="-1" role="dialog" id="form-jurnal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header"><h3>Form Jurnal</h3></div>
                        <div class="modal-body">
                            <form action="" autocomplete="off">
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" id="judul" name="judul" class="form-control">
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="nim">NIM</label>
                                        <select id="nim" name="nim" class="form-control">
                                        <option disabled selected value="">--pilih-NIM--</option>
                                        <?php
                                            foreach($penulis as $item):
                                                echo "<option value='{$item->nim}'>{$item->nim}</option>";
                                            endforeach;
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jurusan">Jurusan</label>
                                        <select id="jurusan" name="jurusan" class="form-control" value="">
                                            <option disabled selected value="">--pilih-Jurusan--</option>
                                            <option value="SI">Sistem Informasi</option>
                                            <option value="TI">Teknik Informatika</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="tahun">Tahun</label>
                                        <select name="tahun" id="tahun" class="form-control">
                                            <option disabled selected value="">--pilih-Tahun--</option>
                                            <option value="18">2018</option>
                                            <option value="17">2017</option>
                                            <option value="16">2016</option>
                                            <option value="15">2015</option>
                                            <option value="14">2014</option>
                                            <option value="13">2013</option>
                                            <option value="12">2012</option>
                                            <option value="11">2011</option>
                                            <option value="10">2010</option>
                                            <option value="9">2009</option>
                                            <option value="8">2008</option>
                                            <option value="7">2007</option>
                                            <option value="6">2006</option>
                                            <option value="5">2005</option>
                                            <option value="4">2004</option>
                                            <option value="3">2003</option>
                                            <option value="2">2002</option>
                                            <option value="1">2001</option>
                                            <option value="0"><= 2000</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jumlahhalaman">Jumlah Halaman</label>
                                        <input type="text" id="jumlahhalaman" name="jumlahhalaman" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="ringkasan">Ringkasan</label>
                                    <textarea class="form-control" rows="5" id="ringkasan" name="ringkasan"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" id="simpan">
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
                <select name="tahun" id="tahun" class="form-control">
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
                    <th>ID Jurnal</th>
                    <th>Judul</th>
                    <th>NIM</th>
                    <th>Tahun</th>
                    <th>Jurusan</th>
                    <th>Jumlah Halaman</th>
                    <th colspan="3">Action</th>
                </tr>
            </thead>
            <tbody id="table-jurnal" >
            </tbody>
        </table>
    </div>
    <script src="assets/js/converter.js"></script>
    <script src="assets/js/app/jurnal.js"></script>
<?php $this->load->view("components/footer");?>