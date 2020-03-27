function add_answer()
{
    $rowno=$("#answers_form div").length;
    //console.log($rowno);
    $rowno=$rowno;
    $("#answers_form button:last").before("" +
        "<div class='input-group mt-2' id='row"+$rowno+"'>" +
            "<input class='form-control' autocomplete='off' name='answers[][answer]' type='text'  placeholder='Cevap oluşturunuz.'>" +
            "<div class='input-group-append'> " +
                "<a class='btn btn-danger' type='button' onclick=delete_answer('row"+$rowno+"')>"+
                "<i class='fas fa-trash'></i>"+
                "</a>"+
            "</div>" +
        "</div>");
}

function delete_answer(rowno)
{
    $('#'+rowno).remove();
}
