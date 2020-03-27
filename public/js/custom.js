function add_row()
{
    $rowno=$("#employee_table tr").length;
    $rowno=$rowno+1;
    $("#employee_table tr:last").after("" +
        "<tr id='row"+$rowno+"'>" +
        "<td>" +
        "<input class='form-control' autocomplete='off' name='answers[][answer]' type='text'  placeholder='Cevap oluşturunuz.'>" +
        "</td>" +
        "</td>" +
        "<td><input class='btn btn-danger' type='button' value='Sil' onclick=delete_row('row"+$rowno+"')></td></tr>");
}
function delete_row(rowno)
{
    $('#'+rowno).remove();
}
