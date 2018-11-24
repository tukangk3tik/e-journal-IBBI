function konversiJurusan(nilai){
    var hasil = "";

    if (nilai == "TI"){
        hasil = "Teknik Informatika";
    } else if (nilai == "SI"){
        hasil = "Sistem Informasi";
    }
    return hasil;
}

function konversiKonsentrasi(nilai){
    var hasil = "";
    switch(nilai){
        case "MM": hasil = "Multimedia"; break;
        case "ADB": hasil = "Administrasi Bisnis"; break;
        case "RPL": hasil = "Rekayasa Perangkat Lunak"; break;
        case "JK": hasil = "Jaringan Komputer"; break;
    }
    return hasil;
}

function konversiStatusUser(nilai){
    var hasil = "";
    switch(nilai){
        case "AKD": hasil = "Akademik"; break;
        case "DOS": hasil = "Dosen"; break;
        case "MHS": hasil = "Mahasiswa"; break;

    }
    return hasil;
}