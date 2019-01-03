
$(document).ready(function(){
    tampilJurnal();

    $("#tambah").click(function(){
        $("form")[0].reset();
        $("#form-jurnal").modal("show");
    })
})

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