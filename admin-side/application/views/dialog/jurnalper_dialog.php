<?php 
$this->load->view("components/header");
$this->load->view("components/navbar"); 
?>

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<form action="<?= $action ?>" method="GET">
				<div class="panel panel-info">
					<div class="panel-heading">Dialog Per-Jurnal</div>
					<div class="panel-body">
                        <div class="form-group">
                            <label for="jurnal">Daftar Jurnal</label>
                            <select name="idjurnal" id="idjurnal" class="form-control">
                                <?php 
                                    foreach ($jurnalall as $item): 
                                        echo "<option value='{$item->idjurnal}'>{$item->judul}</option>";
                                    endforeach;
                                ?>
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
