<?php
$this->load->view("laporan/head",array("title" => $title));
?>
<h1><?= $title ?></h1>
<table>
    <thead>
        <tr>
            <th>ID Jurnal</th>
            <th>Judul</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tahun</th>
            <th>Jumlah Halaman</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($jurnal as $item):
        echo "<tr>
                <td>{$item->idjurnal}</td>
                <td>{$item->judul}</td>
                <td>{$item->nim}</td>
                <td>{$item->nama}</td>
                <td>{$item->tahun}</td>
                <td>{$item->jumlahhalaman}</td>
            </tr>";
    endforeach;
    ?>
    </tbody>
</table>
<?php
$this->load->view("laporan/foot");