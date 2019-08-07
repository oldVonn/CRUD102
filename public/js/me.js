$(function(){
    showData();

    // $('.addData').submit(function(){
    //     let data = $(this).serialize();

    //     $.post(URL+'insertData',data)
    //     .done(function(result){
    //         alert(result);
    //     })
    //     return false;
    // })
    $('.table-main').on('click','.btn-trash',function(){
        let dataid = $(this).attr('dataid');
        $.post(URL+'deleteData.php',{'dataid':dataid})
        .done(function(result){
            if(result == 1){
                alert('Data successfuly deleted');
                location.reload();
            }
        })
        return false;
    })
    $('.table-main').on('click','.btn-update',function(){
        let dataid = $(this).attr('dataid');
        $.post(URL+'updateData.php',{'dataid':dataid}) 
        .done(function(result){
            if(result != ''){
                alert('Data successfully updated');        
            }
        })
        return false;
    })
})
function showData(){
    $.post(URL+'showData.php')
    .done(function(result){
        let data = $.parseJSON(result);
        let append = "";
        let cnt = 1;
        $.each(data,function(key,a){
            append +=   "<tr>"+
                            "<td>"+ cnt++ +"</td>"+
                            "<td>"+a.lastname+"</td>"+
                            "<td>"+a.firstname+"</td>"+
                            "<td>"+a.middlename+"</td>"+
                            "<td>"+a.position+"</td>"+
                            "<td>"+a.company+"</td>"+
                            "<td>"+
                                "<a dataid="+a.id+" class='btn btn-primary btn-sm btn-update'><i class='fas fa-pencil-alt'></i></a>"+
                                "<a dataid="+a.id+" class='btn btn-danger btn-sm btn-trash'><i class='fas fa-trash'></i></a>"+
                            "</td>"+
                        "</tr>";
        })
        $('.table-data').html(append);
    })    
    return false;
}