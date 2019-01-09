
    var html = ""; 
        html =  "<?= $penulis = $this->jurnal_model->ambilPenulis()->result();?>" +
                    "<label for='nim'>NIM</label><select id='nim' name='nim' class='form-control'><option disabled selected value=''>--pilih-NIM--</option>"+
                    "<?php foreach($penulis as $item): echo '<option value=\"'.$item->nim.'\">'.$item->nim.'</option>' endforeach; ?>"+
                    "</select>";
