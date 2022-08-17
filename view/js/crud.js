function modificar(obj) {
    mnombre = document.getElementById('txtnombre');
    mapellido = document.getElementById('txtapellido');
    mcedula = document.getElementById('txtcedula');
    mnumerocel = document.getElementById('txtnumerocel');
    mfecha = document.getElementById('txtfnacimiento');
    memail = document.getElementById('txtemail');
    mcontraseña = document.getElementById('txtcontrasena');

    mcedula.value = (obj.children[0].innerHTML);
    mnombre.value = (obj.children[1].innerHTML);
    mapellido.value = (obj.children[2].innerHTML);
    mnumerocel.value = (obj.children[3].innerHTML);
    mfecha.value = (obj.children[4].innerHTML);
    memail.value = (obj.children[5].innerHTML);
    mcontraseña.value = (obj.children[6].innerHTML);

}

function eliminar(obj) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Desea Eliminar?',
        text: '¡No podrás revertir esto!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, Borrar esto!',
        cancelButtonText: 'No, Cancelelo!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            swalWithBootstrapButtons.fire(
 
            )
            window.location ="index.php?ruta=Usuario&Eliminar=" + obj.children[0].innerHTML;
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'registro',
                'el registro no se elimino :)',
                'error'
            )
        }

    })




}