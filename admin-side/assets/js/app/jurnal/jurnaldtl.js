$(document).ready(function(){
    
    tampilJurnaldtl(temp);

})

function hapusDtl(id,jenis){
    if(confirm("Anda yakin hapus?")){
        $.ajax({
            url: "jurnaldtl/hapus?id="+id+"&stats="+jenis,
            type: "GET",
            dataType: "JSON",
            success: function(data){
                if(data.status){
                    html += "<td><span class='glyphicon glyphicon-remove-circle' style='color:red'></span></td>" +
                            "<td><a disabled class='btn btn-danger btn-block'>" +
                            "<span class='glyphicon glyphicon-trash'></span> Hapus</a></td>" +
                            "<td><a disabled class='btn btn-primary'><span class='glyphicon glyphicon-eye-open'>" +
                            "</span> Lihat</a></td>";
                }
            }
        })
    }
}

function tampilJurnaldtl(id){
    $.ajax({
        url: "jurnaldtl/data/"+id,
        type: "ajax",
        dataType: "JSON",
        success: function(data){
            var html = "";
            $.each(data,function(key,item){
                html += "<td>"+ konversiBab(item.jenis) +"</td> +
                        "<td><span class='glyphicon glyphicon-ok-circle' style='color:green'></span></td>" +
                        "<td><a href='jurnal/jurnaldtl/hapus?id="+ item.idjurnal +"&stats="+ item.jenis +"' class='btn btn-danger btn-block'>" +
                        "<span class='glyphicon glyphicon-trash'></span> Hapus</button></td>" +
                        "<td><a href='jurnal/jurnaldtl/view' class='btn btn-primary'><span class='glyphicon glyphicon-eye-open'>"
                        "</span> Lihat</a></td>";
            });
            $("tbody#table-detail").html(html);
        }
    })
}