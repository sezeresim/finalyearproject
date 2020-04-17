function likeIncrement(id){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'POST',
        url: '/public/' + id,
        data: {id: id},
        success: function (data) {
            $("#like_counter_"+id).html(data.success);
        }

    });

}






