$(document).ready(function () {
    $('.btn-delete').click(function (e) {
        e.preventDefault();
        var row = $(this).parents('tr');
        var id = row.data('id');
        var form = $('#form-delete');
        var url = form.attr('action').replace(':USER_ID', id);
        var data = form.serialize();
        swal({
                title: "Deseas eliminar esta noticia?",
                text: "Se excluira del sistema!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Aceptar!",
                cancelButtonText: "Cancelar!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm){
                if (isConfirm) {
                    row.fadeOut();//para borrar la fila
                    $.post(url, data, function (result) {
                        swal("Eliminado!", result.message, "success");
                    }).fail(function () {
                        swal("Error!! Noticia no eliminada!");
                        row.show('slow');
                    });

                } else {
                    swal("Cancelado", "La Noticia no fue eliminada", "error");
                }
            });
    });


    $("#registro").click(function(){
        var form = $('#form-data');
        var dato = form.serialize();
        var route = window.location;
        var token = $("#token").val();

        $.ajax({
            url: route,
            headers: {'X-CSRF-TOKEN': token},
            type: 'POST',
            dataType: 'json',
            data:form.serialize(),

            success:function(){
                $("#msj-success").fadeIn();
                $(".aprobado").fadeOut(3000);
            }
        });
    });


});