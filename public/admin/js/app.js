$.ajaxSetup({//add this when call ajax
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function() {
    // show notify
    $(".notify").delay(6000).slideUp();

    // Datatable
    $('#dataTables-example').DataTable({
        responsive: true
    });

    //date picker bootstrap
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
});
//Modal delete
$(document).on('click', '.del', function () {
    $form = $(this).find("form");
    $("#btnDel").on("click", function () {
        $form.submit();
    });
});