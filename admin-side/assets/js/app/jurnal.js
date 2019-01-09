var mode = "";
var html = "";

$(document).ready(function(){
    tampilJurnal();

    $("#tambah").click(function(){
        mode = "tambah";
        seleksiNIM();
        $("form")[0].reset();
        $("#mode").html("Tambah");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("#form-jurnal").modal("show");
    });

    $("tbody").on("click","#rubah",function(){
        mode = "ubah";
        var id = $(this).data("id");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        //$("input[name='idjurnal']").attr("readonly",true);
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

function seleksiNIM(){
    html =  "<?php= $penulis = $this->jurnal_model->ambilPenulis(\"tambah\")->result();?>" +
            "<label for='nim'>NIM</label><select id='nim' name='nim' class='form-control'><option disabled selected value=''>--pilih-NIM--</option>"+
            "<?php foreach($penulis as $item): echo '<option value=\"'.$item->nim.'\">'.$item->nim.'</option>' endforeach; ?>"+
            "</select>";
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
            $("#nim").val(data.nim);
            $("#tahun").val(data.tahun);
            $("#jurusan").val(konversiJurusan(data.jurusan));
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
                            "<td><a href='jurnal/jurnaldtl?idjurnal="+ item.idjurnal +"' class='btn btn-primary btn-block'><span class='glyphicon glyphicon-plus'></span> <span class='glyphicon glyphicon-pencil'></span> Detail Jurnal</a></td>" +
                        "</tr>";
            });
            $("tbody#table-jurnal").html(html);
        }
    })
}
