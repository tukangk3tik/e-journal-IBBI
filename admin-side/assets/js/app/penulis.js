var mode = "";          //parameter untuk menentukan add atau edit
var val = "";           //parameter untuk mengatur perubahan bagian konsentrasi

$(document).ready(function(){
    tampilPenulis();

    $("#reload").click(function(){
        tampilPenulis();
    });

    $("#tambah").click(function(){
        mode = "tambah";
        val = "a";
        $("form")[0].reset();
        $("#mode").html("Tambah");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("input[name='nim']").removeAttr("readonly");
        $("#konsentrasi").html('<option disabled selected value="">--pilih-konsentrasi--</option>');
        $("#form-penulis").modal("show");
    });

    $("tbody").on("click","#rubah",function(){
        mode = "ubah";
        val = "b";
        var id = $(this).data("id");
        $("span.help-block").remove();
        $(".form-group").removeClass("has-error");
        $("input[name='nim']").attr("readonly",true);
        bacaPenulis(id);
    });
    
    $("tbody").on("click","#hapus",function(){
        var id = $(this).data("id");
        hapusPenulis(id);
    });
    
    $("#simpan").click(function(){
        simpanPenulis();
    });
});

/*  ---------FUNCTION----------   */

function gantiKons(params){         //fungsi untuk mengatur pilihan pada combo box
    opsi = "";
    
    if (mode == "tambah" && val == "a"){
        opsi = params.value;
    } else if (mode == "ubah" && val == "a"){
        opsi = params.value;
    } else if (mode == "ubah" && val == "b"){
        opsi = params;
    }

    if (opsi == 'SI'){
        $("#konsentrasi").html('<option value="MM">Multimedia</option><option value="ADB">Administrasi Bisnis</option>');
    } else if (opsi == 'TI'){
        $("#konsentrasi").html('<option value="RPL">Rekayasa Perangkat Lunak</option><option value="JK">Jaringan Komputer</option>');
    } 
}

function tampilPesan(mode){
    var divMessage = "div class='alert alert-success'> Berhasil <strong>"+mode.toUpperCase() + "</strong> Data Penulis </div>";
    $(divMessage).prepentTo("container").delay(2000).slideUp("slow");
}

function hapusPenulis(id){
    if(confirm("Anda yakin hapus?")){
        $.ajax({
            url: "penulis/hapus/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data){
                if(data.status){
                    tampilPenulis();
                    //showMessage("hapus");
                }
            }
        })
    }
}

function bacaPenulis(id){
    $("form")[0].reset();

    $.ajax({
        url: "penulis/baca/"+id,
        type: "POST",
        dataType: "JSON",
        success: function(data){
            $("#nim").val(data.nim);
            $("#nama").val(data.nama);
            $("#tanggallahir").val(data.tanggallahir);
            $("#tempatlahir").val(data.tempatlahir);
            $("#alamat").val(data.alamat);
            $("#jurusan").val(data.jurusan);

            gantiKons(data.jurusan);                        //mengatur opsi konsentrasi

            $("#konsentrasi").val(data.konsentrasi);
            $("#telepon").val(data.telepon);
            $("#email").val(data.email);

            $("#mode").html("Rubah");
            $("#form-penulis").modal("show");
            val = "a";
        }
    })
}

function simpanPenulis(){
    $.ajax({
        url: "penulis/simpan/"+mode,
        type: "POST",
        data: $("form").serialize(),
        dataType: "JSON",
        success: function(data){
            if(data.status){
                tampilPenulis();
                //showMessage(mode);

                $("#form-penulis").modal("hide");
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

function tampilPenulis(){
    $.ajax({
        url: "penulis/data",
        type: "ajax",
        dataType: "JSON",
        success: function(data){
            var html = "";
            for(i=0;i<data.length;i++){
                html += "<tr>" +
                        "<td>"+ data[i].nim +"</td>"+
                        "<td>"+ data[i].nama + "</td>"+
                        "<td>"+ data[i].tanggallahir +"</td>"+
                        "<td>"+ data[i].tempatlahir +"</td>"+
                        "<td>"+ data[i].alamat +"</td>"+
                        "<td>"+ konversiJurusan(data[i].jurusan) +"</td>"+
                        "<td>"+ konversiKonsentrasi(data[i].konsentrasi) +"</td>"+
                        "<td>"+ data[i].telepon +"</td>"+
                        "<td>"+ data[i].email +"</td>"+
                        "<td><button id='rubah' class='btn btn-warning btn-block' data-id='"+ data[i].nim +"'>"+
                            "<span class='glyphicon glyphicon-pencil'></span> Rubah</button>"+
                        "<td><button id='hapus' class='btn btn-danger btn-block' data-id='"+ data[i].nim +"'>"+
                            "<span class='glyphicon glyphicon-trash'></span> Hapus</button></td></tr>";
            }
            $("tbody").html(html);
        }
    })
}