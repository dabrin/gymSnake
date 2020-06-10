
function clear() {
    $('#nombre').val('');
    $('#telefono').val('');
}

function add_idClase(id_clase) {
    $('#id_clase').val(id_clase);
}



    $(document).ready(function () {
    $('#newAccount').validate({
        rules: {
            nombre: {
                required: true,
                minlength: 10,
		        maxlength: 200
            },
            telefono: {
                required: true,
                minlength: 8,
                maxlength: 8
            }
        },
        messages: {
            nombre: {
                required: "Debe ingresar su nombre completo",
                minlength: "Debe incluir al menos un nombre y un apellido"

            },
            telefono: {
                required: "Revise que su número de teléfono sea el correcto",
                minlength: "Su número de teléfono debe tener mínimo 8 dígitos",
                maxlength: "Su número de teléfono debe tener máximo 8 dígitos"
            }
        },
        submitHandler: function (form) {
            $("#btn1");
        }
    });
});







$("#btn1").click(function (e) {
    e.preventDefault();
    var param = {
        id_clase: $('#id_clase').val()
        , nombre: $('#nombre').val()
        , telefono: $('#telefono').val()
    }
    
    Swal.fire({
        title: '¿Está seguro que desea inscribirse en esta clase?',
        text: "En caso de querer cancelar su inscripción después de confirmada, debe de comunicarse al gimnasio!",
        icon: 'warning',
        showCancelButton: true,
        cancelButtonText: 'No',
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, inscribirme!'
    }).then(function (result) {

        if (result.value) {
            $.ajax(
                {
                    data: param,
                    url: '?controller=Cliente&action=clienteRegister',
                    type: 'POST',
                    success: function (response) {
                        Swal.fire({
                            html: 'Inscrito!<br>' + 'Lo estaremos esperando :)',
                            type: 'success',
                            icon: 'success'
                        }
                        );
                        $("#listado").load(location.href + " #listado");
                        clear();
                        $("#myModal").modal().hide();
                        $('.modal-backdrop').remove();
                    }
                }
            );
        }
        else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire(
                'Cancelado!',
                'Su inscripción no se ha realizado :(',
                'error'
            )
        }

    })
});


function verRegistro(id_clase) {
    var param = {
        'id_clase': id_clase
    };

    $.ajax(
        {
            data: param,
            url: '?controller=Cliente&action=data_clientView',
            type: 'POST',
            success: function (resp) {
                location.href = "?controller=Cliente&action=clienteView";
            }
        });
    }
    
    function listarClases(id_clase) {
    var param = {
        'id_clase': id_clase
    };

    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=data_claseView',
            type: 'POST',
            success: function (resp) {
                location.href = "?controller=Admin&action=claseView";
            }
        });
}
    
 



