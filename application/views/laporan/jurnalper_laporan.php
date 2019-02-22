<?php
$this->load->view("laporan/head",array("title" => $title));
?>
<h1><?= $title ?></h1>
<?php foreach($datajurnal as $item){} ?>
            <table>
                <tr>
                    <td>ID Jurnal</td>
                    <td><?php echo "{$item->idjurnal}";?></td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td><?php echo "{$item->judul}";?></td>
                </tr>
                <tr>
                    <td>NIM</td>
                    <td><?php echo "{$item->nim}";?></td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td><?php echo "{$item->tahun}";?></td>
                </tr>
                <tr>
                    <td>Jumlah Halaman</td>
                    <td><?php echo "{$item->jumlahhalaman}";?></td>
                </tr>
            </table>

            <?php            
                                
                for ($i=0;$i<5;$i++){
                    foreach ($isijurnal[$i] as $item) {}
                    // $temp = [];
                    // foreach ($item as $temp) {};
                    echo "<table style='margin-top:20px;'>
                                <thead>
                                    <tr>
                                        <th>BAB ".($i+1)."</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{$item}</td>
                                    </tr>
                                </tbody>
                            </table>";
                
                    //$i++;
                }
            ?>
            
            <!-- <table>
                <thead>
                    <tr>
                        <th>BAB I</th>
                    </tr>
                </thead>
                <tbody>

                    <?php  ?>
                </tbody>
            </table>

            <table>
                <thead>
                    <tr>
                        <th>BAB I</th>
                    </tr>
                </thead>
                <tbody>

                    <?php ($item); ?>
                </tbody>
            </table> -->
<?php
$this->load->view("laporan/foot");