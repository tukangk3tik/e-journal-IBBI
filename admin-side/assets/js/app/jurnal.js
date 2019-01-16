var mode = "";
var html = "";

$(document).ready(function(){ 
    tampilJurnal();
    
    $("#filter").click(function(){
        var jurusan = $("#jurusan-fill").val();
        var tahun = $("#tahun-fill").val(); 

        $("tbody#table-jurnal").empty();
        filterJurnal(jurusan,tahun);
    });

    $("#tambah").click(function(){
        mode = "tambah";
        $("form")[0].reset();
        $("select#nim").empty();
        bacapenulisTerdaftar(mode);
        $("#mode").html("Tambah");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("#form-jurnal").modal("show");
    });

    $("tbody").on("click","#rubah",function(){
        mode = "ubah";
        var id = $(this).data("id");
        $("select#nim").empty();
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        bacaJurnal(id);
    });

    $("tbody").on("click","#hapus",function(){
        var id = $(this).data("id");
        hapusJurnal(id);
    });

    $("#simpan").click(function(){
        simpanJurnal();
    });
})

function tampilPesan(mode){
    var divMessage = "<div class='alert alert-success'> Berhasil <strong>"+ mode.toUpperCase() + "</strong> Jurnal </div>";
    $(divMessage).prependTo(".container").delay(2000).slideUp("slow");
}

function hapusJurnal(id){
    if(confirm("Anda yakin hapus?")){
        $.ajax({
            url: "jurnal/hapus/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
                if(data.status){
                    tampilJurnal();
                    tampilPesan("Hapus");
                }
            }
        })
    }
}

function bacaJurnal(id){
    $("form")[0].reset();

    $.ajax({
        url: "jurnal/baca/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data){
            $("#judul").val(data.judul);
            bacapenulisTerdaftar(mode);
            $("select#nim").append("<option selected value='"+data.nim+"'>"+data.nim+"</option>");

            $("#tahun").val(data.tahun);
            $("#jurusan").val(data.jurusan);
            $("#jumlahhalaman").val(data.jumlahhalaman);
            $("#ringkasan").val(data.ringkasan);
            $("#mode").html("Rubah");
            $("#form-jurnal").modal("show");
        }
    })
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
                            "<td><button id='rubah' class='btn btn-warning btn-block' data-id='"+ item.idjurnal +"'><span class='glyphicon glyphicon-pencil'></span> Rubah</button></td>" +
                            "<td><button id='hapus' class='btn btn-danger btn-block' data-id='"+ item.idjurnal +"'><span class='glyphicon glyphicon-trash'></span> Hapus</button></td>" +
                            "<td><form action='jurnal/jurnaldtl' method='POST'><input hidden type='text' name='idjurnal' value='"+item.idjurnal+"'>"+
                                "<input type='submit' class='btn btn-primary btn-block' value=' Detail Jurnal '></form></td>" +
                        "</tr>";
            });
            $("tbody#table-jurnal").html(html);
        }
    })
}

function bacapenulisTerdaftar(){
    $.ajax({
        url: "jurnal/getnim",
        type: "ajax",
        dataType: "JSON",
        success: function(data){
            var html = "";
            var n = '<option disabled selected id="pilih" value="">--pilih-NIM--</option>';
            $.each(data,function(key,item){
                html += "<option value='"+item.nim+"'>"+item.nim+"</option>";
            });
            if (mode=="tambah"){
                $("select#nim").append(n).append(html);
            } else if (mode=="ubah"){
                $("select#nim").append(html);
            }
            
        }
    })
}

function filterJurnal(jurusan,tahun){
    $.ajax({
        url: "jurnal/filter/"+jurusan+"/"+tahun,
        type: "POST",
        dataType: "JSON",
        success: function(data){
            var html = "";
            for(i=0;i<data.length;i++){
                html += "<tr>" +
                            "<td>"+ data[i].idjurnal +"</td>" +
                            "<td>"+ data[i].judul +"</td>" +
                            "<td>"+ data[i].nim +"</td>" +
                            "<td>"+ data[i].tahun +"</td>" +
                            "<td>"+ konversiJurusan(data[i].jurusan) + "</td>" +
                            "<td>"+ data[i].jumlahhalaman +"</td>" +
                            "<td><button id='rubah' class='btn btn-warning btn-block' data-id='"+ data[i].idjurnal +"'><span class='glyphicon glyphicon-pencil'></span> Rubah</button></td>" +
                            "<td><button id='hapus' class='btn btn-danger btn-block' data-id='"+ data[i].idjurnal +"'><span class='glyphicon glyphicon-trash'></span> Hapus</button></td>" +
                            "<td><form action='jurnal/jurnaldtl' method='POST'><input hidden type='text' name='idjurnal' value='"+data[i].idjurnal+"'>"+
                                "<input type='submit' class='btn btn-primary btn-block' value=' Detail Jurnal '></form></td>" +
                        "</tr>";
            };
            $("tbody#table-jurnal").html(html);
        }
    });
}