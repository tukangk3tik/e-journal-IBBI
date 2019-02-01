<?php 
$this->load->view("components/header");
$this->load->view("components/navbar"); 
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="<?= $action ?>" method="GET">
				<div class="panel panel-info">
					<div class="panel-heading">Dialog Jurnal Per-Jurusan</div>
					<div class="panel-body">
                        <div class="form-group">
                            <label for="jurnal">Daftar Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control">
                                <option value="SI">Sistem Informasi</option>
                                <option value="TI">Teknik Informatika</option>
                            </select>
                        </div>
					</div>
					<div class="panel-footer">
                        <input type="submit" value="Submit" class="btn btn-success">
                    </div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php 
$this->load->view("components/footer"); 
?>
