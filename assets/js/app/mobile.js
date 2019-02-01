var idjurnal="";
var kunci="";
var jenis="";
var judul="";
var teks="";

$(document).on("mobileinit",function(){

    $("#page-beranda").on("pageshow",function(){
        $.get("mobile/page/ambiljurnal",function(data){
            var html = "";
            $.each(data,function(key,item){
                html += "<li>" +
                        "<a href='#page-jurnal' data-id='"+ item.idjurnal +"' "+
                        "data-transition='slide'" +
                        "<h2>"+ item.judul +"</h2>" +
                        "<p>"+ item.nim +"</p>" +
                        "<p>"+ item.tahun +"</p></a></li>";
            });
            $("#list-jurnal").html(html).listview("refresh");
        },"json");
    })

    $("#page-beranda").on("click","button#cari",function(e){
        e.preventDefault();
        teks = $("input#katakunci").val();     

        $.get("mobile/page/carijurnal/"+teks,function(data){
            var html = "";
             $.each(data,function(key,item){
                html += "<li>" +
                        "<a href='#page-jurnal' data-id='"+ item.idjurnal +"' "+
                        "data-transition='slide'" +
                        "<h2>"+ item.judul +"</h2>" +
                        "<p>"+ item.nim +"</p>" +
                        "<p>"+ item.tahun +"</p></a></li>";
            });
            $("#list-jurnal").html(html).listview("refresh");
        },"json");
    })

    $("#page-beranda").on("click","a[href='#page-jurnal']",function(){
        idjurnal = $(this).data("id");
    })

    $("#page-jurnal").on("pageshow",function(){
        $.post("mobile/page/ambilsatujurnal/"+idjurnal,{idjurnal: idjurnal},function(data){
            var html = "";
            $.each(data,function(index,item){
                html += "<tr><td>Judul</td><td> : </td><td>"+ item.judul +"</td></tr>" +
                        "<tr><td>NIM</td><td> : </td><td>"+ item.nim +"</td></tr>" +
                        "<tr><td>Jurusan</td><td> : </td><td>"+ konversiJurusan(item.jurusan) +"</td></tr>" +
                        "<tr><td>Tahun</td><td> : </td><td>"+ item.tahun +"</td></tr>";
                judul = item.judul;
            });
            $("tbody#table-detail").html(html);
        },"json")
    })

    $("#page-jurnal").on("click","a[href='#page-detail']",function(){
        jenis = $(this).data("id");
    })

    $("#page-detail").on("pageshow",function(){ 
        var htmlhead = "";
        
        htmlhead += "<h3>"+ judul +"</h3>";
        
        console.log(konversiBab(jenis));
        $("div#isi").empty();
        $.post("mobile/page/ambilisijurnal/"+idjurnal+"/"+jenis,function(data){
            var html = "";

            $.each(data,function(index,item){
                html += item.isi;
            })
            $("div#isi").html(html);
        },"json")
        $("div#judul-detail").html(htmlhead);
    })

})

