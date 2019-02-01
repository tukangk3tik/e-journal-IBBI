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

function konversiBab(nilai){
    var hasil = "";
    switch(nilai){
        case "6": hasil = "Awalan"; break;
        case "1": hasil = "BAB I"; break;
        case "2": hasil = "BAB II"; break;
        case "3": hasil = "BAB III"; break;
        case "4": hasil = "BAB IV"; break;
        case "5": hasil = "BAB V"; break;
    }
    return hasil;
}