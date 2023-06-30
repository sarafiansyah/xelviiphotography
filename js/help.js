$(this).ready(function(){

    getRiders();


    $('#btnSave').click(function(){
        var dataSend = $('#formAdd').serialize();
        console.log(dataSend);

        $.ajax({
            type: "POST",
            url: "_php/write.php",
            data: dataSend,
            dataType: "html",
            success: function(result){

                $('.modal-body').html(result);
                $('#btnSave').hide();
                

                }
    })

    })


    $('#btnAdd').click(function(){
        // alert('Laahh');
        $('#modalAdd').modal('show');
    })


    $.ajax({
        type: "GET",
        url: "_php/action.php",
        data: {req:'nama_tim'},
        dataType: "json",
        success: function(result){
            var select;
                $.each(result, function(i, obj){
                    select += "<option value=\""+obj.id+"\">"+obj.nama_tim +"</option>"
                })
                $('#selectNama_tim').html(select);
            }
})

$.ajax({
    type: "GET",
    url: "_php/action.php",
    data: {req:'motorbalap'},
    dataType: "json",
    success: function(result){
        var select;
            $.each(result, function(i, obj){
                select += "<option value=\""+obj.id+"\">"+obj.model +"</option>"
            })
            $('#selectMotor').html(select);
        }
})

    function getRiders(){
        $.ajax({
            type: "GET",
            url: "_php/action.php",
            data: {req:'rows'},
            dataType: "json",
            success: function(response){
                //console.log(response);
                var table;
                $.each(response, function(i, obj){
                    table += "<tr><td>"+ obj.nomor +"</td><td>"+ obj.nama_depan + " " + obj.nama_belakang +"</td><td>"+ obj.status +"</td><td>"+ obj.nama_tim +"</td><td>"+ obj.mesin +"</td><td>"+ obj.model +"</td><td><a href='index.php?page=edit_rider&id=$row[id]' class='btn btn-warning'><i class='fas fa-pen'></i> Edit</a></td><td><a href='index.php?page=delete_rider&id=$row[id]' class='btn btn-danger'><i class='fas fa-trash'></i> Delete</a></td></tr>"

                })
                $('tbody').html(table);
            }
            
    })
    }

})

