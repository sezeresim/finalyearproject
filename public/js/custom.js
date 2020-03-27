function add_answer()
{
    $rowno=$("#answers_form div").length;
    //console.log($rowno);
    $rowno=$rowno+1;
    $("#answers_form div:last").after("" +
        "<div class='input-group mt-2' id='row"+$rowno+"'>" +
        "<input class='form-control' autocomplete='off' name='answers[][answer]' type='text'  placeholder='Cevap oluşturunuz.'>" +
        "<div class='input-group-append'> " +
        "<button class='btn btn-danger' type='button' onclick=delete_answer('row"+$rowno+"')>"+
        "<i class='fas fa-trash'></i>"+
        "</button>"+
        "</div>" +
        "</div>");
}

function delete_answer(rowno)
{
    $('#'+rowno).remove();
}
