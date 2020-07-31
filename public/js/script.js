
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

            $("#btn1").ajaxSubmit();
        }
    });
});

function crearTipoClase1() {
    var param = {
        nombre: $('#nombre_').val()
        , icono: $('#icono_').val()
        , descripcion: $('#descripcion_').val()
    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=createTipoClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                $("#createClass").modal('hide');
                $('.modal-backdrop').remove();
            }
        }
    );
}


function crearClase1() {
    var param = {
        id_tipo_clase1: $('#id_tipo_clase1_').val()
        , dia: $('#dia_').val()
        , hora_ini: $('#hora_ini_').val()
        , hora_fin: $('#hora_fin_').val()
        , instructor: $('#instructor_').val()
        , cupos: $('#cupos_').val()
    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=createClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                $("#createClass").modal('hide');
                $('.modal-backdrop').remove();
            }
        }
    );
}


function actualizarTipoClase() {
    var param = {
        id_clase: $('#id_clase').val()
        , nombre: $('#nombre').val()
        , icono: $('#icono').val()
        , descripcion: $('#descripcion').val()

    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=updateTipoClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                $("#myModal").modal('hide');
                $('.modal-backdrop').remove();
            }
        }
    );
}

function actualizarClase() {
    var param = {
        id_clase: $('#id_clase').val()
        , id_tipo_clase: $('#id_tipo_clase_').val()
        , dia: $('#dia').val()
        , hora_ini: $('#hora_ini').val()
        , hora_fin: $('#hora_fin').val()
        , instructor: $('#instructor').val()
        , cupos: $('#cupos').val()


    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=updateClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                $('.modal-backdrop').remove();
                $("#myModal").modal('hide');

            }
        }
    );
}

function eliminarTipoClase(id_clase_) {
    var param = {
        id_clase: id_clase_

    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=deleteTipoClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                //$("#myModal").modal().hide();
                //$('.modal-backdrop').remove();
            }
        }
    );
}


function eliminarClase(id_clase_) {
    var param = {
        id_clase: id_clase_

    }
    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=deleteClase',
            type: 'POST',
            success: function (response) {
                $("#container").load(location.href + " #container");
                //clear();
                //$("#myModal").modal().hide();
                //$('.modal-backdrop').remove();
            }
        }
    );
}





$("#btn1").click(function (e) {


    id_clase_ = $('#id_clase').val();
    nombre_ = $('#nombre').val();
    telefono_ = $('#telefono').val();
    0
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
                        $("#myModal").modal('hide');
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


function clear_TipoClaseModal() {
    $("#id_clase").val("");
    $("#nombre").val("");
    $("#icono").val("");
    $("#descripcion").val("");
}


function clear_ClaseModal() {
    $("#id_clase").val(""); //QUITAR
    $("#id_tipo_clase1").val("");
    $("#dia").val("");
    $("#hora_ini").val("");
    $("#hora_fin").val("");
    $("#instructor").val("");
    $("#cupos").val("");
}


function show_tipoClaseById(id_tipo_clase, nombre, icono) {
    this.id_tipo_clase = id_tipo_clase;
    this.nombre = nombre;
    this.descripcion = descripcion;
    this.icono = icono;
    $("#id_clase").val(this.id_tipo_clase);
    $("#nombre").val(this.nombre);
    $("#icono").val(this.icono);
    $("#descripcion").val("Esto es una descripcion...");
}

function showClaseById(id_clase, id_tipo_clase, dia, hora_ini, hora_fin, instructor, cupos) {
    this.id_clase = id_clase;
    this.id_tipo_clase = id_tipo_clase;
    this.dia = dia;
    this.hora_ini = hora_ini;
    this.hora_fin = hora_fin;
    this.instructor = instructor;
    this.cupos = cupos;

    $("#id_clase").val(this.id_clase);
    $("#id_tipo_clase_").val(this.id_tipo_clase);
    $("#dia").val(this.dia);
    $("#hora_ini").val(this.hora_ini);
    $("#hora_fin").val(this.hora_fin);
    $("#instructor").val(this.instructor);
    $("#cupos").val(this.cupos);

}

function verRegistro(id_clase, dia) {
    var param = {
        'id_clase': id_clase,
        'dia': dia
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
function verRegistroAdm(id_clase, dia) {
    var param = {
        'id_clase': id_clase,
        'dia': dia
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

function listarClases(id_clase, dia) {
    var param = {
        'id_clase': id_clase,
        'dia': dia,

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

function listarClienteClases(id_clase, id_cliente) {
    var param = {
        'id_clase': id_clase,
        'id_cliente': id_cliente

    };

    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=data_clientClassView',
            type: 'POST',
            success: function (resp) {
                location.href = "?controller=Admin&action=clientClassView";
            }
        });
}

function delete_client(id_cliente) {
    var param = {
        'id_cliente': id_cliente
    };

    $.ajax(
        {
            data: param,
            url: '?controller=Admin&action=delete_client',
            type: 'POST',
            success: function (resp) {
                location.href = "?controller=Admin&action=clientClassView";
            }
        });

}


