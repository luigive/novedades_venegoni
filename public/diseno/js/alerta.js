 /* $(document).ready(function () {
    $("#tabla-data").on('submit', '.form-eliminar', function () {
        event.preventDefault();
        const form = $(this);
        swal.fire({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar'
        }).then((value) => {
            if (value.value) {
               // ajaxRequest(form);
            }
        });
    }); */

  /*  function preguntar(){
        event.preventDefault();
        const form = $(this);
        swal.fire({
            title: '¿ Está seguro que desea eliminar el registro ?',
            text: "Esta acción no se puede deshacer!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Borrar',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
             if (result.value) {
                alert("gola");
             }else{
                 event.preventDefault();
             }
    }*/


    function preguntar(){
        event.preventDefault();
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
          },
          buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
          title: 'Estas Seguro de eliminar?',
          text: "Esto eliminara el registro!",
          type: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Borrar',
          cancelButtonText: 'Cancelar',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            //aqui hacer lo que deba hacer
                $("#form-eliminar").submit();
          } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
          ) {
            //aqui lo que hace si cancela
          }
        })
    }