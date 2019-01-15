<?php
$this->load->view("laporan/head",array("title" => $title));
?>
<h1><?= $title ?></h1>
<table>
    <thead>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Konsentrasi</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
    <?php
    foreach($penulis as $item):
        echo "<tr>
                <td>{$item->nim}</td>
                <td>{$item->nama}</td>
                <td>{$item->tempatlahir}</td>
                <td>{$item->tanggallahir}</td>
                <td>{$item->alamat}</td>
                <td>{$item->jurusan}</td>
                <td>{$item->konsentrasi}</td>
                <td>{$item->telepon}</td>
                <td>{$item->email}</td>
            </tr>";
    endforeach;
    ?>
    </tbody>
</table>
<?php
$this->load->view("laporan/foot");