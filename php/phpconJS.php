<?php

function sweetalert2()
{
    echo "<script>         
    Swal.fire({
        title: 'Error!',
        text: 'Error, algún campo es incorrecto',
        icon: 'error',
        confirmButtonText: 'Cancelar'
    }); 
    </script>";
}
