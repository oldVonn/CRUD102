$(function(){
    showData();
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
                                "<a dataid="+a.id+" class='btn btn-primary btn-sm'><i class='fas fa-pencil-alt'></i></a>"+
                                "<a dataid="+a.id+" class='btn btn-danger btn-sm'><i class='fas fa-trash'></i></a>"+
                            "</td>"+
                        "</tr>";
        })
        $('.table-data').html(append);
    })    
    return false;
}