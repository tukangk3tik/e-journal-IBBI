var mode = "";

$(document).ready(function(){
    tampilJurnal();

    $("#tambah").click(function(){
        mode = "tambah";
        $("form")[0].reset();
        $("#mode").html("Tambah");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("#form-jurnal").modal("show");
    });

    $("#simpan").click(function(){
        simpanJurnal();
    });
})

function tampilPesan(mode){
    var divMessage = "<div class='alert alert-success'> Berhasil <strong>"+ mode.toUpperCase() + "</strong> Jurnal </div>";
    $(divMessage).prependTo(".container").delay(2000).slideUp("slow");
}

function simpanJurnal(){
    $.ajax({
        url: "jurnal/simpan/"+mode,
        type: "POST",
        data: $("form").serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status){
                tampilJurnal();
                tampilPesan(mode);
                $("#form-jurnal").modal("hide");
            } else {
                $("span.help-block").remove();
                $(".form-group").removeClass("has-error");
                $.each(data.message,function(index,value){
                    if(value){
                        $("input[name="+ index + "]").after(value).parent().addClass("has-error");
                    }
                }) 
            } 
        }
    })
}

function tampilJurnal(){
    $.ajax({
        url: "jurnal/data",
        type: "ajax",
        dataType: "JSON",
        success: function(data){
            var html = "";
            $.each(data,function(key,item){
                html += "<tr>" +
                            "<td>"+ item.idjurnal +"</td>" +
                            "<td>"+ item.judul +"</td>" +
                            "<td>"+ item.nim +"</td>" +
                            "<td>"+ item.tahun +"</td>" +
                            "<td>"+ konversiJurusan(item.jurusan) + "</td>" +
                            "<td>"+ item.jumlahhalaman +"</td>" +
                            "<td><button class='btn btn-warning btn-block' data-id='"+ item.idjurnal +"'><span class='glyphicon glyphicon-pencil'></span> Rubah</button></td>" +
                            "<td><button class='btn btn-danger btn-block data-id='"+ item.idjurnal +"'><span class='glyphicon glyphicon-trash'></span> Hapus</button></td>" +
                            "<td><a href='jurnaldetail' data-idjurnal='"+ item.idjurnal +"' class='btn btn-primary btn-block'><span class='glyphicon glyphicon-plus'></span> <span class='glyphicon glyphicon-pencil'></span> Detail Jurnal</a></td>" +
                        "</tr>";
            });
            $("tbody#table-jurnal").html(html);
        }
    })
}